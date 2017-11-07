<?php
//include de sessão.
include	("include/validacao.php");

$id = intval($_REQUEST['id']);
//$proc = $_REQUEST['proc'];
$nomeTabela = "samjf_m10_tri_2016";
$p106 = $_REQUEST['p106'];
$p107 = $_REQUEST['p107'];
$p108 = $_REQUEST['p108'];
$p109 = $_REQUEST['p109'];
$p1010 = $_REQUEST['p1010'];
//$referencia = $_REQUEST['referencia'];
//$orgao = $_REQUEST['orgao'];
//$ano = $_REQUEST['ano'];

include 'conn.php';

$sql = "update samjf_m10_tri_2016 set p106='$p106',p107='$p107',p108='$p108',p109='$p109',p1010='$p1010' where id=$id";
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => $id,
	//'proc' => $proc,
	'p106' => $p106,
	'p107' => $p107,
	'p108' => $p108,
	'p109' => $p109,
	'p1010' => $p1010,
	//'referencia' => $referencia,
	//'orgao' => $orgao,
	//'ano' => $ano,
	
));
//função do log
function salvaLog($mensagem) {

	$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
	$hora = date('Y-m-d H:i:s');
	$identidade = $_SESSION['UsuarioID'];
	$tabela = "samjf_m10_tri_2016";
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
$mensagem= "Alterou os valores de p106='$p106',p107='$p107',p108='$p108',p109='$p109',p1010='$p1010' where id=$id";
salvaLog($mensagem);
?>