<?php
$con = mysqli_connect('localhost', 'root', 'king1234', 'fyp');
if (!$con) {
	echo "connection with database failed";
} else {
	echo "success";
}

?>