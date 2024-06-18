<?php 
	require '../../db/Conn.class.php';
	include '../../db/Create.class.php';
	
    $tpFornecedor = $_POST['tpFornecedor'];
    $cnpj = $_POST['cnpj'];
	$razaosocial = strtoupper($_POST['razaosocial']);
	$nomefantasia = strtoupper($_POST['nomefantasia']);
    $telFornecedor = $_POST['telFornecedor'];
	$celFornecedor = $_POST['celFornecedor'];
	$contatofornecedor = strtoupper($_POST['contatofornecedor']);
	$emailfornecedor = strtoupper($_POST['emailfornecedor']);
	$codEndereco = $_POST['codEndereco'];
	$numEndereco = $_POST['numEndereco'];
	$compEndereco = strtoupper($_POST['compEndereco']);
	$sitefornecedor = $_POST['sitefornecedor'];
	$obs_fornecedor = strtoupper($_POST['obs_fornecedor']);
	
	if (empty($codEndereco)) $codEndereco = 0;
	

	$Create = new Create;
	$Tabela = "fornecedores";
	$Dados = array(
	    "tp_fornecedor"=>$tpFornecedor,
	    "cnpj_fornecedor"=>$cnpj,
	    "razaosocial"=>$razaosocial,
	    "nome_fantasia"=>$nomefantasia,
	    "fone_fornecedor"=>$telFornecedor,
	    "cel_fornecedor"=>$celFornecedor,
	    "contato_fornecedor"=>$contatofornecedor,
	    "email_fornecedor"=>$emailfornecedor,
	    "cod_endereco"=>$codEndereco,
	    "num_endereco"=>$numEndereco,
	    "comp_endereco"=>$compEndereco,
	    "site"=>$sitefornecedor,
	    "obs_fornecedor"=>$obs_fornecedor

	);
	$Create->SetCreate($Tabela, $Dados);
	
	echo "Salvo com sucesso!!!";