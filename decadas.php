<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previsão Décadas</title>
    <link rel="stylesheet" href="css/decadas.css">


</head>
<body>
    <center>
        <div>
            <h1>Previsão Décadas</h1>
            <form action="" method="post" name="formPrev">
            Nome:
            <input type="text" name="nome" id="input-nome" placeholder="Digite seu nome"><br><br>
            Idade:
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
                $umaDec = $idade + 10;
                $duasDec = $idade + 20;
                $tresDec = $idade + 30;
                $quaDec = $idade + 40;
                $cinDec = $idade + 50;
                echo '<br><br>';
                echo 'Olá '.$nome. ', muito obrigado por usar meu programa.';
                echo '<br><br>';
                echo 'Atualmente você tem '.$idade. ' anos ';
                echo '<br><br>';
                echo 'Sua idade em <b>uma</b> década: '.$umaDec;
                echo '<br><br>';
                echo 'Sua idade em <b>duas</b> décadas: '.$duasDec;
                echo '<br><br>';
                echo 'Sua idade em <b>três</b> décadas: '.$tresDec;
                echo '<br><br>';
                echo 'Sua idade em <b>quatro</b> décadas: '.$quaDec;
                echo '<br><br>';
                echo 'Sua idade em <b>cinco</b> décadas: '.$cinDec;
                }
        ?>
            </details>
        </div>
        <br><br><br><br><br>
        <p>&copy; André Meliunas</p>
    </center>
</body>
</html>

