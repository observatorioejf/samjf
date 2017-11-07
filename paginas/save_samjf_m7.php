<?php

$id = intval($_REQUEST['id']);
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

$sql = "insert into samjf_m7 (procbaix,p71,p72,p73,p74,p75,referencia,orgao,ano) values ('$procbaix','$p71','$p72','$p73','$p74','$p75','$referencia','$orgao','$ano')";
@mysqli_query($conn, $sql);
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
	//'ano' => $ano,
	
));
?>