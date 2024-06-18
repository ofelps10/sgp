<?php 
	require '../../db/Conn.class.php';
	include '../../db/Create.class.php';
	
    $desc_produto = strtoupper($_POST['desc_produto']);
	$categoria = $_POST['categoria'];
	$subcategoria = $_POST['subcategoria'];
    $uni = $_POST['uni'];
    $marca_produto = strtoupper($_POST['marca_produto']);
	$cor_produto = strtoupper($_POST['cor_produto']);
	$tam_produto = $_POST['tam_produto'];
	$preco_produto = $_POST['preco_produto'];
	$custo_produto = $_POST['custo_produto'];

	$Create = new Create;
	$Tabela = "produtos";
	$Dados = array(
	    "descricao_produto"=>$desc_produto,
	    "categoria"=>$categoria,
	    "subcategoria"=>$subcategoria,
	    "uni_trib"=>$uni,
	    "modelo"=>$marca_produto,
	    "cor_variacao"=>$cor_produto,
	    "tamanho"=>$tam_produto,
	    "vlr_venda"=>$preco_produto,
	    "vlr_custo"=>$custo_produto
	);
	$Create->SetCreate($Tabela, $Dados);
	
	echo "Salvo com sucesso!!!";