<?php

$id_alunos = $_GET['id_aluno'];

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = 'SELECT * FROM tb_info_alunos WHERE id_alunos = ' . $id_alunos;

$dados = $banco->query($select)->fetch();

?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    main {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    form {
        width: 450px;
    }
</style>

<main class="container my-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="text-center">
        <img src="./img/<?= $dados['img'] ?>" alt="imagem do perfil" class="img-thumbnail">

        <form action="#">

            <label for="nome">Nome:</label class="form-control">
            <input type="text" value="<?= $dados['nome'] ?>" disabled class="form-control">
            <div class="row mt-2 ">

                <div class="col">
                    <label for="telefone">Telefone:</label>
                    <input type="number" value="<?= $dados['telefone'] ?>" disabled class="form-control">
                </div>

                <div class="col">
                    <label for="email">Email:</label>
                    <input type="email" value="<?= $dados['email'] ?>" disabled class="form-control">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" value="<?= $dados["nascimento"] ?>" disabled class="form-control">
                </div>

                <div class="col my-4 pt-2">
                    <input type="checkbox" class="form-check-input">
                    <label for="frequente">Frequente:</label>
                </div>
            </div>
        </form>
    </div>
</main>