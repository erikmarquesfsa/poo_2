<?php
require_once "../classes/Aluno.php";
$aluno = new Aluno();
$aluno->nome = $_POST['nome'];
$aluno->email = $_POST['email'];
$aluno->curso = $_POST['curso'];

$aluno->salvar();

header ("Location: ../template/form.php");

?>