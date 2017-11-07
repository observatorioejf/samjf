<?php

$id = intval($_REQUEST['id']);
//$orgao = $_REQUEST['orgao'];
//$referencia = $_REQUEST['referencia'];
//$ano = $_REQUEST['ano'];
//$proc = $_REQUEST['proc'];
$p121 = $_REQUEST['p121'];
$p122 = $_REQUEST['p122'];
$p123 = $_REQUEST['p123'];

include 'conn.php';

$sql = "insert into meta12_mag (orgao,referencia,ano,proc,p121,p122,p123) values ('$orgao','$referencia','$ano','$proc','$p121','$p122','$p123')";
@mysqli_query($conn, $sql);
echo json_encode(array(
	'id' => $id,
	//'orgao' => $orgao,
	//'referencia' => $referencia,
	//'ano' => $ano,
	//'proc' => $proc,
	'p121' => $p121,
	'p122' => $p122,
	'p123' => $p123,
	
));
?>