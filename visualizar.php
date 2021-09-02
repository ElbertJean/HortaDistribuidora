<?php 
    $id = $_GET["id"];
    $arquivo = file_get_contents("legumes.txt");
    $linhas = explode("\n", $arquivo);

    $linha = $linhas[$id];

    $conteudo = explode(",", $linha);

    $nome = $conteudo[0];
    $cor = $conteudo[1];
    $quantidade = $conteudo[2];
    $peso = $conteudo [3];
?>

<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css?time<?= time() ?>">
       <link rel="stylesheet" href="css/lista.css?time<?= time() ?>">
        <title>Horta Distribuidora</title>
    </head>

    <body class="imagem-fundo">
        <div style="text-align:center; margin-top:40px; margin-bottom:40px">
            <img class="logo" src="imagens/maca-nome.png" alt="maçã">
        </div>
        <div class="container-botao">
            <p class="p-botao"><a class="botao" href="/php/formulario.php">Cadatrar novo produto</a></p>
            <p class="p-botao"><a class="botao" href="/php/lista.php">Voltar para a lista</a></p>
        </div>
    
        <header class="container">
            <h3 class="titulo-principal"><?= $nome ?></h3>
            <div class="div-row">
                <a href="/php/index.php">
                    <img class="botao-edit" src="imagens/edit.svg" alt="editar">
                </a>
                <a href="/php/excluir.php?id=<? $id ?>">
                    <img class="botao-edit" src="imagens/trash.svg" alt="excluir">
                </a>
            </div>
            <p class="paragrafo">Cor: <?= $cor ?></p>
            <p class="paragrafo">Quantidade (un): <?= $quantidade ?></p>
            <p class="paragrafo">Peso (g): <?= $peso ?> </p>
            <!-- <p class="p-linha" ><?= $linha ?></p> -->
        </header>
        <?= 
            var_dump($nome);
        ?>
        <div style="margin-top:100px;"></div>
    </body>
</html>