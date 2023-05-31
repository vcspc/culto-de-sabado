<?php

if(isset($_POST['submit']))

{

    include_once('config.php');


    $oracaoDeInvocacao = $_POST['oracaoDeInvocacao'];
    $hinoInicialCD = $_POST['hinoInicialCD'];
    $oracaoIntercessora = $_POST['oracaoIntercessora'];
    $sermao = $_POST['sermao'];

    $sql = "DELETE FROM `culto-divino`";
    if ($conexao->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conexao->error;
    }

    $stmt = $conexao->prepare("INSERT INTO `culto-divino`(oracaoDeInvocacao, hinoInicialCD, oracaoIntercessora, sermao) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $oracaoDeInvocacao, $hinoInicialCD, $oracaoIntercessora, $sermao);
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Jaldi&family=Ysabeau:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <title>Culto Divino</title>
</head>
<body>

    <form class="corpo" action="culto-divino.php" method="POST">

        <section class="corpo__container">
            
            <h1 class="corpo__container__titulo">Culto Divino</h1>

            <div class=corpo__container__item>
                <label class="texto" for="oracaoDeInvocacao">Oração de Invocação</label>
	            <input class="input" type="text" name="oracaoDeInvocacao" id="oracaoDeInvocacao" placeholder="ex: Bruno">
	        </div>


            <div class=corpo__container__item>
                <label class="texto" for="hinoInicialCD">Hino Inicial</label>
	            <input class="input" type="text" name="hinoInicialCD" id="hinoInicialCD" placeholder="ex: 1 - A Destra de Deus">
	        </div>

	        <div class=corpo__container__item>
                <label class="texto" for="oracaoIntercessora">Oração Intercessora</label>
	            <input class="input" type="text" name="oracaoIntercessora" id="oracaoIntercessora" placeholder="ex: Angela">
	        </div>		

	        <div class=corpo__container__item>
                <label class="texto" for="sermao">Sermão</label>
                <input class="input" type="text" name="sermao" id="sermao" placeholder="ex: Bruno">
	        </div>

        </section>

        <div class="btns">
            <button class="btn" type="submit" name="submit">Enviar</button>
            <button type="button" onclick="window.location.href='menu.html'" class="btn">Voltar</button>
        </div>

    </form>
    
</body>
</html>
