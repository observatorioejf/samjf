<?php
include 'conn.php';
$rs = mysqli_query($conn,'select * from samjf_m12_serv_tri_2016');
$result = array();
while($row = mysqli_fetch_object($rs)){
	array_push($result, $row);
}

echo json_encode($result);
?>