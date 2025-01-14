<?php 

session_start();

	include("logconfig.php");
// 	include("login_php.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
	 	$Uemail = $_POST['email'];
		$password = $_POST['password'];


		if(!empty($Uemail) && !empty($password) && !is_numeric($Uemail))
		{

			//read from database
			$query = "select * from register_table where email = '$Uemail' limit 1";
			$result = mysqli_query($con, $query);


			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						// $_SESSION['Uemail'] = $user_data['Uemail'];

						if($_SESSION['email'] = $user_data['email'] && $user_data['role'] == 'customer') {
                          	 header("Location: my_account.html");
						}
						if($user_data['role'] == 'admin') {
							header("Location: /admin/index.html");
						}
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