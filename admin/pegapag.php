<?php 
$title='Area Administrativa';
if(isset($_GET['link'])){
	$link = $_GET["link"];
	$title='';

	switch ($link) {
	case '1':
		$title= "Cadastro de Usuário";
		break;
	case '2':
		$title= "Cadastro de Secretaria";
		break;
	case '3':
		$title= "Cadastro Notas Fiscais";
		break;
		case '4':
		$title= "Cadastro de Credores";
		break;
		case '5':
		$title= "Cadastro de Contratos";
		break;
		case '6':
		$title= "Cadastro de Fiscais";
		break;
		// case '7':
		// $title= "Cadastro de Usuário";
		// break;
		case '8':
		$title= "Cadastro de Relatórios";
		break;
		case '9':
		$title= "Cadastro de Notas";
		break;
		case '10':
		$title= "Lista Geral - Contratos";
		break;
		case '11':
		$title= "Ver Credores";
		break;
		case '12':
		$title= "Listagem de  Credores";
		break;
		case '13':
		$title= "Lista Relatorio";
		break;
		case '14':
		$title= "Relatorio Final";
		break;
		case '15':
		$title= "Impressao";
		break;
		case '27':
		$title= "Relatório Contrato -Por Numero do Contrato  ";
		break;
		case '29':
		$title= "Relatório Contrato - Por Data ";
		break;
	
	default:
		$title= "Área Administrativa";
		break;
}
}





 ?>