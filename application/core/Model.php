<?php

namespace WiseChain\core;

abstract class Model
{
    abstract public function rules(): array;
    public const RULE_REQUIRED  = 'required';
    public const RULE_MIN       = 'min';
    public const RULE_MAX       = 'max';
    public const RULE_UNIQUE    = 'unique';
    public array $errors        = [];
    public function loadData($data): void
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)){
                $this->{$key} = $value;
            }
        }
    }
    public function validate(): bool
    {
        foreach ($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                if (!is_string($rule)) {
                    $ruleName = $rule[0];
                }
                if ($ruleName === self::RULE_REQUIRED && !$value) {
                    $this->addErrorForRule($attribute, self::RULE_REQUIRED);
                }
                if ($ruleName === self::RULE_MIN && strlen($value) < $rule['min']) {
                    $this->addErrorForRule($attribute, self::RULE_MIN, ['{min}' => $rule['min']]);
                }
                if ($ruleName === self::RULE_MAX && strlen($value) > $rule['max']) {
                    $this->addErrorForRule($attribute, self::RULE_MAX, ['{max}' => $rule['max']]);
                }
                if ($ruleName === self::RULE_UNIQUE) {
                    $className = $rule['class'];
                    $uniqueAttr = $rule['attribute'] ?? $attribute;
                    $tableName = $className::tableName();
                    $statement = Application::$app->database->prepare("SELECT * FROM $tableName WHERE $uniqueAttr = :attr");
                    $statement->bindValue(":attr", $value);
                    $statement->execute();
                    $record = $statement->fetchObject();
                    if ($record){
                        $this->addErrorForRule($attribute, self::RULE_UNIQUE, ['{field}' => $attribute]);
                    }
                }
            }
        }
        return empty($this->errors);
    }
    private function addErrorForRule(string $attribute, string $rule, $params = []): void
    {
        $message = $this->errorMessages()[$rule] ?? '';
        foreach ($params as $key => $value) {
            $message = str_replace($key, $value, $message);
        }
        $this->errors[$attribute][] = $message;
    }
    public function addError(string $attribute, string $message): void
    {
        $this->errors[$attribute][] = $message;
    }
    public function errorMessages(): array
    {
        return [
            self::RULE_REQUIRED => Application::$app->language->dictionary['Error_Required'],
            self::RULE_MIN      => Application::$app->language->dictionary['Error_Min'],
            self::RULE_MAX      => Application::$app->language->dictionary['Error_Max'],
            self::RULE_UNIQUE   => Application::$app->language->dictionary['Error_UNIQUE'],
        ];
    }
    public function hasError($attribute)
    {
        return $this->errors[$attribute] ?? false;
    }
    public function getFirstError($attribute)
    {
        $errors = $this->errors[$attribute] ?? [];
        return $errors[0] ?? '';
    }
}