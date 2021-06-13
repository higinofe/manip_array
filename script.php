<?php
require (__DIR__ . '\functions.php');
$compras = include(__DIR__.'\lista-de-compras.php');

$valor = count($compras);
$i=0;
$mes = [];
while($i < $valor){
    $i++;
    $mes[] = [retunMes($i)];
} 
$returnCompras= [];
for($i=0; $i<count($mes); $i++){
    $resultMes = $mes[$i][0];
    $returnCompras[] = [listCompras($resultMes, $compras)];
}

$dados = $returnCompras;
$handle = ['Mes', 'Categoria', 'Produto', 'Quantidade'];

$arquivo = fopen('compras-do-ano.csv', 'w');
fputcsv($arquivo, $handle);

foreach($dados as $key => $resul){
    foreach($resul as $result){
        foreach($result as $resultGlob){
            fputcsv($arquivo, $resultGlob);
        }
    }
}

foreach($dados as $result){
    foreach($result[0] as $teste){
        $testes = insertDb($teste);
    }
}













