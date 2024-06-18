<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$codproduto = $_POST['codproduto'];

$Read = new Read;
$Tabela = "produtos";
$Colunas = "*";
$Where = "WHERE id_produto =:id";
$Valores = "id=". $codproduto;
$Read->SetRead($Tabela, $Colunas, $Where, $Valores);
$Row = $Read->getNumLinhas();

    if ($Row == 1) {
        foreach ($Read->getResultado() as $key) {
            echo rtrim($key['id_produto']).",".rtrim($key['descricao_produto']);
        }
    }
    else {
        echo '404';
    }
?>