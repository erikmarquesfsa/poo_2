<?php
class Conexao {
    private $host = "localhost";
    private $db = "escola2";
    private $port = "3307";
    private $user = "root";
    private $pass = "";
    private $conn;

    public function conectar(){

        try{
            $this->conn = new PDO(
                "mysql:host={$this->host};port={$this->port};dbname={$this->db}",
                $this->user,
                $this->pass
            );
            return $this->conn;
        }catch (PDOException $e){
            echo "Erro: ".$e->getMessage();            
        }
    }
}


?>