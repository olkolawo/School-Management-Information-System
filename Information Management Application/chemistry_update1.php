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
	<h2 align="middle" style="color:purple;"><center><font size="5">CHEMISTRY UPDATE</font></center></h2><br>
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
	</style>
	</head>
     <body style="border: 25px solid purple; margin:50px; padding:50px; ">
	 <?php
	   require('connect.php');
	   include_once ('function.php');
	   
		 $id= escape( $conn, $_POST['id']);
		 $student_name  = escape( $conn, $_POST['student_name']);
		 $middle_name   = escape( $conn, $_POST['middle_name']);
		 $subject_class = escape( $conn, $_POST['subject_class']);
		 $c_subject     = escape( $conn, $_POST['c_subject']);
		 $c1_result     = escape( $conn, $_POST['c1_result']);
		 $c2_result     = escape( $conn, $_POST['c2_result']);
		 $c3_result     = escape( $conn, $_POST['c3_result']);
		 $c1_ca         = escape( $conn, $_POST['c1_ca']);
		 $c2_ca         = escape( $conn, $_POST['c2_ca']);
		 $c3_ca         = escape( $conn, $_POST['c3_ca']);
		 $c_others      = escape( $conn, $_POST['c_others']);
		 $c_exams       = escape( $conn, $_POST['c_exams']);
	     $c_total       = escape( $conn, $_POST['c_total']);
	     $c_grade       = escape( $conn, $_POST['c_grade']);
		 $c_remark      = escape( $conn, $_POST['c_remark']);
		 $c_sign        = escape( $conn, $_POST['c_sign']);
	 
	 		$update= "update bado set student_name='$student_name', middle_name='$middle_name', subject_class='$subject_class', c_subject='$c_subject', c1_result='$c1_result', c2_result='$c2_result', c3_result='$c3_result', c1_ca='$c1_ca', c2_ca='$c2_ca', c3_ca='$c3_ca', c_others='$c_others', c_exams='$c_exams', c_total='$c_total', c_grade='$c_grade', c_remark='$c_remark', c_sign='$c_sign' where id='$id'";
				if(mysqli_query($conn, $update)){
					
				echo"</br></br>";
				echo "<font face='Courier New' ><font size='5' ><center style='color:red;'></h1>Student record has been updated successfully</h1></center></font></font>"."</br>";
				echo "<font face='Courier New' ><font size='5' ><center style='color:red;'></h1>Please click the button below to search for another student</h1></center></font></font>"."</br></br>";
				echo "<center><a href='find.php'><button type='submit' class='button'>Search Student</button></a></center></br></br>";
				}else{
				echo 'Cannot update now!!!';	
				} 
	 ?>
</body>
</html>
