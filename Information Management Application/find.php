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
		<title>Test</title>
		 <link rel="stylesheet" type="text/css"  href="color.css" />
			 <style>	
				 .button {
				  display: inline-block;
				  padding: 8px 15px;
				  font-size: 20px;
				  cursor: pointer;
				  text-align: center;	
				  text-decoration: none;
				  outline: none;
				  color: #fff;
				  background-color:#443266;
				  border: none;
				  border-radius: 15px;
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
	 <body style="border: 25px solid purple; margin:50px; padding:50px;">
		<form action="search.php"  method="POST">
		    <center> 
				<h2 align="middle" style="color:purple;"><center><font size="5">PLEASE ENTER YOUR SUBJECT COURSE:</font></center></h2>  </br></br>
				<input type="text"  name="find">
			    <select name="class">
					 <option value="SS3">SS 3</option>
					 <option value="SS2">SS 2</option>
					 <option value="SS1">SS 1 </option>
					 <option value="JSS3">JSS 3</option>
					 <option value="JSS2">JSS 2</option>
					 <option value="JSS1">JSS 1</option>
				</select></br></br></br>
				<button type="submit" class="button">Search</button>		
			</center>
		</form>
		<form action="register.php" method="POST">
			<div align="left"><input type="submit" class="button1" value="Back"></div></br></br>
		</form>
		<form action="logout.php"> 		
			<div align="right"><input type="submit" value="Log out" class="button1"/></a></div><br />
		</form>
	</body>
</html>