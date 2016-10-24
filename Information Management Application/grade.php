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
 <link rel="stylesheet" type="text/css"  href="color.css"/>
  <title>Test</title>
  <style>
  	form label{
  	display: inline-block;
  	width: 90px;
  	font-weight: bold;
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
  <body></br> 
  <h2 style="color:purple" align="middle">Grade Maintenance</h2></br></br>
         <a href="find.php" ><h4 style="color:red;" align="middle">FIND STUDENT OF YOUR SUBJECT COURSE</h4></a>
  	     <div align="right"><a href="logout.php"><button type="submit" class="button1">Log Out</button></a></div>		
        </br></br>
  </body>
</html>


	 

