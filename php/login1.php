<?php 

session_start();

	include("logconfig.php");
	include("login_php.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Uemail = $_POST['Uemail'];
		$password = $_POST['password'];

		if(!empty($Uemail) && !empty($password) && !is_numeric($Uemail))
		{

			//read from database
			$query = "select * from users where Uemail = '$Uemail' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['Uemail'] = $user_data['Uemail'];
						header("Location:../my account.html");
						die;
					}
				}
			}
			echo "<script>alert('wrong username or password!')</script>";
			
		}else
		{
			echo "<script>alert('wrong username or password!')</script>";
		}
	}
?>