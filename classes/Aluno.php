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
}

?>