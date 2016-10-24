<?php
session_start();
$valid = $_SESSION['valid'];
if(!$valid || $valid == ""){
header("Location:index.php");
}
?>
  <!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css"  href="color.css"/>
	<title>Test</title>
	<h2 align="middle"><center>VIEW STUDENT FULL REPORT</center></h2><br></br>
<style>
			.button {
		  display: inline-block;
		  padding: 8px 15px;
		  font-size: 10px;
		  cursor: pointer;
		  text-align: center;	
		  text-decoration: none;
		  outline: none;
		  color: #fff;
		  background-color:green;
		  border: none;
		  border-radius: 8px;
		  box-shadow: 0 5px #999;
		}

		.button:hover {background-color: blue}

		.button:active {
		  background-color: #3e8e41;
		  box-shadow: 0 5px #666;
		  transform: translateX(4px);
		}

			.button1 {
	  display: inline-block;
	  padding: 6px 10px;
	  font-size: 15px;
	  cursor: pointer;
	  text-align: center;	
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color:purple;
	  border: none;
	  border-radius: 5px;
	  box-shadow: 0 5px #999;
	}

	.button1:hover {background-color:green}

	.button1:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateY(4px);
	}

</style>
</head>
    <body style="background-color:#E6E6FA; background-repeat: repeat; border-width: 50px; border-style: solid;border-color: purple; margin:auto;margin-top:2cm; width:60%; padding:50px; left: 120px;">
	    <?php 
			  if ($_SESSION['valid'] == 'admin'){
			 ?>
		    <form action="verify_view.php"  method="POST" >
				<ul style="list-style-type:none;">
					<li>
					 <label for "name">Student Firstname </label>
					<input type="text" name="student_name"></br></br>
					</li>
					<li>
					 <label for "name">Student Class </label>
					<input type="text" name="subject_class"></br></br>
					<div align="center" >  <button type="submit" class="button">View</button></div>
					</li>
				</ul>
		 	</form>
		 	<form action="admin.php">	<div align="right"><a href="admin.php"><button type="submit" class="button1">Log Out</button></a></div></form></br></br>
	</body>
			<?php
			}
			else{
				echo "<center></h1>Access Denied</br> You do not have access to view this page</h1></center>"."<br />";
				echo "<center></h6>Please wait while you are redirected in 3 seconds</h6></center>"."<br />";
				header('Refresh: 3; url=index.php');
				}	
     ?>
</html>
