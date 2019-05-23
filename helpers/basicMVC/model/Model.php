<?php namespace Model;

require '../config/database.php';

use Database\DB;

class Model{
    protected $attributes = [];
    protected $conn;

    public function __construct(){
        $this->conn = DB::connect();
    }

    public function db(){
        return $this->conn;
    }

    protected function Attributes($attributes){
        if(is_array($attributes)){
            $this->attributes = $attributes;
        }else{
            $trace = debug_backtrace();
            trigger_error(
                'The data type must be an array: ' .
                ' in ' . $trace[0]['file'] .
                ' on line ' . $trace[0]['line'],
                E_USER_NOTICE);
            return null;
        }
    }
    public function __set($name, $value){
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name] = $value;
        }
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property: ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }
    public function __get($name){
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        $trace = debug_backtrace();
        trigger_error(
            'Undefined property: ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
            
        return null;
    }
    public function __isset($name){
        return isset($this->attributes[$name]);
    }
}