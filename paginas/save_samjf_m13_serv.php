<?php

$id = intval($_REQUEST['id']);
//$orgao = $_REQUEST['orgao'];
//$referencia = $_REQUEST['referencia'];
//$ano = $_REQUEST['ano'];
//$proc = $_REQUEST['proc'];
$p131 = $_REQUEST['p131'];
$p132 = $_REQUEST['p132'];


include 'conn.php';

$sql = "insert into meta13_serv (p131,p132) values ('$p131','$p132')";
@mysqli_query($conn, $sql);
echo json_encode(array(
	'id' => $id,
	//'orgao' => $orgao,
	//'referencia' => $referencia,
	//'ano' => $ano,
	//'proc' => $proc,
	'p131' => $p131,
	'p132' => $p132,
	
));
?>