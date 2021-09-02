<?php 
    $arquivo = file_get_contents("legumes.txt");
    $linhas = explode("\n", $arquivo);
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
            <p class="p-botao"><a class="botao" href="/php/index.php">Página inicial</a></p>
        </div>
        
        <?php for ($i=0; $i < count($linhas) -1; $i++) { 
               $linha = $linhas[$i];

               $conteudo = explode(",", $linha);

               $nome = $conteudo[0];
               $cor = $conteudo[1];
               $quantidade = $conteudo[2];
               $peso = $conteudo [3];
        ?>
            <header class="container">
                    <h3 class="titulo-principal"><?= $nome ?></h3>
                    <div class="div-row">
                        <a href="/php/visualizar.php?id=<?= $i ?>">
                            <img class="botao-edit" src="imagens/look.svg" alt="visualizar">
                        </a>
                        <a href="/php/index.php">
                            <img class="botao-edit" src="imagens/edit.svg" alt="editar">
                        </a>
                        <a href="/php/excluir.php?id=<?= $i ?>">
                            <img class="botao-edit" src="imagens/trash.svg" alt="excluir">
                        </a>
                    </div>
                    <p class="paragrafo">Cor: <?= $cor ?></p>
                    <p class="paragrafo">Quantidade (un): <?= $quantidade ?></p>
                    <p class="paragrafo">Peso (g): <?= $peso ?> </p>
                    <!-- <p class="p-linha" ><?=$linha ?></p> -->
            </header>
        <?php } ?>
        <div style="margin-top:100px;"></div>
    </body>
</html>