<?php $con=myqli_connect('127.0.0.1', 'root', '', 'myserver'); 
	$query = myqli_connect($con, "UPDATE gameshop SET name = '" . $_POST['name'] . "', price = '" . $_POST['price'] . "', img = 'images/" . $_FILES['img']['name'] . "' WHERE id = '" . $_POST['id'] . "'");
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name'])
	#header('Location: http://4648/admin.php')
?>