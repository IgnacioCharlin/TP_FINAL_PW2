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
        $msg["vista"] = "View/loginView.php";
        $listUsuarios = $this->database->query("SELECT * FROM usuario");


        foreach ($listUsuarios as $usuario){
            if ($usuario["rol"] != "inactivo") {
                if ($usuario["password"] == $contraseña && $usuario["name"] == $email) {
                    $_SESSION["isLogin"] = true;
                    $_SESSION["usuario"] = $usuario["name"];

                    return header('location:/home/saludar');

                } else {
                    $msg["error"] =   "no coincide";
                    return $msg;
                }
            } else {
                $msg["error"] =  "usuario inactivo";
                return $msg;
            }
        }
    }
}