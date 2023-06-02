<?php

include_once('config.php');

$sqlLouvores = "SELECT * FROM louvores";
$sqlEscolaSabatina = "SELECT * FROM `escola-sabatina`";
$sqlMensagemMusical = "SELECT * FROM `mensagem-musical`";
$sqlCultoDivino = "SELECT * FROM `culto-divino`";
$sqlAdoracaoInfantil = "SELECT * FROM `adoracao-infantil`";
$sqlSonoplastia = "SELECT * FROM sonoplasta";

$resultadoLouvores = mysqli_query($conexao, $sqlLouvores);
$resultadoEscolaSabatina = mysqli_query($conexao, $sqlEscolaSabatina);
$resultadoMensagemMusical = mysqli_query($conexao, $sqlMensagemMusical);
$resultadoCultoDivino = mysqli_query($conexao, $sqlCultoDivino);
$resultadoAdoracaoInfantil = mysqli_query($conexao, $sqlAdoracaoInfantil);
$resultadoSonoplastia = mysqli_query($conexao, $sqlSonoplastia);



if (mysqli_num_rows($resultadoLouvores) > 0) {
    while ($row = mysqli_fetch_assoc($resultadoLouvores)) {
        $louvor1ES = $row['louvor1ES'];
        $louvor2ES = $row['louvor2ES'];
        $louvor1CD = $row['louvor1CD'];
        $louvor2CD = $row['louvor2CD'];
    }
} else {
    echo "0 results";
}

if (mysqli_num_rows($resultadoEscolaSabatina) > 0) {
    while ($row = mysqli_fetch_assoc($resultadoEscolaSabatina)) {
        $hinoInicialES = $row['hinoInicialES'];
        $boasVindasES = $row['boasVindasES'];
        $oracaoES = $row['oracaoES'];
        $informativoES = $row['informativoES'];
        $estudoDaLicaoES = $row['estudoDaLicaoES'];
        $encEscolaSabatinaES = $row['encEscolaSabatinaES'];
    }
} else {
    echo "0 results";
}

if (mysqli_num_rows($resultadoMensagemMusical) > 0) {
    while ($row = mysqli_fetch_assoc($resultadoMensagemMusical)) {
        $mensagemMusicalES = $row['mensagemMusicalES'];
        $mensagemMusicalCD = $row['mensagemMusicalCD'];
    }
} else {
    echo "0 results";
}

if (mysqli_num_rows($resultadoCultoDivino) > 0) {
    while ($row = mysqli_fetch_assoc($resultadoCultoDivino)) {
        $oracaoDeInvocacao = $row['oracaoDeInvocacao'];
        $hinoInicialCD = $row['hinoInicialCD'];
        $oracaoIntercessora = $row['oracaoIntercessora'];
        $sermao = $row['sermao'];
    }
} else {
    echo "0 results";
}

if (mysqli_num_rows($resultadoAdoracaoInfantil) > 0) {
    while ($row = mysqli_fetch_assoc($resultadoAdoracaoInfantil)) {
        $adoracaoInfantil = $row['adoracaoInfantil'];
    }
} else {
    echo "0 results";
}

if (mysqli_num_rows($resultadoSonoplastia) > 0) {
    while ($row = mysqli_fetch_assoc($resultadoSonoplastia)) {
        $sonoplastia = $row['provaiEVede'];
    }
} else {
    echo "0 results";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Jaldi&family=Ysabeau:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/template-cronograma.css">
    <title>Culto de Sábado - Cronograma</title>
</head>
<body>
    <header id="cabecalho">
        <h1>Cronograma do Culto</h1>
    </header>
    <main class="tabela">
        <div id="h0845" class="enfase">08:45</div>
        <div id="louvoresES" class="enfase">Louvores</div>
        <div id="louvor1ESCampo"><?php echo $louvor1ES; ?></div>
        <div id="louvor2ESCampo"><?php echo $louvor2ES; ?></div>
        <div id="h0900" class="enfase">09:00</div>
        <div id="hinoInicialES" class="enfase">Hino Inicial</div>
        <div id="hinoInicialESCampo"><?php echo $hinoInicialES; ?></div>
        <div id="boasVindasES" class="enfase">Boas Vindas</div>
        <div id="boasVindasESCampo"><?php echo $boasVindasES; ?></div>
        <div id="oracaoES" class="enfase">Oração</div>
        <div id="oracaoESCampo"><?php echo $oracaoES; ?></div>
        <div id="informativoES" class="enfase">Informativo</div>
        <div id="informativoESCampo"><?php echo $informativoES; ?></div>
        <div id="estudoDaLicaoES" class="enfase">Estudo da Lição</div>
        <div id="estudoDaLicaoESCampo"><?php echo $estudoDaLicaoES; ?></div>
        <div id="h1000" class="enfase">10:00</div>
        <div id="encES" class="enfase">Encerramento da Esc Sabatina</div>
        <div id="encESCampo"><?php echo $encEscolaSabatinaES; ?></div>
        <div id="mensagemMusicalES" class="enfase">Menssagem Musical</div>
        <div id="mensagemMusicalESCampo"><?php echo $mensagemMusicalES; ?></div>
        <div id="anuncios" class="enfase">Anuncios</div>
        <div id="anunciosCampo">Victor</div>
        <div id="h1015" class="enfase">10:15</div>
        <div id="louvoresCD" class="enfase">Louvores</div>
        <div id="louvor1CDCampo"><?php echo $louvor1CD; ?></div>
        <div id="louvor2CDCampo"><?php echo $louvor2CD; ?></div>
        <div id="entradaDaPlataforma" class="enfase">Entrada da Plataforma</div>
        <div id="entradaDaPlataformaCampo">Sinto a Presença do Senhor</div>
        <div id="oracaoDeInvocacao" class="enfase">Oração de Invocação</div>
        <div id="oracaoDeInvocacaoCampo"><?php echo $oracaoDeInvocacao; ?></div>
        <div id="hinoInicial" class="enfase">Hino Inicial</div>
        <div id="hinoInicialCampo"><?php echo $hinoInicialCD; ?></div>
        <div id="oracaoIntercessora" class="enfase">Oração Intercessora</div>
        <div id="oracaoIntercessoraCampo"><?php echo $oracaoIntercessora; ?></div>
        <div id="adoracaoInfantil" class="enfase">Adoração Infantil</div>
        <div id="adoracaoInfantilCampo"><?php echo $adoracaoInfantil; ?></div>
        <div id="provaiEVede" class="enfase">Provai e Vede</div>
        <div id="provaiEVedeCampo"><?php echo $sonoplastia; ?></div>
        <div id="dizimoEOfertas" class="enfase">Dízimo e Ofertas</div>
        <div id="dizimoEOfertasCampo">Maria e João</div>
        <div id="mensagemMusical" class="enfase">Menssagem Musical</div>
        <div id="mensagemMusicalCampo"><?php echo $mensagemMusicalCD; ?></div>
        <div id="sermao" class="enfase">Sermão</div>
        <div id="sermaoCampo"><?php echo $sermao; ?></div>
        <div id="h1145" class="enfase">11:45</div>
        <div id="encerramentoCD" class="enfase">Encerramento</div>
    </main>  
    <div class="btns">
        <button class="btn" onclick="window.print()" type="button">Baixar</button>
        <button type="button" onclick="window.location.href='menu.html'" class="btn">Voltar</button>
    </div>
</body>
</html>