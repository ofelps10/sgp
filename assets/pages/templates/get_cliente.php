<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$nmcliente =  strtoupper($_POST['nmcliente']);
$Read = new Read;
$Tabela = "clientes";
$Colunas = "id_cliente, nome_cliente";
$Where = "WHERE nome_cliente like :nome_cliente ORDER BY nome_cliente ASC LIMIT 5";
$Valores = "nome_cliente=%$nmcliente%";
$Read->SetRead($Tabela, $Colunas, $Where, $Valores);
$resultados = $Read->getResultado();
if ($resultados) {
    echo json_encode($resultados);
} else {
    echo json_encode([]);
}
?>