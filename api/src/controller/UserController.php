<?php

namespace Controllers;

require_once("vendor/autoload.php");

use Models\UserModel;

class UserController
{

    // function login ($jsonObject) {
    //     $user = new UserModel ();

    //     $data = json_decode ($jsonObject , true);
    //     $email = $data ["email"];
    //     $password = $data ["password"];

    //     $user = $user -> login ($email , $password);

    //     if (isset ($user [0])) {

    //         $data = [
    //             "name" => $user [0] ["nome"],
    //             "email" => $user [0] ["email"],
    //             "password" => $user [0] ["senha"]
    //         ];

    //         $data = json_encode ($data);

    //         return $data;
    //     }
    // }

    function cadastrarUsuario($jsonObject)
    {
        $user = new UserModel();

        $data = json_decode($jsonObject, true);

        $nome = $data["Nome"];
        $email = $data["Email"];
        $senha = $data["Senha"];

        $result = $user->Usuario_Cadastrar($nome, $email, $senha);
        echo ($result);
        if ($result == true) {
            return true;
        }
        return false;
    }

    function listarUsuario()
    {
        $user = new UserModel();
        $result = $user->Usuario_Listar();
        return $result;
    }
}
