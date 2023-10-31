<?php 

namespace Controllers;
require_once ("vendor/autoload.php");
use Connections\Connection;

class UserController {

    function verifyLogin ($email , $password) {

        $api = new Connection ();

        // definimos a url de destino da api
        $url = "http://localhost:8000/login";

        // aqui montamos o nosso objeto json
        $data = [
            "email" => $email,
            "password" => $password
        ];
        $data = json_encode ($data);

        // aqui definimos o método desejado
        $method = "post";

        // aqui chamamos a função que está na connection e devolvemos a resposta para a view
        // Poderiamos nessa etapa criptografar a resposta com o jwt e guardar ele numa sessão de usuário $_SESSION
        $response = $api -> Api ($url, $method, $data);
        return $response;
    }

    function cadastraUser ($nome, $email , $senha) {

        $api = new Connection ();

        // definimos a url de destino da api
        $url = "http://localhost:8000/CadastroUsuario";

        // aqui montamos o nosso objeto json
        $data = [
            "Nome" => $nome,
            "Email" => $email,
            "Senha" => $senha
        ];
        $data = json_encode ($data);

        // aqui definimos o método desejado
        $method = "post";

        // aqui chamamos a função que está na connection e devolvemos a resposta para a view
        // Poderiamos nessa etapa criptografar a resposta com o jwt e guardar ele numa sessão de usuário $_SESSION
        $response = $api -> Api ($url, $method, $data);
        return $response;
    }


}

?>