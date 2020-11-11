<?php


namespace Source\Database;


use \PDO;
use \PDOException;

class Connect
{
    private const HOST = "localhost";
    private const DB_NAME = "fullstackphp";
    private const USER = "root";
    private const PASSWD = "";
    private const OPTIONS = [
        PDO::ATTR_CASE => PDO::CASE_NATURAL,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ];

    private static $instance;

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        try {
        self::$instance = new PDO(
            "mysql:host=".self::HOST.";dbname=".self::DB_NAME,
            self::USER,
            self::PASSWD,
            self::OPTIONS
        );
        }catch (PDOException $exception)
        {
            die("<h1>An error has ocurred.</h1>");
        }

        return self::$instance;
    }

    final private function __construct()
    {
    }

    final private function __clone()
    {
    }


}