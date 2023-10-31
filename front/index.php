<?php 

require_once ("vendor/autoload.php");

$url = $_SERVER ["REQUEST_URI"];


//ROTEAMENTO DO FRONTEND
switch ($url) {
    case "/" : 
        include ("./src/view/Login.php");
        break;
    case "/login" : 
        include ("./src/view/Login.php");
        break;
    case "/CadastroUsuario" : 
        include ("./src/view/CadastroUsuario.php");
        break;
    default : 
        include ("./src/view/NotFound.php");
        break;
}
?>