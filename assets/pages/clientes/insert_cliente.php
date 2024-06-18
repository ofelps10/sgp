<?php 
	require '../../db/Conn.class.php';
	include '../../db/Create.class.php';
	
    $tpCliente = $_POST['tpCliente'];
	$nmCliente = strtoupper($_POST['nmCliente']);
    $nascCliente = $_POST['nascCliente'];
    $genCliente = $_POST['genCliente'];
	$telCliente = $_POST['newtelCliente'];
	$celCliente = $_POST['newcelCliente'];
	$emailClient = strtoupper($_POST['emailCliente']);
	$cpfCliente = $_POST['cpfCliente'];
	$endCliente = strtoupper($_POST['endCliente']);
	$numCliente = $_POST['numCliente'];
	$compCliente = strtoupper($_POST['compCliente']);

	$Create = new Create;
	$Tabela = "clientes";
	$Dados = array(
	    "nome_cliente"=>$nmCliente,
	    "cpf_cliente"=>$cpfCliente,
	    "nasc_cliente"=>$nascCliente,
	    "sexo"=>$genCliente,
	    "cod_endereco"=>$endCliente,
	    "celular_cliente"=>$celCliente,
	    "telefone_cliente"=>$telCliente,
	    "email_cliente"=>$emailClient,
	    "tp_cliente"=>$tpCliente,
	    "num_endereco"=>$numCliente,
	    "complemento_endereco"=>$compCliente
	);
	$Create->SetCreate($Tabela, $Dados);
	
	echo "Salvo com sucesso!!!";

