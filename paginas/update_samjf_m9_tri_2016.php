<?php
//include de sessão.
include	("include/validacao.php");

$id = intval($_REQUEST['id']);
$nomeTabela = "samjf_m9_tri_2016";

$p93 = $_REQUEST['p93'];
$p94 = $_REQUEST['p94'];
//$referencia = $_REQUEST['referencia'];
//$orgao = $_REQUEST['orgao'];
//$ano = $_REQUEST ['ano'];

include 'conn.php';

$sql = "update samjf_m9_tri_2016 set p93='$p93',p94='$p94' where id=$id";
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => $id,
	'p93' => $p93,
	'p94' => $p94,
	//'p95' => $p95,
	//'referencia' => $referencia,
	//'orgao' => $orgao,
	//'ano' => $ano,
	
));
//função do log
function salvaLog($mensagem) {

	$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
	$hora = date('Y-m-d H:i:s');
	$identidade = $_SESSION['UsuarioID'];
	$tabela = "samjf_m9_tri_2016";
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
$mensagem= "Alterou os valores de p93='$p93',p94='$p94' where id=$id";
salvaLog($mensagem);
?>