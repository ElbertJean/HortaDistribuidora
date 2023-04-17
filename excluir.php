<?php

$id = $_GET["id"];

$arquivo = file_get_contents("./legumes.txt");
$linhas = explode("\n", $arquivo);

$novas_linhas = [];

for ($i=0; $i <count($linhas); $i++) {
    if ($i != $id) {
        $novas_linhas[] = $linhas[$i];
    } 
}

$novo_arquivo = implode("\n", $novas_linhas);

file_put_contents("./legumes.txt", $novo_arquivo);

header('Location: ./lista.php');
exit;