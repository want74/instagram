<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Very best title of site</title>
	<meta charset="utf-8">
</head>
<body>

	<!--Content-->
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'instagramBD');
		$asd = mysqli_query($connect,'SELECT*FROM ref INNER JOIN reg ON ref.user_id =reg.id ORDER BY ref.id DESC');
		$error = $_GET['id'];
	 ?>

	 <div class="fluid">
		<div style="" class="one">
			<form action="post_insert.php" method="POST">
			 	<input type="store" name="img" placeholder="фото" class=" form-control col-3 offset-5">
			 	<input type="store" name="text" placeholder="текст" class="form-control col-3 offset-5">
			 	<?php 
				echo '<input name = "user_id" value = "'. $error . '"  style="display:none">';
				echo '<input name = "id" value = "'. $error . '" style="display:none" >';
				echo '<input name = "logo" value = "'. $error . '" style="display:none" >';
			 	echo '<input name = "fio" value = "'. $error . '" style="display:none" >';
			 	 ?>

			 	<div class="row">
			 	<button class="btn offset-5 col-3">
			 		Создать
			 	</button>
			 	</div>			
			</form> 
		</div>
	</div>
	<div class="fluid">
		<div style="" class="one">
			<form action="logo.php" method="POST" enctype="multipart/form-data">
			 	<input type="file" name="logo" placeholder="фото" class=" form-control col-3 offset-5">
			 	<?php echo '<input name = "id" value = "'. $error . '" style="display:none" >'; ?>
			 	<?php echo '<input name = "logo" value = "'. $error . '" style="display:none" >'; ?>
			 	<?php echo '<input name = "fio" value = "'. $error . '" style="display:none" >'; ?>
			 	<div class="row">
			 	<button class="btn offset-5 col-3">
			 		Установить аватарку
			 	</button>
			 	</div>			
			</form> 
		</div>
	</div>
 	<div class="col-3 offset-5">
 		<div class="row">
 			<h3>Вас зовут:	<?php echo  $_GET['fio']?></h3>
 		</div>
 		<div class="row">
 			<?php echo '<img class="w-100" style="height:100px;" src="' .$_GET['logo']  .'">';?>
 		</div>

 	</div>
	<?php 
	 	for ($i=0; $i < $asd->num_rows; $i++) { 
	 		$avatar=$asd->fetch_assoc();

	?>
	<div class="container">	
	<div class="row">	
			<div class="col-1">	
					<?php echo '<img class="w-100" style="height:50px;" src="' .$avatar['logo']  .'">';
					echo $avatar['fio'];?>

			</div>
			<div class="col-12">	
					<div class="row">	
						<div class="col">
							<h3>
								<?php
									echo $avatar['text'];
								?>
							</h3>
						</div>
					</div>
					<div class="row">	
						<div class="col">
							<?php echo '<img class="w-100" style="height:500px;" src="' .$avatar['img']  .'">';?>
						</div>
					</div>	
			</div>
	</div>	
	
	 	<?php } ?>
	
</div>
</body>
</html>