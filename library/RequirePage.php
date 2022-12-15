<?php

class RequirePage{
    static public function requireModel($model){
        return require_once "model/$model.php";
    }
    static public function redirectPage($page){
        $serverName = $_SERVER['SERVER_NAME'];
        return header("Location: https://$serverName/TP3_MVC_Twig/?url=".$page);
    }

}

?>