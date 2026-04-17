<?php
require_once "../config/Conexao.php";

class Aluno{
    private $conn;
    private $table = "alunos";

    public $id;
    public $nome;
    public $email;
    public $curso;

    public function __construct(){
        $db = new Conexao();
        $this->conn = $db->conectar();
    }

    public function salvar(){
        $sql = "INSERT INTO {$this->table} (nome,email,curso) values (:nome,:email, :curso)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":nome",$this->nome);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":curso", $this->curso);

        return $stmt->execute();
    }

    public function listar(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->conn->query($sql);
    }

    public function excluir($id){
        $sql = "DELETE FROM {$this->table} WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id",$id);
        return $stmt->execute();
    }
}

?>