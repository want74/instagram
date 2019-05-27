<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagramBD');
	$lol = mysqli_query($connect,"SELECT * FROM reg where mail = '". $_POST['mail'] . "' AND password = '". $_POST['password'] . "'");
	$avatar=$lol->fetch_assoc();
	echo $avatar['fio'];
	header('index.php')
 ?>