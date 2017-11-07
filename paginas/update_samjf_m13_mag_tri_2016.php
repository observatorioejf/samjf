<?php
//include de sessão.
include	("include/validacao.php");

$id = intval($_REQUEST['id']);
$nomeTabela = "samjf_m13_mag_tri_2016";
//$orgao = $_REQUEST['orgao'];
//$referencia = $_REQUEST['referencia'];
//$ano = $_REQUEST['ano'];
//$proc = $_REQUEST['proc'];
$p131 = $_REQUEST['p131'];
$p132 = $_REQUEST['p132'];
$p133 = $_REQUEST['p133'];

include 'conn.php';

$sql = "update samjf_m13_mag_tri_2016 set p131='$p131',p132='$p132',p133='$p133' where id=$id";
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => $id,
	//'orgao' => $orgao,
	//'referencia' => $referencia,
	//'ano' => $ano,
	//'proc' => $proc,
	'p131' => $p131,
	'p132' => $p132,
	'p123' => $p123,
	
));
//função do log
function salvaLog($mensagem) {

	$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
	$hora = date('Y-m-d H:i:s');
	$identidade = $_SESSION['UsuarioID'];
	$tabela = "samjf_m13_mag_tri_2016";
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
$mensagem= "Alterou os valores de p131='$p131',p132='$p132',p133='$p133' where id=$id";
salvaLog($mensagem);
?>