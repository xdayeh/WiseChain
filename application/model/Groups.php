<?php

namespace WiseChain\model;

class Groups extends DataModel
{
    public static function tableName(): string
    {
        return 'Instructors_Groups';
    }

    public static function primaryKey(): string
    {
        return 'GroupId';
    }

    public static function attributes(): array
    {
        return ['GroupName_En', 'GroupName_Ar'];
    }

    public function rules(): array
    {
        return [
            'GroupName_En' =>
                [
                    self::RULE_REQUIRED,
                    [self::RULE_MIN, 'min' => 3],
                    [self::RULE_MAX, 'max' => 18]
                ],
            'GroupName_Ar' => [
                self::RULE_REQUIRED,
                [self::RULE_MIN, 'min' => 3],
                [self::RULE_MAX, 'max' => 18]
            ]
        ];
    }
}