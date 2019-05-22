<?php namespace UsuarioController;

//EXAMPLE

require '../models/Usuario.php';

use Model\Usuario;

class UsuarioController{

    public function index(){
        require '../views/Usuarios/index.php';
    }

    public function crear(){
        $usuario = new Usuario();

        $nombre = $_POST['nombre'];
        $usuario->nombre = $nombre;

        $email = $_POST['email'];
        $usuario->email = $email;

        $password = $_POST['password'];
        $usuario->password = $password;
        require '../views/Usuarios/crear.php';    
    }

}