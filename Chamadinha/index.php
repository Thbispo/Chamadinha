<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

// echo "Olá";

$dsn = 'mysql:dbname=bd_chamadinha;host=localhost'; //Usa a string para conexão com o Banco
$user = 'root'; // String para o usuário do Banco
$password = ''; // Define a senha do Banco como vazia

$banco = new PDO($dsn, $user, $password); // Cria uma conexão com o banco usando a extensão PDO

$select = "SELECT * FROM tb_aluno"; // Define uma consulta SQL para selecionar todos os registros da tabela

$resultado = $banco->query($select)->fetchAll(); //executa uma consulta SQL usando (`$banco`) e recupera todos os resultados como um array.
// Os resultados são armazenados na variável `$resultado`, permitindo acesso aos dados buscados do banco de dados 


// echo '<pre>'; //pre serve para organizar 
// var_dump($resultado); //ele faz um debug das informações
?>

<main class="container my-5"> <!--Classe do Bootstrap -->
    <table class="table table-striped"> <!--Abre a tabela -->
        <div class="my-3 d-flex justify-content-end"> <!-- -->
            <a href="formulario.php" class="btn btn-success">Cadastrar Novo Aluno</a> <!-- Botão de cadastro de Alunos que leva ao formulario.php-->
        </div>
        <tr>
            <td>    id  </td> <!--Titulo Mostrado na Primeira Coluna -->
            <td>    nome  </td> <!--Titulo Mostrado na Segunda Coluna -->
            <td class="text-center">  ação </td> <!--Titulo Mostrado na Terceiro Coluna -->
        </tr>

        <?php foreach($resultado as $linha) {?> <!-- $resultado loop sobre cada registro das array vindo do banco
            $linha é a variável que armazena os dados de cada aluno -->
            <tr>
                <td>  <?=$linha['id'] ?> </td> <!-- Sintaxe para imprimir o ID do aluno. -->
                <td>  <?php echo $linha['nome'] ?> </td> <!-- Sintaxe para imprimir o Nome -->
                <td class="text-center"><!-- Alinhar o texto no centro  -->
                    <a class="btn btn-primary" href="ficha.php?id_aluno=<?=$linha['id'] ?>">Abrir</a> <!-- Botão Abrir redireciona o ficha.php do aluno na URL -->
                    <a class="btn btn-warning" href="formulario-editar.php?id_aluno_alterar=<?=$linha['id'] ?>">Editar</a><!-- Botão Editar redireciona formulario-editar.php  na URL  -->
                    <a class="btn btn-danger" href="aluno-deletar.php?id=<?=$linha['id'] ?>">Excluir</a> <!-- Botão Excluir redireciona o aluno-deletar.php o na URL -->
                                                <!-- caminho arquivo ? variável-->
                </td>
            </tr>
        <?php } ?>
    </table>
</main>
