<?php

	if (isset($_POST['submit'])) 
	{
		# code...
		$conn = mysqli_connect('127.0.0.1', 'root', '', 'MID_MINI_PROJECT');
		$sql= 'select * from registration where id="'.$_POST['id'].'"';
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);
		if (empty($data)) 
		{
			# code...
			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				# code...
				$sql1="INSERT INTO registration (id, name, email, password, usertype) VALUES ('".$_POST['id']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['usertype']."')";
				mysqli_query($conn,$sql1);
				echo "done";

			}
			mysqli_close($conn);
		}
	}
	else
	{
		echo "invalid";
	}
	

?>

