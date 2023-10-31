<?php 

// atribui o namespace (que funciona como apelido), faz o require do autoload e usa o PDO
namespace Connections;
use mysqli;

class Connection{
    public function conectarBancoDeDados(){
        $dbhost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'apiphp';

        $conexao = new \MySQLi($dbhost, $dbUsername, $dbPassword, $dbName);

        if ($conexao->connect_errno) {
            die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
        }

        return $conexao;
    }
}

?>