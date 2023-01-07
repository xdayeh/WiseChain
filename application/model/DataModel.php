<?php

namespace WiseChain\model;

use WiseChain\core\Application;
use WiseChain\core\Model;

abstract class DataModel extends Model
{
    abstract public static function tableName(): string;
    abstract public static function primaryKey(): string;
    abstract public static function attributes(): array;
    public static function findOne($where)
    {
        $tableName = static::tableName();
        $attributes = array_keys($where);
        $sql = implode("AND", array_map(fn($attr) => "$attr = :$attr", $attributes));
        $statement = Application::$app->database->prepare("SELECT * FROM $tableName WHERE $sql");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }
    public function save(): bool
    {
        $tableName  = $this->tableName();
        $attributes = $this->attributes();
        $params     = array_map(fn($attr) => ":$attr", $attributes);
        $statement  = Application::$app->database->prepare("INSERT INTO $tableName (".implode(',', $attributes).") VALUES (".implode(',', $params).")");
        foreach ($attributes as $attribute){
            $statement->bindValue(":$attribute", $this->{$attribute});
        }
        $statement->execute();
        return true;
    }

    public function getAll($columns = '*', $filter = null): bool|array
    {
        if (is_array($columns)) $columns = implode(', ', $columns);
        $query = "SELECT {$columns} FROM " . static::tableName();
        if ($filter) $query .= " WHERE {$filter[0]} {$filter[1]} ?";

        $stmt = Application::$app->database->prepare($query);
        if ($filter) {
            $stmt->bindValue(1, $filter[2]);
        }
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }
}