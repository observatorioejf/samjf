<?php

$id = intval($_REQUEST['id']);
//$orgao = $_REQUEST['orgao'];
//$referencia = $_REQUEST['referencia'];
//$ano = $_REQUEST['ano'];
//$proc = $_REQUEST['proc'];
$p111 = $_REQUEST['p111'];
$p112 = $_REQUEST['p112'];

/*$desempenho = $_REQUEST['desempenho'];*/

include 'conn.php';

$sql = "insert into meta7 (orgao,referencia,ano,proc,p111,p112) values ('$orgao','$referencia','$ano','$proc','$p111','$p112')";
@mysqli_query($conn, $sql);
echo json_encode(array(
	'id' => $id,
	//'orgao' => $orgao,
	//'referencia' => $referencia,
	//'ano' => $ano,
	//'proc' => $proc,
	'p111' => $p111,
	'p112' => $p112,
));
?>