<?php

if(isset($_POST['submit']))

{

    include_once('config.php');

    //print_r($_POST['adoracaoInfantil']);//

    $adoracaoInfantil = $_POST['adoracaoInfantil'];

    $result = mysqli_query($conexao, "INSERT INTO eventos(adoracaoInfantil) VALUES ('$adoracaoInfantil')");

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
    <title>Adoração Infantil</title>
</head>
<body>
    <form class="corpo" action="adoracao-infantil.php" method="POST">
        
        <section class="corpo__container">

            <h1 class="corpo__container__titulo">Adoração Infantil</h1>

            <div class=corpo__container__item>
                <label class="texto" for="adoracaoInfantil">Adoração Infantil</label>
	            <input class="input" type="text" name="adoracaoInfantil" id="adoracaoInfantil" placeholder="ex: Maria">
	        </div>	

        </section>

        <div class="btns">
            <button class="btn" type="submit" name="submit">Enviar</button>
            <button type="button" onclick="window.location.href='menu.html'" class="btn">Voltar</button>
        </div>

    </form>
    
</body>
</html>
