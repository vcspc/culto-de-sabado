<?php

if(isset($_POST['submit']))

{

    include_once('config.php');


    $hinoInicialES = $_POST['hinoInicialES'];
    $boasVindasES = $_POST['boasVindasES'];
    $oracaoES = $_POST['oracaoES'];
    $informativoES = $_POST['informativoES'];
    $estudoDaLicaoES = $_POST['estudoDaLicaoES'];
    $encEscolaSabatinaES = $_POST['encEscolaSabatinaES'];


    $sql = "DELETE FROM `escola-sabatina`";
    if ($conexao->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conexao->error;
    }

    $stmt = $conexao->prepare("INSERT INTO `escola-sabatina`(hinoInicialES, boasVindasES, oracaoES, informativoES, estudoDaLicaoES, encEscolaSabatinaES) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $hinoInicialES, $boasVindasES, $oracaoES, $informativoES, $estudoDaLicaoES, $encEscolaSabatinaES);
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
    <title>Escola Sabatina</title>
</head>
<body>
    <form class="corpo" action='escola-sabatina.php' method='POST'>

        <section class="corpo__container">
            
            <h1 class="corpo__container__titulo">Escola Sabatina</h1>

            <div class=corpo__container__item>
                <label class="texto" for="hinoInicialES">Hino Inicial</label>
                <input class="input" type="text" name="hinoInicialES" id="hinoInicialES" placeholder="ex: 1 - A Destra de Deus">
	        </div>
	 
            <div class=corpo__container__item>
                <label class="texto" for="boasVindasES">Boas Vindas</label>
                <input class="input" type="text" name="boasVindasES" id="boasVindasES" placeholder="ex: Pr. João">
            </div>
		    
	        <div class=corpo__container__item>
                <label class="texto" for="oracaoES">Oração</label>
                <input class="input" type="text" name="oracaoES" id="oracaoES" placeholder="ex: Fábio">
	        </div>

	        <div class=corpo__container__item>
                <label class="texto" for="informativoES">Informativo</label>
                <input class="input" type="text" name="informativoES" id="informativoES" placeholder="ex: Alessandra">
	        </div>

            <div class=corpo__container__item>
                <label class="texto" for="estudoDaLicaoES">Estudo da Lição</label>
	            <input class="input" type="text" name="estudoDaLicaoES" id="estudoDaLicaoES" placeholder="ex: Pedro">
	        </div>	

            <div class=corpo__container__item>
                <label class="texto" for="encEscolaSabatinaES">Enc Escola Sabatina</label>
                <input class="input" type="text" name="encEscolaSabatinaES" id="encEscolaSabatinaES" placeholder="ex: Patricia">
	        </div>

        </section>

        <div class="btns">
            <button class="btn" type="submit" name="submit">Enviar</button>
            <button type="button" onclick="window.location.href='menu.html'" class="btn">Voltar</button>
        </div>

    </form>
</body>
</html>