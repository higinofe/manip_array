<?php

require (__DIR__ . '\lista-de-compras.php');
require (__DIR__ . '\conn.php');


function retunMes($i)
{
    switch($i){
        case 1:
             $i = 'janeiro';
             return $i;
             break;
        case 2:
             $i =  'fevereiro';
             return $i;
             break;
        case 3:
             $i =  'marco';
             return $i;
             break;
        case 4:
             $i = 'abril';
             return $i;
             break;
        case 5:
             $i = 'maio';
             return $i;
             break;
        case 6:
             $i = 'junho';
             return $i;
             break;
        case 7:
             $i = 'julho';
             return $i;
             break;
        case 8:
             $i = 'agosto';
             return $i;
             break;
        case 9:
             $i = 'setembro';
             return $i;
             break;
        case 10:
             $i = 'outubro';
             return $i;
             break;
        case 11:
             $i = 'novembro';
             return $i;
             break;
        case 12:
             $i = 'dezembro';
             return $i;
            break;
    }
}

function listCompras($mes, $compras){
$compras = array($compras);
$teste = $compras['0'][$mes];

$result=[];
foreach($teste as $key => $values){
    foreach($values as $keys => $valuess){
        $result[] = ['mes' => $mes, 'categoria' => $key, 'produto' => $keys, 'quantidade' => $valuess];
    }
}
return $result;
}


function insertDb($dados)
{
     $arr= [
          'mes' => $dados['mes'],
          'categoria' => $dados['categoria'],
          'produto' => $dados['produto'],
          'quantidade' => $dados['quantidade']
     ];
     $db = new Conexao();
     $sql = 'insert into compras (mes, categoria, produto, quantidade) values (:mes, :categoria, :produto, :quantidade)';
     $query = $db->conn->prepare($sql);
     $query->execute($arr);
}
