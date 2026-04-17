<?php
require_once "../classes/Aluno.php";
$id = $_GET['id'];
$aluno = new Aluno();
$aluno->excluir($id);

header ("Location:../template/index.php");

?>