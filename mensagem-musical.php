<?php

if(isset($_POST['submit']))

{

    include_once('config.php');

    $mensagemMusicalES = $_POST['mensagemMusicalES'];
    $mensagemMusicalCD = $_POST['mensagemMusicalCD'];

    $sql = "DELETE FROM `mensagem-musical`";
    if ($conexao->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conexao->error;
    }

    $stmt = $conexao->prepare("INSERT INTO `mensagem-musical`(mensagemMusicalES, mensagemMusicalCD) VALUES (?, ?)");
    $stmt->bind_param("ss", $mensagemMusicalES, $mensagemMusicalCD);
    $stmt->execute();

    echo "New record created successfully";

    $stmt->close();
    $conexao->close();
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="./css/forms.css">
    <title>Mensagem Musical</title>
</head>
<body>
    <form action="mensagem-musical.php" method="POST" class="corpo">
        
        <section class="corpo__container">

            <h1 class="corpo__container__titulo">Escola Sabatina</h1>

            <div class="corpo__container__item">
                <label for="mensagemMusicalES" class="texto">Mensagem Musical</label>
                <input class="input" type="text" name="mensagemMusicalES" id="mensagemMusicalES" placeholder="ex: Sônia">
            </div>

        </section>
        
        <section class="corpo__container">

            <h1 class="corpo__container__titulo">Culto Divino</h1>

            <div class="corpo__container__item">
                <label for="mensagemMusicalCD" class="texto">Mensagem Musical</label>
                <input class="input" type="text" name="mensagemMusicalCD" id="mensagemMusicalCD" placeholder="ex: Sônia">
            </div>

        </section>

        <div class="btns">
            <button class="btn" type="submit" name="submit">Enviar</button>
            <button type="button" onclick="window.location.href='menu.html'" class="btn">Voltar</button>
        </div>

    </form>
</body>
</html>