<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagramBD');	$lol = mysqli_query($connect, "INSERT INTO reg ( fio, login, mail, password ) VALUES ('". $_POST['fio'] . "','". $_POST['login'] . "','". $_POST['mail'] . "','". $_POST['password'] . "')");
	header("Location: go.php")
 ?>