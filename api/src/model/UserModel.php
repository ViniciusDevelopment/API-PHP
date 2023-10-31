<?php 

namespace Models;
require_once ("vendor/autoload.php");
use Connections\Connection;

Class UserModel {

    // function login ($email , $password) {
    //     $connection = new Connect ();
    //     $sql = $connection -> connect () -> query ("SELECT * FROM usuarios WHERE email = '$email' and senha = '$password'");
    //     $sql = $sql -> fetchAll (PDO::FETCH_ASSOC);
    //     return $sql;
    // }

    function Usuario_Cadastrar ($nome , $email , $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $conexao = new Connection();
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "INSERT INTO usuarios (Nome, Email, Senha) VALUES (?, ?, ?)";
        $stmt = $conectado->prepare($sql);

        $stmt->bind_param("sss", $nome, $email, $senhaHash);
        if ($stmt->execute()) {
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro na inserção
        }
    }

    function Usuario_Listar()
    {
        $conexao = new Connection();
        $conectado = $conexao->conectarBancoDeDados();
        $sql = "SELECT Id, Nome, Email FROM usuarios";
        $result = $conectado->query($sql);
        return $result;
    }

}

?>