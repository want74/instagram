<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Very best title of site</title>
	<meta charset="utf-8">
	<style type="text/css">
		.marg {
			margin: 5px
		}
	</style>
</head>
<body class="bg-light">
	<div style="margin-left: 500px; margin-top: 100px">
		<div class="row" style="height: 350px">
			<div class="col-3">
				<img src="1.png" style="width: 100%;">
			</div>
			<div class="col-3 bg-white border" style="text-align: center;border-radius: 5px">
				<img src="2.png" style="width: 40%; margin-top: 10px">
				<form action="reg_insert.php" method="POST">
					<input type="reg" name="mail" placeholder="e-mail" class="form-control marg">
					<input type="reg" name="fio" placeholder="surname and name" class="form-control marg">
					<input type="reg" name="login" placeholder="login" class="form-control marg">
					<input type="reg" name="password" placeholder="password" class="form-control marg">
					<button class="btn btn-primary">
						Registration
					</button>
					<p class="font-weight-light">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. 
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>