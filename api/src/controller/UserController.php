<?php 

// atribui o namespace (apelido), chama o autoload para poder chamar classes de outros arquivos
// chama o arquivo UserModel com a classe UserModel

namespace Controllers;
require_once ("vendor/autoload.php");
use Models\UserModel;

Class UserController {

    // recebe um objeto json, decodifica ele e guarda seus campos para passar como parâmetro
    // para a função do objeto $user instanciado com a classe UserModel.
    // Se tudo funcionou o banco retornou 1 linha que terá seus campos encapsulados na variável
    // $data que será transformada num objeto json para ser retornada

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

    function cadastrarUsuario ($jsonObject) {
        $user = new UserModel ();

        $data = json_decode ($jsonObject , true);

        $nome = $data ["Nome"];
        $email = $data ["Email"];
        $senha = $data ["Senha"];
    
        $result = $user -> Usuario_Cadastrar ($nome, $email, $senha);
   
        if ($result == true) {
            return true;
            
        }
        return false;
    }
}

?>