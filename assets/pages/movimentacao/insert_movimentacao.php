<?php

require '../../db/Conn.class.php';
include '../../db/Create.class.php';

$tp_movimentacao = $_POST['tp_movimentacao'];
$dtDoc_mov = $_POST['dtDoc_mov'];
$dtRec_mov = $_POST['dtRec_mov'];
$tpDoc_mov = $_POST['tpDoc_mov'];
$numDoc_mov = $_POST['numDoc_mov'];
$fornecProd_mov = $_POST['fornecProd_mov'];
$vlrDesc_mov = $_POST['vlrDesc_mov'];
$vlrFrete_mov = $_POST['vlrFrete_mov'];
$vlrtotal_mov = $_POST['vlrtotal_mov'];
$itens = $_POST['itens'];

    foreach ($itens as $item) {
        $id = $item['id'];
        $codigo = $item['codigo'];
        $descricao = $item['descricao'];
        $quantidade = $item['quantidade'];
        $valorUnitario = $item['valorUnitario'];
        $valorTotal = $item['valorTotal']; 
    }
    echo $descricao;

?>