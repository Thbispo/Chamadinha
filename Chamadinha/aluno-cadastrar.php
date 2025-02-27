<?php
echo'<h1>Cadastro de Aluno<?h1>';

var_dump(
    $_POST
);


$telefoneFormulario = $_POST['telefone'];
$emailFormulario = $_POST['email'];
$nascimentoFormulario = $_POST['nascimento'];
$frequenteFormulario = $_POST['frequente'];
$id_alunosFormulario = $_POST['id_alunos'];
$imgFormulario = $_POST['img'];

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user , $password);

$insert = 'INSERT INTO tb_info_alunos (telefone,email,nascimento,frequente,id_alunos,img) VALUE (:telefone,:email,:nascimento,:frequente,:id_alunos,:img)';

$box = $banco->prepare($insert);



$id_alunos = $banco->lastInsertId();

echo $id_alunos;

$box ->execute([
    
':telefone' => $telefoneFormulario,
':email' => $emailFormulario,
':nascimento'=> $nascimentoFormulario,
':frequente' => $frequenteFormulario,
':id_alunos'=> $id_alunosFormulario,
':img' => $imgFormulario


])



?>