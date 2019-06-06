<?php
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, "UPDATE tweet SET post_text= '" . $_POST['post_text'] . "' WHERE id = '". $_POST['id'] ."'");	
	header('Location: http://myserver/28/index.php');
?>	