<?php


class LoginController
{
    private $database;
    private $render;

    public function __construct($render, $database)
    {
        $this->database = $database;
        $this->render =$render;
    }

    public function index()
    {

        echo $this->render->render("View/loginView.php");
    }
    public function validar(){
        include_once ("model/LoginModel.php");

        $email = $_POST["email"];
        $contraseña = $_POST["password"];
        $model = new LoginModel($this->database);
        $res = $model->validarUsuario($email,$contraseña);
        if ($res == "no coincide"){
            $data["error"]= "credenciales erroneas";
            echo $this->render->render("View/loginView.php", $data);
        }else{
            header('location:/home/saludar');
            exit();
        }

    }
        public function cerrarSesion(){
            session_destroy();
            header('location:/');
            exit();
        }

}