<?php
session_start();
	//connect to databse
	
    require('connect.php');
	include_once ('function.php');
	
		$admin =  escape($conn, $_POST['admin']);
		$password =  escape($conn, $_POST['password']);
		$pass = md5($password);
			
		   //Accepting usernme and password from user
		  $result =mysqli_query($conn, "SELECT * FROM admin WHERE `username`='$admin' and `password`='$pass'")
		  or die("Could not execute the select query.");
		   
		      //verifying user password and username then redirecting to home.php
		   
			$row = mysqli_fetch_assoc($result);
			
			if(is_array($row) && !empty($row))
				
				{
					$validuser = $row['username'];
					$_SESSION['valid'] = $validuser;
				}
			else
				{
					echo "<center></h1>Access Denied</h1></center>"."<br />";
					echo "<center></h6>Please wait while you are redirected in 3 seconds</h6></center>"."<br />";
					header('Refresh: 3; url=index.php');
				}
			
			if(isset($_SESSION['valid']))
				{
					header("Location:register.php");
				}
			//	else if (!$validuser)
			
?>