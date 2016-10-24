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
		<h2 align="middle" style="color:purple;"><center><font size="5">ENGLISH UPDATE</font></center></h2>
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
     <body>
		 <?php
		 
		   require('connect.php');
		   include_once ('function.php');
		   
		   
			 $id= escape( $conn, $_POST['id']);
			 $student_name  = escape( $conn, $_POST['student_name']);
			 $middle_name   = escape( $conn, $_POST['middle_name']);
			 $subject_class = escape( $conn, $_POST['subject_class']);
			 $e_subject   = escape( $conn, $_POST['e_subject']);
			 $e1_result   = escape( $conn, $_POST['e1_result']);
			 $e2_result   = escape( $conn, $_POST['e2_result']);
			 $e3_result   = escape( $conn, $_POST['e3_result']);
			 $e1_ca       = escape( $conn, $_POST['e1_ca']);
			 $e2_ca       = escape( $conn, $_POST['e2_ca']);
			 $e3_ca       = escape( $conn,$_POST['e3_ca']);
			 $e_others    = escape( $conn,$_POST['e_others']);
			 $e_exams     = escape( $conn,$_POST['e_exams']);
		     $e_total     = escape( $conn,$_POST['e_total']);
		     $e_grade     = escape( $conn,$_POST['e_grade']);
			 $e_remark    = escape( $conn,$_POST['e_remark']);
			 $e_sign      = escape( $conn,$_POST['e_sign']);	
						
			$update= "update bado set student_name='$student_name', middle_name='$middle_name', subject_class='$subject_class', e_subject='$e_subject', e1_result='$e1_result', e2_result='$e2_result', e3_result='$e3_result', e1_ca='$e1_ca', e2_ca='$e2_ca', e3_ca='$e3_ca', e_others='$e_others', e_exams='$e_exams', e_total='$e_total', e_grade='$e_grade', e_remark='$e_remark', e_sign='$e_sign' where id='$id'";
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
