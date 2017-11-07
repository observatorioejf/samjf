<?php
//include de sessão.
include	("include/validacao.php");

$id = intval($_REQUEST['id']);
$nomeTabela = "samjf_m7_mens_2016";
//$procbaix = $_REQUEST['procbaix'];
$p71 = $_REQUEST['p71'];
$p72 = $_REQUEST['p72'];
$p73 = $_REQUEST['p73'];
$p74 = $_REQUEST['p74'];
$p75 = $_REQUEST['p75'];
//$referencia = $_REQUEST['referencia'];
//$orgao = $_REQUEST['orgao'];
//$ano = $_REQUEST['ano'];

/*$cumprimento = $_REQUEST['cumprimento'];
$desempenho = $_REQUEST['desempenho'];*/

include 'conn.php';

$sql = "update samjf_m7_mens_2016 set p71='$p71',p72='$p72',p73='$p73',p74='$p74',p75='$p75' where id=$id";
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => $id,
	//'procbaix' => $procbaix,
	'p71' => $p71,
	'p72' => $p72,
	'p73' => $p73,
	'p74' => $p74,
	'p75' => $p75,
	//'referencia' => $referencia,
	//'orgao' => $orgao,
	//'ano' => $ano

));
//função do log
function salvaLog($mensagem) {

	$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
	$hora = date('Y-m-d H:i:s');
	$identidade = $_SESSION['UsuarioID'];
	$tabela = "samjf_m7_mens_2016";
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
$mensagem= "Alterou os valores de p71='$p71',p72='$p72',p73='$p73',p74='$p74',p75='$p75' where id=$id";
salvaLog($mensagem);
?>