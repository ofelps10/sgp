<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$Read = new Read;
$Tabela = "fornecedores";
$Colunas = "id_fornecedor, nome_fantasia";
$Read->SetRead($Tabela, $Colunas);
echo "<option value=''>SELECIONE...</option>";
foreach ($Read->getResultado() as $key) {
    echo "<option value='" . $key['id_fornecedor'] . "'>" . $key['nome_fantasia'] . "</option>";
}
?>