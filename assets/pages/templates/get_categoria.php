<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$Read = new Read;
$Tabela = "categoria";
$Colunas = "*";
$Read->SetRead($Tabela, $Colunas);
echo "<option value=''>SELECIONE...</option>";
foreach ($Read->getResultado() as $key) {
    echo "<option value='" . $key['id_categoria'] . "'>" . $key['nm_categoria'] . "</option>";
}
?>