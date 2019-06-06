<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	mysqli_query($connect, "DELETE FROM tweet WHERE id = '". $_POST['id'] ."'");
	header('Location: http://myserver/28/index.php');
?>