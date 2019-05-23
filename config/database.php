<?php namespace Database;

class DB{

    public static function connect(){

        $servername = 'localhost';
        $dbname = '';
        $username = '';
        $password = '';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;
        }
        catch(PDOException $e){
            echo $e;
        }
    }
    
}