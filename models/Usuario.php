<?php namespace Model;

require '../helpers/basicMVC/model/Model.php';

use Model\Model;

class Usuario extends Model{

    public function __construct(){
        $this->Attributes([
            'nombre' => '',
            'email' => 0,
            'password' => ''
        ]);
    }

    public function all(){
        return "Sacando todos los usuarios.";
    }
    
}