<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altura Máxima</title>
    <link rel="stylesheet" href="css/altura.css">
</head>
<body>
    <center>
        <div>
            <h1>Altura Máxima</h1>
            <form action="" method="post" name="formPrev">
            Nome:
            <input type="text" name="nome" id="input-nome" placeholder="Digite seu nome"><br><br>
            Altura do Pai:
            <input type="number" name="alturaPai" id="input-alturas" placeholder="Digite a altura do pai em cm"><br><br>
            Altura da Mãe:
            <input type="number" name="alturaMae" id="input-alturas" placeholder="Digite a altura da mãe em cm"><br><br>
            <input type="submit" value="Calcular"name="bt_submit" id="botao">
            </form>
            <br>
            <details>
            <summary>Ver Resultado</summary>
        <?php
            if(isset($_POST["bt_submit"])) {
                $nome = $_POST["nome"];
                $alturaPai = $_POST["alturaPai"];
                $alturaMae = $_POST["alturaMae"];
                $altMax = ($alturaPai + $alturaMae) / 2 + 0.12;
                echo '<br><br>';
                echo 'Olá '.$nome. ', obrigado por usar meu programa.';
                echo '<br><br>';
                echo 'O máximo de altura que você pode chegar é '.$altMax.' cm';
                }
            ?>
            </details>
        </div>
        <br><br><br><br><br>
        <p>&copy; André Meliunas</p>
    </center>
    
</body>
</html>

