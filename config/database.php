<?php namespace Database;

use PDO;
class DB{

    public static function connect(){

        $servername = 'localhost';
        $dbname = '';
        $username = 'root';
        $password = '';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo $e;
        }
    }

}