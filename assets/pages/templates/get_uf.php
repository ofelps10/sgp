<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$Read = new Read;
$Tabela = "uf";
$Colunas = "*";
$Read->SetRead($Tabela, $Colunas);
echo "<option value=''>SELECIONE...</option>";
foreach ($Read->getResultado() as $key) {
    echo "<option value='" . $key['nm_uf'] . "'>" . $key['nm_uf'] . "</option>";
}
?>