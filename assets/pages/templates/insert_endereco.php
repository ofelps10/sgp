<?php 


	require '../../db/Conn.class.php';
	include '../../db/Create.class.php';
	
    $newCep = $_POST['newCep'];
	$newLog = strtoupper($_POST['newLog']);
    $newUf = $_POST['newUf'];
    $newMunicipio = strtoupper($_POST['newMunicipio']);
	$newBairro = strtoupper($_POST['newBairro']);

	$Create = new Create;
	$Tabela = "endereco";
	$Dados = array(
	    "cod_cep"=>$newCep,
	    "logadouro"=>$newLog,
	    "uf"=>$newUf,
	    "municipio"=>$newMunicipio,
	    "bairro"=>$newBairro
	);
	$Create->SetCreate($Tabela, $Dados);
	
	echo "Salvo com sucesso!!!";

