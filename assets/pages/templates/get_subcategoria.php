<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$idcategoria = $_POST['idcategoria'];

$Read = new Read;
$Tabela = "subcategoria";
$Colunas = "*";
$Where = "WHERE id_categoria =:id_categoria";
$Valores = "id_categoria=".$idcategoria;
$Read->SetRead($Tabela, $Colunas, $Where, $Valores);
echo "<option value=''>SELECIONE...</option>";
foreach ($Read->getResultado() as $key) {
    echo "<option value='" . $key['id_subcategoria'] . "'>" . $key['nm_subcategoria'] . "</option>";
}
?>