<?php

class Connection
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getConnection()
    {
        if (!isset(self::$instance)) {
            $dbname = 'TabletStorage';
            $host = 'database';
            $user = 'docker';
            $password = '&stu$Fl4sk';

            try {
                self::$instance = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                echo 'Erro: ' . $exception;
            }
        }

        return self::$instance;
    }
}
