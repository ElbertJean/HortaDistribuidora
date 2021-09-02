<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css?time<?= time() ?>">
        <link rel="stylesheet" href="css/formulario.css?time<?= time() ?>">
        <title>Horta Distribuidora</title>

    </head>
<body class="imagem-fundo">
    <div style="text-align:center; margin-top:40px; margin-bottom:40px">
        <img class="logo" src="imagens/maca-nome.png" alt="maçã">
    </div>
    <header class="container">
        <h1 class="titulo-principal">Cadastro de Frutas, Verduras e Legumes</h1>
        <div class="formulario">
            <form action="/php/processa_formulario.php" method="post"> <!-- Formulário do tipo post no arquivo processa_form.php -->
                <p class="descricao">Nome</p> 
                    <p>
                        <input type="text" name="nome">
                    </p>
                <p class="descricao">Cor</p>
                    <p class="teste"> 
                        <input type="color" name="cor">
                    </p>
                <p class="descricao">Quantidade (unidade)</p>   
                    <p> 
                        <input type="number" name="quantidade">
                    </p>
                <p class="descricao"> Peso (gramas):</p>   
                    <p>
                        <input type="number" name="peso">
                    </p>
                <p class="descricao">
                    <input type="submit" value="Cadastrar">
                </p>
                <p class="paragrafo"><a class="botao" href="/php/index.php">Voltar a página inicial</a></p>

            </form>
        </div>
    </header>
    
</body>
</html>