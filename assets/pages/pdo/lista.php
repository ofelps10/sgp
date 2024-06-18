<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$coduf = 10;

$Read = new Read;
$Tabela = "uf";
$Colunas = "*";
$Where = "WHERE cod_uf =:cod_uf";
$Valores = "cod_uf=" . $coduf;
$Read->SetRead($Tabela, $Colunas, $Where, $Valores);
$Row = $Read->getNumLinhas();
if ($Row > 0) {
    foreach ($Read->getResultado() as $key) {
        echo $key['nm_uf'];
    }
}

?>