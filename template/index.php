<?php
require_once "../classes/Aluno.php";
$aluno = new Aluno();
$lista = $aluno->listar();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <a href="form.php">Novo Aluno</a>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
    </table>
</body>
</html>