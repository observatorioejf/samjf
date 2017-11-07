<?php

$id = intval($_REQUEST['id']);
//$proj = $_REQUEST['proj'];
$p81 = $_REQUEST['p81'];
$p82 = $_REQUEST['p82'];
$p83 = $_REQUEST['p83'];
//$referencia = $_REQUEST['referencia'];
//$orgao = $_REQUEST['orgao'];
//$ano = $_REQUEST['ano'];

include 'conn.php';

$sql = "insert into m8_red_cond_analog_escravo (p81,p82,p83) values ('$p81','$p82','$p83')";
@mysqli_query($conn, $sql);
echo json_encode(array(
	'id' => $id,
	//'proj' => $proc,
	'p81' => $p81,
	'p82' => $p82,
	'p83' => $p83,
	//'referencia' => $referencia,
	//'orgao' => $orgao,
	//'ano' => $ano,
	
));
?>