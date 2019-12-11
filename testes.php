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


	//Cabeçalho do Arquivo
	$RegistroA = array(); 
	$RegistroA["cod_registro"] = "A";
	$RegistroA["cod_remessa"] = "1";
	$RegistroA["cod_convenio"] = "1234567";
	$RegistroA["nome_empresa"] = "Suhdo Tecnologia";
	$RegistroA["cod_banco"] = "001";
	$RegistroA["nome_banco"] = "BANCO DO BRASIL S/A";
	$RegistroA["data_geracao"] = Date('Ymd');
	$RegistroA["numero_sequencial_arquivo"] = 1;
	$RegistroA["versao_layout"] = "04";
	$RegistroA["identificacao_servico"] = "DÉBITO AUTOMÁTICO";
	$RegistroA["reservado_futuro"] = str_pad("TESTE",52," ", STR_PAD_LEFT);

 
	//Dados do pagador, valor, vencimento etc (Cada cobrança é 1 linha no registro E)
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
    
	//Registro Final, confere a somatoria dos Registros E
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
	
/**

        ESCREVENDO O ARQUIVO

        //variavel que armazena o conteudo da remessa
        $content = '';

        //cabeçalho
        $content .= febraban\Configurar::RegistroA($RegistroA).PHP_EOL;

        //1 linha pra cada debito a ser feito
        $content .= febraban\Configurar::RegistroE($RegistroE).PHP_EOL;

        //registro final
        $content .= febraban\Configurar::RegistroZ($RegistroZ).PHP_EOL;

        //cria o arquivo
        $fp = fopen("REMESSA.REM","wb"); //.REM é a extensão da remessa no BB 
        if(fwrite($fp,$content)) echo 'Arquivo criado'; else echo 'Erro ao salvar arquivo';
        fclose($fp);
	
*/	
	
?>
</body>
</html>
