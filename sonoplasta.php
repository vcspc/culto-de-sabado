<?php

if(isset($_POST['submit']))

{

    include_once('config.php');

    $provaiEVede = $_POST['provaiEVede'];

    $sql = "DELETE FROM sonoplasta";
    if ($conexao->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conexao->error;
    }

    $stmt = $conexao->prepare("INSERT INTO sonoplasta(provaiEVede) VALUES (?)");
    $stmt->bind_param("s", $provaiEVede);
    $stmt->execute();

    echo "New record created successfully";

    $stmt->close();
    $conexao->close();
    
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="./css/forms.css">
    <title>Sonoplasta</title>
</head>
<body>

    <form class="corpo" action="sonoplasta.php" method="POST">

        <section class="corpo__container">
            
            <h1 class="corpo__container__titulo">Sonoplastia</h1>

            <div class=corpo__container__item>
                <label class="texto" for="provaiEVede">Provai e Vede</label>
	            <input class="input" type="text" name="provaiEVede" id="provaiEVede" placeholder="ex: A Jumenta que Fala">
	        </div>

        </section>

        <div class="btns">
            <button class="btn" type="submit" name="submit">Enviar</button>
            <button type="button" onclick="window.location.href='menu.html'" class="btn">Voltar</button>
        </div>

    </form>
    
</body>
</html>
