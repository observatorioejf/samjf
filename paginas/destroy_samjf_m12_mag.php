<?php
$id = intval($_REQUEST['id']);

include 'conn.php';

$sql = "delete from meta12_mag where id=$id";
@mysqli_query($conn,$sql);
echo json_encode(array('success'=>true));
?>