<?php

require_once 'classes/calculadora.php';

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

$calculadora = new Calculadora();

//setar os valores retornados do form para a calculadora
$calculadora->setNumero1($numero1);
$calculadora->setNumero2($numero2);

switch ($operacao) {
	case 'somar':
		$calculadora->somar();
		break;
	case 'subtrair':
		$calculadora->subtrair();
		break;
	case 'multiplicar':
		$calculadora->multiplicar();
		break;
	case 'dividir':
		$calculadora->dividir();
		break;
	
	default:
		echo 'Operação inválida';
		break;
}

//exibir na tela o total recuperado da Superclasse Calculadora
echo $calculadora->getTotal();


?>