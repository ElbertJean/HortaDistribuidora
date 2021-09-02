<?php
    $nome = $_POST["nome"];
    $cor = $_POST["cor"];
    $quantidade = $_POST["quantidade"];
    $peso = $_POST["peso"];

    $linha = $nome . ", " . $cor . ", " . $quantidade . ", " . $peso;

    function salva_linha($linha) {
        file_put_contents("legumes.txt", $linha . "\n", FILE_APPEND);
    }

    salva_linha($linha); //chama a função

?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css?time<?= time() ?>">
        <link rel="stylesheet" href="css/processa_formulario.css?time<?= time() ?>">
        <title>Horta Distribuidora</title>
    </head>

    <body class="imagem-fundo">
        <div style="text-align:center; margin-top:40px; margin-bottom:40px">
            <img class="logo" src="imagens/maca-nome.png" alt="maçã">
        </div>
        <header class="container">
                <h1 class="titulo-principal"><?= $nome ?></h1>
                <p class="paragrafo">Cor: <?= $cor ?></p>
                <p class="paragrafo">Quantidade (un): <?= $quantidade ?></p>
                <p class="paragrafo">Peso (g): <?= $peso ?> </p>
                <!-- <p class="p-linha" ><?=$linha ?></p> -->
                <p style="font-size:20px; margin-top:40px; font-weight:bold;">Salvo com Sucesso!</p>
        </header>
            <div class="container-botao">
                <p class="p-botao"><a class="botao" href="/php/formulario.php">Cadastrar outro produto</a></p>
                <p class="p-botao"><a class="botao" href="/php/lista.php">Ir para lista de produtos</a></p>
            </div>
    </body>
</html>