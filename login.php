<?php 
	session_start();
	include('connection.php');
	if(isset($_POST['sub'])){
		if(!empty($_POST['username']) && !empty($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT id FROM login WHERE username = '$username' AND password = '$password'";
			$query = mysqli_query($db,$sql);
			if(mysqli_num_rows($query) == 1){
				$_SESSION['id'] = mysqli_fetch_assoc($query)['id'];
				header("Location: main.php");
			}else{
				header("Location: index.php");
			}
		}else{
			header("Location: index.php");
		}
	}else{
		header("Location: 404.html");
	}


 ?>