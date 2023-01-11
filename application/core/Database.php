<?php

namespace WiseChain\core;

use PDO;
use PDOStatement;

class Database
{
    public PDO $pdo;
    public function __construct()
    {
        $dsn = 'mysql:host=127.0.01;port=3306;dbname=wisetest';
        $user = 'root';
        $password = '990088Qq';
        $this->pdo = new PDO($dsn, $user, $password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function prepare($sql): bool|PDOStatement
    {
        return Application::$app->database->pdo->prepare($sql);
    }
}