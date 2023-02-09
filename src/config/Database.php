<?php
namespace database;

use mysqli;

ini_set("display_errors", true);
error_reporting(E_ALL);
class Database
{
    public static function getConnection() {
        echo " -- here -- ";
        $envPath  = realpath(dirname(__FILE__) . "/../env.ini");
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);

        if ($conn->connect_error) {
            die("Error: " . $conn->connect_error);
        }
        return $conn;
    }

    public static function getResultFromQuery($sql) {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
}