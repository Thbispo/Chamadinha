<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <section id="formulario">
        <form action="./aluno-cadastrar.php" method="post">

            <h1>Formulário</h1>


            <label for="nome"></label>
            <input type="text" placeholder="Nome" name="nome">

            <label for="telefone"></label>
            <input type="number" placeholder="Telefone" name="telefone">

            <label for="email"></label>
            <input type="email" placeholder="E-Mail" name="email">


            <label for="data_nascimento"></label>
            <input type="date" placeholder="Data de Nascimento" name="nascimento">


            <div>
                <label for="frequente">Frequente</label>
                <input type="checkbox" class="form-check-input" name="frequente">
            </div>

            <label for="id"></label>
            <input type="text" placeholder="ID" id="id_alunos">


            <label for="Imagem"></label>
            <input type="file" checked placeholder="Imagem" name="img">

            <button type="submit">Enviar</button>


        </form>

        <!--
    MÉTODO DE ENVIO
      GET-> manda informações através da URL
      POST -> manda informações através do corpo do arquivo...
      Action -> FALA PARA ONDE DEVE ENVIAR OS DADOS !--->


        <style>
            h1 {
                text-align: center;
                font-family: Arial, sans-serif;
            }



            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                font-family: Arial, sans-serif;
            }

            #formulario {
                display: flex;
                flex-direction: column;
                width: 340px;
                padding: 20px;


            }

            label {
                margin: 10px 0 5px;
            }

            input[type="text"],
            input[type="email"],
            input[type="date"],
            input[type="number"] {
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                width: 300px;
            }

            input[type="checkbox"] {
                margin-right: 5px;
            }

            button {
                padding: 10px;
                background-color: rgb(102, 61, 199);
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 95%;
                margin-top: 10px;
            }
        </style>

    </section>
</body>

</html>