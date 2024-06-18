<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$codCep = $_POST['newCep'];

$Read = new Read;
$Tabela = "endereco";
$Colunas = "*";
$Where = "WHERE cod_cep =:cod_cep";
$Valores = "cod_cep=".$codCep;
$Read->SetRead($Tabela, $Colunas, $Where, $Valores);
foreach ($Read->getResultado() as $key) {
    echo rtrim($key['id_endereco']).",".rtrim($key['logadouro']).",".rtrim($key['bairro']).",".rtrim($key['uf']).",".rtrim($key['municipio']);

}
?>