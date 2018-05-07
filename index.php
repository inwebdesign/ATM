<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-default">
			<div class="container-fluid">	
				<a href="" class="navbar-brand">Session</a>
			<?php  
				if(!empty($_SESSION['id'])){
					include('templates/logout_nav.php');
					include('main.html');
				}
				else{
			include('templates/form.php');

				}

			 ?>
			</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
			<?php 
				if(!empty($_SESSION['id'])){
					
				}else{

					?>
				<h1 class="page-header">You must be logged in</h1>
				<?php 
				}

			 ?>
			</div>
		</div>
	</div>
</body>
</html>