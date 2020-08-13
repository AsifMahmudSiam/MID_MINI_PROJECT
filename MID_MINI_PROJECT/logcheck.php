<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if(empty($username) || empty($password) ){
			echo "null submission found!";
		}else{
			
			$con = mysqli_connect('localhost', 'root', '', 'MID_MINI_PROJECT');
			$sql = "select * from registration where username='{$username}' and password='{$password}'";
			
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_assoc($result);

			if(!empty($row)){
				$_SESSION['status'] = "OK";
				$_SESSION['username'] = $username;
				header('location: home.php');
			}else{
				echo"Invalid User";
			}
		}	

	}else{
		//echo "invalid request";
		header('location: login.html');
	}
