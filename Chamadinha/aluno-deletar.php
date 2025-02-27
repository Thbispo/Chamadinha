<?php
echo '<h1>Aluno-deletar.php</h1>';

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$idFormulario = $_GET['id'];

// Apagando a tabela tb_alunos
$delete = 'DELETE FROM tb_alunos WHERE  id = :id';
$box = $banco->prepare($delete);
$box->execute([

    ':id' => $idFormulario

]);

// Apagando a tabela tb_info_alunos
$delete = 'DELETE FROM tb_info_alunos WHERE  id_alunos = :id_alunos';
$box = $banco->prepare($delete);
$box->execute([

    ':id_alunos' => $idFormulario

]);

echo '<script> 
alert ("Usuário apagado com Sucesso!!!") 
window.location.replace("index.php")
</script>';
//header('location:index.php');