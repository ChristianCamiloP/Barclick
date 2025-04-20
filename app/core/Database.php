<?php
class Database {
    public static function connect() {
        $config = require __DIR__ . '/../../config/config.php';
        try {
            return new PDO("mysql:host={$config['db_host']};dbname={$config['db_name']}", $config['db_user'], $config['db_pass']);
        } catch (PDOException $e) {
            die("DB Connection Failed: " . $e->getMessage());
        }
    }
}
