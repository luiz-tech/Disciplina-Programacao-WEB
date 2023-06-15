<?php

function reciboCompra($request){

	//total da compra = quantidade * preço
	$sub_total = $request['quantidade'] * $request['preco'];

	//total do imposto = total da compra * 0.05
	$totalImposto = $sub_total * 0.05;

	//se o produto foi importado, a taxa de importação = preço * 0.08
	if($request['tipo'] == 'I')
	{	
		$taxaImportacao = $request['preco'] * 0.08;	
	}
	else {
		$taxaImportacao = 0;
	}	
		
	$total = $sub_total - $totalImposto - $taxaImportacao;

	//array de dados para exibir na tabela da loja
	if($request['tipo'] == 'I'){
		$importado = 'Importado';
	} else {
		$importado = 'Nacional';
	}

	if($request['modalidade'] == 'A'){
		$modalidade = 'Atacadista';
	} else {
		$modalidade = 'Varejista';
	}

	$array = array(
		'nome' => $request['nome'],
		'codigo' => $request['codigo'],
		'preco' => $request['preco'],
		'quantidade' => $request['quantidade'],
		'modalidade' => $modalidade,
		'tipo' => $importado,
		'sub_total' => number_format($sub_total,2),
		'tx_imposto'=> number_format($totalImposto,2),
		'tx_importacao' => number_format($taxaImportacao,2),
		'total' => number_format($total,2)
	);

	return $array;

}




?>