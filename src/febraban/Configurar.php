<?php

namespace febraban;

class Configurar{


	public static function Arquivo($cfg){

		$salvar_remessa_em = isset($cfg['salvar_remessa_em']) ? $cfg['salvar_remessa_em'] :' ';
		$nome_aquivo_remessa = isset($cfg['nome_aquivo_remessa']) ? $cfg['nome_aquivo_remessa'] : Date('dmY').'.REM';

	}

	public static function RegistroA($cfg){


		$cod_registro = isset($cfg['cod_registro']) ? $cfg['cod_registro'] :' ';
		$cod_remessa = isset($cfg['cod_remessa']) ? $cfg['cod_remessa'] : 0;
		$cod_convenio = isset($cfg['cod_convenio']) ? $cfg['cod_convenio'] :' ';
		$nome_empresa = isset($cfg['nome_empresa']) ? $cfg['nome_empresa'] :'';
		$cod_banco = isset($cfg['cod_banco']) ? $cfg['cod_banco'] :'';
		$nome_banco = isset($cfg['nome_banco']) ? $cfg['nome_banco'] :'';
		$data_geracao = isset($cfg['data_geracao']) ? $cfg['data_geracao'] :'';
		$numero_sequencial_arquivo = isset($cfg['numero_sequencial_arquivo']) ? $cfg['numero_sequencial_arquivo'] :'';
		$versao_layout = isset($cfg['versao_layout']) ? $cfg['versao_layout'] :'';
		$identificacao_servico = isset($cfg['identificacao_servico']) ? $cfg['identificacao_servico'] :'';
		$reservado_futuro = isset($cfg['reservado_futuro']) ? $cfg['reservado_futuro'] :'';

		$campos = array();
		$campos['cod_registro'] 	= array(1,1,'X:1',$cod_registro);
		$campos['cod_remessa'] 	= array(2,2,'9:1',$cod_remessa);
		$campos['cod_convenio'] 	= array(3,22,'X:20',$cod_convenio);
		$campos['nome_empresa'] 	= array(23,42,'X:20',$nome_empresa);
		$campos['cod_banco'] 	= array(43,45,'9:3',$cod_banco);
		$campos['nome_banco'] 	= array(46,65,'X:20',$nome_banco);
		$campos['data_geracao'] 	= array(66,73,'9:8',$data_geracao);
		$campos['numero_sequencial_arquivo'] 	= array(74,79,'9:6',$numero_sequencial_arquivo);
		$campos['versao_layout'] 	= array(80,81,'9:2',$versao_layout);
		$campos['identificacao_servico'] = array(82,98,'X:17',$identificacao_servico);
		$campos['reservado_futuro'] = array(99,150,'X:52',$reservado_futuro);

		return Configurar::FormatarCampos($campos);

	}



	public static function RegistroB($cfg){

		return;
	}


	public static function RegistroC($cfg){

		return;
	}


	public static function RegistroD($cfg){

		return;
	}


	public static function RegistroE($cfg){


		$cod_registro = isset($cfg['cod_registro']) ? $cfg['cod_registro'] :' ';
		$id_cliente_empresa = isset($cfg['id_cliente_empresa']) ? $cfg['id_cliente_empresa'] :' ';
		$agencia_debito = isset($cfg['agencia_debito']) ? $cfg['agencia_debito'] :' ';
		$id_cliente_banco = isset($cfg['id_cliente_banco']) ? $cfg['id_cliente_banco'] :' ';
		$data_vencimento = isset($cfg['data_vencimento']) ? $cfg['data_vencimento'] :' ';
		$valor_debito = isset($cfg['valor_debito']) ? $cfg['valor_debito'] :' ';
		$codigo_moeda = isset($cfg['codigo_moeda']) ? $cfg['codigo_moeda'] :' ';
		$uso_empresa = isset($cfg['uso_empresa']) ? $cfg['uso_empresa'] :' ';
		$uso_empresa2 = isset($cfg['uso_empresa2']) ? $cfg['uso_empresa2'] :' ';
		$uso_empresa3 = isset($cfg['uso_empresa3']) ? $cfg['uso_empresa3'] :' ';
		$reservado_futuro = isset($cfg['reservado_futuro']) ? $cfg['reservado_futuro'] :' ';
		$codigo_movimento = isset($cfg['codigo_movimento']) ? $cfg['codigo_movimento'] :' ';


		$campos = array();
		$campos['cod_registro'] 	= array(1,1,'X:1',$cod_registro);
		$campos['id_cliente_empresa'] 	= array(2,26,'X:25',$id_cliente_empresa);
		$campos['agencia_debito'] 	= array(27,30,'X:4',$agencia_debito);
		$campos['id_cliente_banco'] 	= array(31,44,'X:14',$id_cliente_banco);
		$campos['data_vencimento'] 	= array(45,52,'9:8',$data_vencimento);
		$campos['valor_debito'] 	= array(53,67,'9:15',$valor_debito);
		$campos['codigo_moeda'] 	= array(68,69,'X:2',$codigo_moeda);

		$campos['uso_empresa'] 	= array(70,118,'X:49',$uso_empresa);
		$campos['uso_empresa2'] 	= array(119,128,'X:10',$uso_empresa2);
		$campos['uso_empresa3'] = array(129,129,'X:1',$uso_empresa3);

		$campos['reservado_futuro'] = array(130,149,'X:20',$reservado_futuro);
		$campos['codigo_movimento'] =  array(150,150,'9:1',$codigo_movimento);

		return Configurar::FormatarCampos($campos);

	}


	public static function RegistroF($cfg){

		return;
	}


	public static function RegistroH($cfg){

		return;
	}

	public static function RegistroI($cfg){

		return;
	}

	public static function RegistroJ($cfg){

		return;
	}

	public static function RegistroL($cfg){

		return;
	}

	public static function RegistroT($cfg){

		return;
	}

	public static function RegistroX($cfg){

		return;
	}

	public static function RegistroZ($cfg){


		$cod_registro = isset($cfg['cod_registro']) ? $cfg['cod_registro'] :' ';
		$total_registros = isset($cfg['total_registros']) ? $cfg['total_registros'] :' ';
		$valor_total = isset($cfg['valor_total']) ? $cfg['valor_total'] :' ';
		$reservado_futuro = isset($cfg['reservado_futuro']) ? $cfg['reservado_futuro'] :' ';


		$campos = array();
		$campos['cod_registro'] 	= array(1,1,'X:1',$cod_registro);
		$campos['total_registros'] 	= array(2,7,'9:6',$total_registros);
		$campos['valor_total'] 	= array(8,24,'9:17',$valor_total);
		$campos['reservado_futuro'] = array(25,150,'X:126',$reservado_futuro);

		return Configurar::FormatarCampos($campos);

	}


  
	public static function FormatarCampos($campos){


		$RegistroA =''; //String do Registro A
		$permiteBrancos = array('reservado_futuro','uso_empresa','uso_empresa2','uso_empresa3'); //campos que podem ser vazios

		foreach($campos as $index=>$value){
			$strInicio = isset($value[0]) ? $value[0] : 1; 
			$strFim = isset($value[1]) ? $value[1] : 1; 			
			$strValidacao = isset($value[2]) ? $value[2] : 'X:1';
			$strV = isset($value[3]) ? $value[3] : '';
			$strValor = Configurar::clearString($strV);

			$x = explode(':',$strValidacao); //identifica tipo de validação x ou 9

			$validacao = isset($x[0]) ? $x[0] : 'X';
			$tamanho = isset($x[1]) ? $x[1] : 1;

			if(!in_array($index,$permiteBrancos)&&$strValor===NULL){

				die('O campo '.$index.' ('.$strValidacao.') não pode estar em branco! {'.$strValor.'}');

			}else{


				if($validacao=='X'){

					$contaCaracteres = strlen($strValor); //conta valor recebido 

					if($contaCaracteres!=$tamanho){
						$limitaTamanho = substr($strValor,0,$tamanho); //força string a caber no tamanho
						$completaTamanho = str_pad($limitaTamanho,$tamanho," ", STR_PAD_RIGHT); //completa com espaços caracteres faltantes 
						$strCampo = $completaTamanho; //
					}else{

						$strCampo = $strValor;

					}

					$RegistroA .= $strCampo;

				}else{


					if(ctype_digit($strValor)){

						$converToString = (string) $strValor;

						$limitaTamanho = substr($converToString,0,$tamanho); //força string a caber no tamanho
						$completaTamanho = str_pad($limitaTamanho,$tamanho, "0", STR_PAD_LEFT); //completa com espaços caracteres faltantes 
						$strCampo = $completaTamanho; //

						$RegistroA .= $strCampo;

					}else{

						echo('O campo '.$index.' ('.$strValidacao.') deve conter apenas numeros!');

					}

				}

			}

		}//fim foreach
	  
	  	return $RegistroA;

	}


/*	public static function Visualizar($RegistroA){


		return  Configurar::RegistroA($RegistroA);

	}
*/

	private static function clearString($string){


	    $limpa = preg_replace(array("/(ç)/","/(Ç)/","/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","c C a A e E i I o O u U n N"),$string);

	    return strtoupper(strtolower($limpa));
		// Para usar

	}

}

?>
