<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagramBD');
$query = mysqli_query($connect,"SELECT * FROM reg where mail = '".$_POST['mail']."' AND password = '".$_POST['password']."'");
$avatar=$query->fetch_assoc();
		if ($query->num_rows == '1') {
			header("Location: post.php?id=".$avatar['id']."&logo=".$avatar['logo']."&fio=".$avatar['fio']."");
		}else{
			header('Location: go.php?error=Нет%20такого%20пользователя');
		}
?>    
<meta charset="utf-8">	