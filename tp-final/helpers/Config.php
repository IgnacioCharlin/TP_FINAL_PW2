<?php


class Config{
    public static function createDataBase(){
        include_once "DataBase.php";
        $config = self::getConfigurationParameters();
        return new DataBase($config["servername"],$config["usermame"],$config["password"],$config["dbname"]);
    }

    private static function getConfigurationParameters(){
     $configDb = "config.ini";
        return parse_ini_file($configDb);
    }

}

?>