<?php 
	include("vendor/autoload.php"); 
?>
<html>
<head>
<title>Teste Suhdo / FEBRABRAN</title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type"/>
</head>
<body>
<h1>Teste</h1>
<?php


	$RegistroA = array(); 
	$RegistroA["cod_registro"] = "A";
	$RegistroA["cod_remessa"] = "1";
	$RegistroA["cod_convenio"] = "2972450";
	$RegistroA["nome_empresa"] = "Adufu Seção Sindical";
	$RegistroA["cod_banco"] = "001";
	$RegistroA["nome_banco"] = "BANCO DO BRASIL S/A";
	$RegistroA["data_geracao"] = Date('Ymd');
	$RegistroA["numero_sequencial_arquivo"] = 1;
	$RegistroA["versao_layout"] = "04";
	$RegistroA["identificacao_servico"] = "DÉBITO AUTOMÁTICO";
	$RegistroA["reservado_futuro"] = str_pad("TESTE",52," ", STR_PAD_LEFT);



	$RegistroE = array();
	$RegistroE['cod_registro'] = "E";
	$RegistroE['id_cliente_empresa'] = "2";
	$RegistroE['agencia_debito'] 	= "3";
	$RegistroE['id_cliente_banco'] 	= "4";
	$RegistroE['data_vencimento'] 	= "5";
	$RegistroE['valor_debito'] 	= "6";
	$RegistroE['codigo_moeda'] 	= "7";
	$RegistroE['uso_empresa'] 	= "8";
	$RegistroE['uso_empresa2'] 	= "9";
	$RegistroE['uso_empresa3'] = "10";
	$RegistroE['reservado_futuro'] = "";
	$RegistroE['codigo_movimento'] = "0";

	$RegistroZ = array();
	$RegistroZ['cod_registro'] = "Z";
	$RegistroZ['total_registros'] = "888888";
	$RegistroZ['valor_total'] 	= "99999977";
	$RegistroZ['reservado_futuro'] 	= "";


echo '<pre>';

echo $file = febraban\Configurar::RegistroA($RegistroA);
echo '<br />';
echo $file = febraban\Configurar::RegistroE($RegistroE);
echo '</pre>';
?>
</body>
</html>