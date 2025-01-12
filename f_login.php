<?php
include_once 'logconfig.php';
?>

<?php
error_reporting(0);

  $Uemail = $_POST["Uemail"];
  $password = $_POST["password"];
  
  if(isset($_POST['forsubmit'])) {
	  
    $sql="UPDATE users SET password='$password' where Uemail='$Uemail'";
    $query = "SELECT Uemail from users where Uemail = '$Uemail' limit 1";

    $result = mysqli_query($con, $query);
    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
           if (mysqli_query($con, $sql))
           {
    ?>
			   <script type="text/javascript">
               alert("Password changed successful");
               window.location.href = "login1.php";
               </script>
			   
<?php
            }
        }
        else{
            echo "<script>alert('Error: Check your email again')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
   <title>Forgot password</title> 
   <link rel = "stylesheet" href = "css/f_login_css.css">

</head>
<body>
<center>
<div class="container"> 
            <br/>
                <h1 class="label">Reset your password </h1>
            
            <form class="Admin-login" method="post">
                <div class="font">Enter your Email :</div>
                <input type="text" placeholder="email" name="Uemail" required/>
                <div class="font2" >Enter New Password :</div>
                <input type="password" placeholder="New Password" name="password" required/><br/><br/>
                <button type="submit" value="Login" name="forsubmit">Login</button>
			</form>
        </div>
</center>


</body>

</html>
