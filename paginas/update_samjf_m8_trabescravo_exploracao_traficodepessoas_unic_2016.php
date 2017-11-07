<?php
//include de sessão.
include	("include/validacao.php");

$id = intval($_REQUEST['id']);
$tabela = "samjf_m8_trabescravo_exploracao_traficodepessoas_unic_2016";
$p81 = $_REQUEST['p81'];
$p82 = $_REQUEST['p82'];
//$p83 = $_REQUEST['p83'];

include 'conn.php';

$sql = "update samjf_m8_trabescravo_exploracao_traficodepessoas_unic_2016 set p81='$p81', p82='$p82' where id=$id";
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => $id,
	'p81' => $p81,
	'p82' => $p82,
	//'p83' => $p83,
	
));
//função do log
function salvaLog($mensagem) {

	$ip = $_SERVER['REMOTE_ADDR']; // Salva o IP do visitante
	$hora = date('Y-m-d H:i:s');
	$identidade = $_SESSION['UsuarioID'];
	$tabela = "samjf_m8_trabescravo_exploracao_traficodepessoas_unic_2016";
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
$mensagem= "Alterou os valores de p81='$p81', p82='$p82' where id=$id";
salvaLog($mensagem);
?>