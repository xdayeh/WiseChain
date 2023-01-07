<?php

namespace WiseChain\model;

class Privileges extends DataModel
{

    public static function tableName(): string
    {
        return 'Instructors_Privileges';
    }

    public static function primaryKey(): string
    {
        return 'PrivilegeId';
    }

    public static function attributes(): array
    {
        return ['PrivilegeName_En', 'PrivilegeName_Ar', 'Privilege_URL'];
    }

    public function rules(): array
    {
        return [
            'PrivilegeName_En'  =>
                [
                    self::RULE_REQUIRED,
                    [self::RULE_MIN, 'min' => 3],
                    [self::RULE_MAX, 'max' => 18]
                ],
            'PrivilegeName_Ar'  => [
                self::RULE_REQUIRED,
                [self::RULE_MIN, 'min' => 3],
                [self::RULE_MAX, 'max' => 18]
            ],
            'Privilege_URL'     => [
                self::RULE_REQUIRED,
                [self::RULE_MIN, 'min' => 3],
                [self::RULE_MAX, 'max' => 18]
            ]
        ];
    }
}