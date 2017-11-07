<?php

$id = intval($_REQUEST['id']);
//$proc = $_REQUEST['proc'];
$p101 = $_REQUEST['p101'];
$p102 = $_REQUEST['p102'];
$p103 = $_REQUEST['p103'];
$p104 = $_REQUEST['p104'];
$p105 = $_REQUEST['p105'];
$p106 = $_REQUEST['p106'];
$p107 = $_REQUEST['p107'];
$p108 = $_REQUEST['p108'];
$p109 = $_REQUEST['p109'];
$p1010 = $_REQUEST['p1010'];
//$referencia = $_REQUEST['referencia'];
//$orgao = $_REQUEST['orgao'];
//$ano = $_REQUEST['ano'];

include 'conn.php';

$sql = "insert into meta10 (proc,p101,p102,p103,p104,p105,p106,p107,p108,p109,p1010,referencia,orgao,ano) values ('$proc','$p101','$p102','$p103','$p104','$p105','$p106','$p107','$p108','$p109','$p1010','$referencia','$orgao','$ano')";
@mysqli_query($conn, $sql);
echo json_encode(array(
	'id' => $id,
	//'proc' => $proc,
	'p101' => $p101,
	'p102' => $p102,
	'p103' => $p103,
	'p104' => $p104,
	'p105' => $p105,
	'p106' => $p106,
	'p107' => $p107,
	'p108' => $p108,
	'p109' => $p109,
	'p1010' => $p1010,
	//'referencia' => $referencia,
	//'orgao' => $orgao,
	//'ano' => $ano,
	
));
?>