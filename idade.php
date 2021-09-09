<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias Vividos</title>
    <link rel="stylesheet" href="css/idade.css">
</head>
<body>
    <center>
        <div>
            <h1>Dias Vividos</h1>
            <form action="" method="post" name="formPrev">
            Nome:
            <input type="text" name="nome" id="input-nome" placeholder="Digite seu nome"><br><br>
            Idade:
            <input type="number" name="idade" id="input-idade" placeholder="Digite sua idade"><br><br>
            <input type="submit" value="Calcular"name="bt_submit" id="botao">
            </form>
            <br>
            <details>
            <summary>Ver Resultado</summary>
            <?php
                if(isset($_POST["bt_submit"])){
                    $nome = $_POST["nome"];
                    $idade = $_POST["idade"];
                    $idaMeses = $idade * 12;
                    $idaDias = $idade * 365;
                    $idaHoras = $idaDias * 24;
                    echo '<br><br>';
                    echo 'Olá '.$nome. ', muito obrigado por usar meu programa.';
                    echo '<br><br>';
                    echo 'Você já viveu '.$idade.' anos, '.$idaMeses.' meses, ' .$idaDias. ' dias e ' .$idaHoras. ' horas.';
                }
            ?>
            </details>
        </div>
        <br><br><br><br><br>
        <p>&copy; André Meliunas</p>
    </center>
</body>
</html>

