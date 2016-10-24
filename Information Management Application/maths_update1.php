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
	<h2 align="middle" style="color:purple;"><center><font size="5">MATHEMATICS UPDATE</font></center></h2>
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
 <body style="border: 25px solid purple;margin:50px;padding:50px;">
	 <?php
	   require('connect.php');
	   include_once ('function.php'); 
		 $id =  escape($conn,$_POST['id']);
		 $student_name  =  escape($conn,$_POST['student_name']);
		 $middle_name   =  escape($conn,$_POST['middle_name']);
		 $subject_class =  escape($conn,$_POST['subject_class']);
		 $m_subject     =    escape($conn,$_POST['m_subject']);
		 $m1_result     =    escape($conn,$_POST['m1_result']);
		 $m2_result     =    escape($conn,$_POST['m2_result']);
		 $m3_result     =    escape($conn,$_POST['m3_result']);
		 $m1_ca         =    escape($conn,$_POST['m1_ca']);
		 $m2_ca         =    escape($conn,$_POST['m2_ca']);
		 $m3_ca         =    escape($conn,$_POST['m3_ca']);
		 $m_others      =    escape($conn,$_POST['m_others']);
		 $m_exams       =    escape($conn,$_POST['m_exams']);
	     $m_total       =    escape($conn,$_POST['m_total']);
	     $m_grade       =    escape($conn,$_POST['m_grade']);
		 $m_remark      =    escape($conn,$_POST['m_remark']);
		 $m_sign        =    escape($conn,$_POST['m_sign']);
		 
			$update= "update bado set student_name='$student_name', middle_name='$middle_name', subject_class='$subject_class', m_subject='$m_subject', m1_result='$m1_result', m2_result='$m2_result', m3_result='$m3_result', m1_ca='$m1_ca', m2_ca='$m2_ca', m3_ca='$m3_ca', m_others='$m_others', m_exams='$m_exams', m_total='$m_total', m_grade='$m_grade', m_remark='$m_remark', m_sign='$m_sign' where id='$id'";
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
