<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade Cachorro</title>
    <link rel="stylesheet" href="css/cachorro.css"
</head>
<body>
    <center>
        <div>
            <h1>Idade Cachorro</h1>
            <form action="" method="post" name="formPrev">
            Nome do Cachorro:
            <input type="text" name="nome" id="input-nome" placeholder="Digite o nome do cachorro"><br><br>
            Idade do Cachorro:
            <input type="number" name="idade" id="input-idade" placeholder="Digite a idade do cachorro"><br><br>
            <input type="submit" value="Calcular"name="bt_submit" id="botao">
            </form>
            <br>
            <details>
            <summary>Ver Resultado</summary>
        <?php
            if(isset($_POST["bt_submit"])) {
                $nome = $_POST["nome"];
                $idade = $_POST["idade"];
                $idDog = $idade * 7;
                echo '<br><br>';
                echo 'Olá, seu cachorro se chama '.$nome;
                echo '<br><br>';
                echo 'Ele tem '.$idDog. ' anos humanos ';
                }
        ?>
            </details>
        </div>
        <br><br><br><br><br>
        <p>&copy; André Meliunas</p>
    </center>
</body>
</html>

