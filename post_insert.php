<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagramBD');
		$lol = mysqli_query($connect, "INSERT INTO ref ( img, text, user_id ) VALUES ( '". $_POST['img'] . "','". $_POST['text'] . "',  '". $_POST['user_id'] . "')");
		$query = mysqli_query($connect,"SELECT * FROM reg where id = '". $_POST['id'] . "'");
		$avatar=$query->fetch_assoc();
		header("Location: post.php?id=".$avatar['id']."&logo=".$avatar['logo']."&fio=".$avatar['fio']."");
 ?>