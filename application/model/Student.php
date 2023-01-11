<?php

namespace WiseChain\model;

class Student extends DataModel
{
    public string $ID;
    public string $Student_ID;
    public string $Student_Name;
    public string $Grade;
    public string $Approve;
    public static function tableName(): string
    {
        return 'test';
    }

    public static function primaryKey(): string
    {
        return 'ID';
    }

    public static function attributes(): array
    {
        return ['ID','Student_ID','Student_Name','Grade','Approve'];
    }

    public function rules(): array
    {
        return [
            'Grade' =>
                [
                    self::RULE_REQUIRED,
                    [self::RULE_NUMBER_MIN, 'nMin' => 0],
                    [self::RULE_NUMBER_MAX, 'nMax' => 100]
                ]
        ];
    }

}