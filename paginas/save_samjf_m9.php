<?php

$id = intval($_REQUEST['id']);
//$proc = $_REQUEST['proc'];
$p91 = $_REQUEST['p91'];
$p92 = $_REQUEST['p92'];
$p93 = $_REQUEST['p93'];
$p94 = $_REQUEST['p94'];
//$referencia = $_REQUEST['referencia'];
//$orgao = $_REQUEST['orgao'];
//$ano = $_REQUEST['ano'];

include 'conn.php';

$sql = "insert into meta9 (proc,p91,p92,p93,p94,referencia,orgao,ano) values ('$proc','$p91','$p92','$p93','$p94','$referencia','$orgao','$ano')";
@mysqli_query($conn, $sql);
echo json_encode(array(
	'id' => $id,
	//'proc' => $proc,
	'p91' => $p91,
	'p92' => $p92,
	'p93' => $p93,
	'p94' => $p94,
	//'referencia' => $referencia,
	//'orgao' => $orgao,
	//'ano' => $ano,
	
));
?>