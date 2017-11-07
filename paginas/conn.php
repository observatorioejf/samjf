<?php

$conn = @mysqli_connect("tiziu-d", "user_obs", "user_obs");
if (!$conn) {
	die('Could not connect: ' . mysqli_error($conn));
}
mysqli_select_db( $conn,'samjf');

?>