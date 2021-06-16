<?php


class LoginModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;

    }


    public function validarUsuario($email, $contraseña)
    {
        $listUsuarios = $this->database->query("SELECT * FROM usuario");


        foreach ($listUsuarios as $usuario){
            if ($usuario["password"] == $contraseña && $usuario["name"] == $email){
                $_SESSION["isLogin"] = true;
                return "usuario ok";

            }else{
                return "no coincide";
            }
        }
    }
}