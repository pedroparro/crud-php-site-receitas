<?php

class ClassConexao
{
    public $server = "127.0.0.1";
    public $banco = "crud";
    public $user = "root";
    public $pass = "";
    public $pdo;
    
    public function conectaDB(){
        try {
            $pdo = new PDO("mysql:host=$this->server;dbname=$this->banco", $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conectado com sucesso";
        } catch (PDOException $erro) {
            echo "Erro de conexão";
            return $erro->getMessage();
        }
        return $pdo;
    }
     
}
$pdo = new ClassConexao();
$pdo->conectaDB("127.0.0.1", "crud", "root", "");
?>
