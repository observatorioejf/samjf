<?php

$conn = @mysqli_connect("tiziu", "s_observatorio", "cjfobs#@!");
if (!$conn) {
	die('Could not connect: ' . mysqli_error($conn));
}
mysqli_select_db($conn, 'samjf');

?>