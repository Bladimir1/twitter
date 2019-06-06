<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');

mysqli_query($connect, "INSERT INTO tweet (account_img, account_name, post_text, post_image) VALUES ('images/avatar.jpg', 'MaryJane', '" . $_POST['post_text'] . "', 'images/habr.jpg')");

header('Location: http://myserver/28/index.php');
?>
