<?php

$id = intval($_REQUEST['id']);
$nomeTabela = "samjf_m8_justica";
//$proj = $_REQUEST['proj'];
$p81 = $_REQUEST['p81'];
$p82 = $_REQUEST['p82'];
$p83 = $_REQUEST['p83'];

//$referencia = $_REQUEST['referencia'];
//$orgao = $_REQUEST['orgao'];
//$ano = $_REQUEST ['ano'];

include 'conn.php';
include 'log.php';

$sql = "update samjf_m8_justica set p81='$p81',p82='$p82',p83='$p83' where id=$id";
@mysqli_query($conn,$sql);
echo json_encode(array(
	'id' => $id,
	//'proj' => $proj,
	'p81' => $p81,
	'p82' => $p82,
	'p83' => $p83,
	//'referencia' => $referencia,
	//'orgao' => $orgao,
	//'ano' => $ano,
	
));
?>