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
		<title>MIS</title/><link rel="stylesheet" type="text/css"  href="color.css"/>
		<link rel="stylesheet" type="text/css"  href="color.css"/>
		<style>
		  .button {
		  display: inline-block;
		  padding:  6px 10px;
		  font-size: 15px;
		  cursor: pointer;
		  text-align: center;	
		  text-decoration: none;
		  outline: none;
		  color: #fff;
		  background-color:#443266;
		  border: none;
		  border-radius: 5px;
		  box-shadow: 0 9px #999;
			}
			.button:hover {background-color: #3e8e41}

			.button:active {
			  background-color: #3e8e41;
			  box-shadow: 0 5px #666;
			  transform: translateY(4px);
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
		  background-color:#3e8e41;
		  border: none;
		  border-radius: 5px;
		  box-shadow: 0 9px #999;
		  }

		 .button1:hover {background-color:#443266}
		 .button1:active {
		  background-color: #3e8e41;
		  box-shadow: 0 5px #666;
		  transform: translateY(4px);
		 }		
	</style>		
	</head>
	<body
	 style="border: 25px solid purple; margin:50px; padding:50px;">

		<?php
			require('connect.php');		
		?>

		<form action="register2.php" method="POST">

			<h2 style="color:purple;" align="middle"><center>REGISTER NEW STUDENT FOR COURSES HERE:</center></h2>

				<div align="center">
					<input type="text" placeholder="First Name" name="firstname" required > &nbsp &nbsp&nbsp;
					<input type="text" placeholder="Surname Name" name="middle_name" required ></br></br>
					<input type="text"  placeholder="Class" name="class" required ></br></br>
					<input type="text" placeholder="Admisssion Number" name="adm_no" required ></br></br>			
					<input type="text" placeholder="House Color" name="house" required></br></br>
					<input type="text" placeholder="Term" name="term" required ></br></br>
					<input type="text" placeholder="Study Session" name="session" required ></br></br>
					<input type="text" placeholder="Mathematics" name="mathematics" required ></br></br>
					<input type="text" placeholder="English" name="english" required></br></br>
					<input type="text" placeholder="Chemistry" name="chemistry" required ></br></br>
					<input type="text" placeholder="Physics" name="physics" required ></br></br>
					</br></br/>
					<button type="submit" class="button">Register</button></form>&nbsp&nbsp&nbsp&nbsp </br>	
				</div>	 	   	 
		</form>
		</br></br>
		<form action="find.php" method="POST">  
			<div align="middle"><button type="submit" class="button1">Find Student</button></div></br>
		</form>
		<form action="logout.php" method="POST">  
			<div align="right"><button type="submit" class="button1">Log Out</button></div></br>
		</form>	
	</body>
</html>