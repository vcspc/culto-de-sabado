<?php

if(isset($_POST['submit']))

{

    include_once('config.php');

    $louvor1ES = $_POST['louvor1ES'];
    $louvor2ES = $_POST['louvor2ES'];
    $louvor1CD = $_POST['louvor1CD'];
    $louvor2CD = $_POST['louvor2CD'];

    $sql = "DELETE FROM louvores";
    if ($conexao->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conexao->error;
    }

    $stmt = $conexao->prepare("INSERT INTO louvores(louvor1ES, louvor2ES, louvor1CD, louvor2CD) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $louvor1ES, $louvor2ES, $louvor1CD, $louvor2CD);
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
    <title>Louvores</title>
</head>
<body>
    <form class="corpo" action="louvores.php" method="POST">
        
        <section class="corpo__container">

            <h1 class="corpo__container__titulo">Escola Sabatina</h1>

            <div class="corpo__container__item">
                <label for="louvor1ES" class="texto">Louvor 1</label>
                <input class="input" type="text" name="louvor1ES" id="louvor1ES" placeholder="ex: Santo, Santo, Santo">
            </div>

            <div class="corpo__container__item">
                <label for="louvor2ES" class="texto">Louvor 2</label>
                <input class="input" type="text" name="louvor2ES" id="louvor2ES" placeholder="ex: O Deus de Amor">
            </div>

        </section>
        
        <section class="corpo__container">

            <h1 class="corpo__container__titulo">Culto Divino</h1>

            <div class="corpo__container__item">
                <label for="louvor1CD" class="texto">Louvor 1</label>
                <input class="input" type="text" name="louvor1CD" id="louvor1CD" placeholder="ex: Teu Santo Nome">
            </div>

            <div class="corpo__container__item">
                <label for="louvor2CD" class="texto">Louvor 2</label>
                <input class="input" type="text" name="louvor2CD" id="louvor2CD" placeholder="ex: Ao Olhar para Cruz">
            </div>

        </section>

        <div class="btns">
            <button class="btn" type="submit" name="submit">Enviar</button>
            <button type="button" onclick="window.location.href='menu.html'" class="btn">Voltar</button>
        </div>

    </form>
</body>
</html>