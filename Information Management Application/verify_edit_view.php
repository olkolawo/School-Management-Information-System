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
		<h2 style="color:purple;" align="middle"><center>PSYCHOMOTOR & AFFECTIVE DOMAIN REPORT EDIT:</center></h2><br>
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
 <body>
	 <?php
	 
	 require('connect.php');
	 include_once ('function.php');
	   
	 $id= escape($conn, $_POST['id']);
	 $handwriting      =  escape($conn, $_POST['handwriting']);
	 $class_attendance =  escape($conn, $_POST['class_attendance']);
	 $initiative       =  escape($conn, $_POST['initiative']);
	 $personal_neatness=  escape($conn, $_POST['personal_neatness']);
	 $creativity       =  escape($conn, $_POST['creativity']);
	 $punctuality      =  escape($conn, $_POST['punctuality']);
	 $honesty          =  escape($conn, $_POST['honesty']);
	 $neatness_in_work =  escape($conn, $_POST['neatness_in_work']);
	 $oral_fluency     =  escape($conn, $_POST['oral_fluency']);
	 $class_participation  =  escape($conn, $_POST['class_participation']);
	 $politeness           =  escape($conn, $_POST['politeness']);
	 $athletic_ability     =  escape($conn, $_POST['athletic_ability']);
     $self_control         =  escape($conn, $_POST['self_control']);
     $relationship_peers   =  escape($conn, $_POST['relationship_peers']);
	 $physical_health      =  escape($conn, $_POST['physical_health']);
	 $sense_responsibility =  escape($conn, $_POST['sense_responsibility']);
	 $relationship_teachers =  escape($conn, $_POST['relationship_teachers']);
	 
				$update= "update bado set handwriting='$handwriting', class_attendance='$class_attendance', initiative='$initiative', personal_neatness='$personal_neatness', creativity='$creativity', punctuality='$punctuality', honesty='$honesty', neatness_in_work='$neatness_in_work', oral_fluency='$oral_fluency', class_participation='$class_participation', politeness='$politeness', athletic_ability='$athletic_ability', self_control='$self_control', relationship_peers='$relationship_peers', physical_health='$physical_health', sense_responsibility='$sense_responsibility', relationship_teachers='$relationship_teachers' where id='$id'";
				if(mysqli_query($conn, $update)){
						
			    echo"</br></br>";
				echo "<font face='Courier New' ><font size='5' ><center style='color:red;'></h1>Student record has been updated successfully</h1></center></font></font>"."</br>";
				echo "<font face='Courier New' ><font size='5' ><center style='color:red;'></h1>Please click the button below to search for another student report</h1></center></font></font>"."</br></br>";
				echo "<center><a href='view.php'><button type='submit' class='button'>Search Student</button></a></center></br></br>";
				
				}else{
				echo 'Cannot update now!!!';	
				}
		 
	 ?>	
</body>
</html>
