<?php
//include de sessão.
include	("include/validacao.php");

$id = intval($_REQUEST['id']);
//$proc = $_REQUEST['proc'];
$nomeTabela = "samjf_m10_unic_2016";
$p101 = $_REQUEST['p101'];
$p102 = $_REQUEST['p102'];
$p103 = $_REQUEST['p103'];
$p104 = $_REQUEST['p104'];
$p105 = $_REQUEST['p105'];
//$referencia = $_REQUEST['referencia'];
//$orgao = $_REQUEST['orgao'];
//$ano = $_REQUEST['ano'];

include 'conn.php';

$sql = "update samjf_m10_unic_2016 set p101='$p101',p102='$p102',p103='$p103',p104='$p104',p105='$p105' where id=$id";
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => $id,
	//'proc' => $proc,
	'p101' => $p101,
	'p102' => $p102,
	'p103' => $p103,
	'p104' => $p104,
	'p105' => $p105,
	//'referencia' => $referencia,
	//'orgao' => $orgao,
	//'ano' => $ano,
	
));
//função do log
function salvaLog($mensagem) {

	$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
	$hora = date('Y-m-d H:i:s');
	$identidade = $_SESSION['UsuarioID'];
	$tabela = "samjf_m10_unic_2016";
		//$hora = date('Y-m-d H:i:s'); // Salva a data e hora atual (formato MySQL)
		// Usamos o mysql_escape_string() para poder inserir a mensagem no banco
		// sem ter problemas com aspas e outros caracteres
	$mensagem = mysql_escape_string($mensagem);
	// Monta a query para inserir o log no sistema
		$sql = "INSERT INTO logs VALUES (NULL, '".$hora."', '".$ip."', '".$identidade."','".$mensagem."','".$tabela."')";
	if (mysqli_query($conn,$sql)) {
		return true;
	} else {
		return false;
	}
}
$mensagem= "Alterou os valores de p101='$p101',p102='$p102',p103='$p103',p104='$p104',p105='$p105' where id=$id";
salvaLog($mensagem);
?>