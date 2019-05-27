<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagramBD');
	$lol = mysqli_query($connect, "UPDATE reg SET logo = '". $_FILES['logo']['name'] . "' WHERE id = '". $_POST['id'] . "' ");
	move_uploaded_file($_FILES['logo']['tmp_name'], $_FILES['logo']['name']);
	$query = mysqli_query($connect,"SELECT * FROM reg where id = '". $_POST['id'] . "'");
	$avatar=$query->fetch_assoc();
	header("Location: post.php?id=".$avatar['id']."&logo=".$avatar['logo']."&fio=".$avatar['fio']."");
 ?>