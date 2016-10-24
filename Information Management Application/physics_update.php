<?php
session_start();
$valid = $_SESSION['valid'];
if(!$valid || $valid == "")
{
header("Location:index.php");
}
?>
  <!DOCTYPE html>
	<html>
	 <head>
	 <meta charset="utf-8">
	 <link rel="stylesheet" type="text/css"  href="color.css"/>
	 <title>Test</title>
    <h2 align="middle" style="color:purple;"><center><font size="5">PHYSICS UPDATE</font></center></h2></br>
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
	 <body  style="border: 25px solid purple; margin:50px; padding:50px;">
		 
		<?php
		  require('connect.php');
		  include_once ('function.php');
			if (isset($_GET['id']) && is_numeric($_GET['id']))
			 {
			 // get id value
			 $id =  escape($conn, $_GET['id']);
			 }
			if ($_SESSION['valid'] == 'physics'){
			$edit= mysqli_query($conn, "SELECT student_name, middle_name, subject_class, p_subject, p1_result, p2_result, p3_result, p1_ca, p2_ca, p3_ca, p_others, p_exams, p_total, p_grade, p_remark, p_sign FROM bado WHERE id='$id'");
			 while ($row= mysqli_fetch_array($edit)){						
		?>
			  <form action="physics_update1.php"  method="POST">
					  <input type="hidden" name="id" value="<?php echo $id;?>">
						<ul style="list-style-type:none;">
						<li>
						<label for "name">First Name </label>
						<input type="text" name="student_name" value="<?php echo  $row['student_name']?>"></br></br>
						</li>
						<li>
						<label for "name">Surname Name </label>
						<input type="text" name="middle_name" value="<?php echo  $row['middle_name']?>"></br></br>
						</li>
						<li>
						 <label for "name">Student Class </label>
						<input type="text" name="subject_class" value="<?php echo  $row['subject_class']?>"></br></br>
						</li>
				        <li>
						 <label for "name">Subject </label>
						<input type="text"  name="p_subject" value="<?php echo  $row['p_subject']?>"></br><br>
						</li>
					    <li>
						 <label for "name">1st Term Result </label>
						<input type="text"  name="p1_result" value="<?php echo  $row['p1_result']?>"></br><br>	
						</li>
					    <li> 
						<label for "name">2nd Term Result </label>
						<input type="text" name="p2_result"  value="<?php echo  $row['p2_result']?>"></br><br>	
						</li>
					    <li> 
						<label for "name">3rd Term Result </label>
						<input type="text" name="p3_result"  value="<?php echo  $row['p3_result']?>"></br><br>		
					    </li>
					    <li>
						<label for "name">1st CA </label>
						<input type="text"   name="p1_ca"  value="<?php echo  $row['p1_ca']?>"></br><br>	
						</li>
					    <li>
						<label for "name">2nd CA </label> 
						<input type="text"  name="p2_ca"  value="<?php echo  $row['p2_ca']?>"></br><br>
						</li>
						<li>
						<label for "name">3rd CA </label> 
						<input type="text"  name="p3_ca"   value="<?php echo  $row['p3_ca']?>"></br><br>	
						</li>
					    <li>
						<label for "name">OTHERS </label>  
						<input type="text" name="p_others"  value="<?php echo  $row['p_others']?>"></br><br>	
						 </li>
						<li>
						<label for "name">EXAMS </label> 
						<input type="text" name="p_exams"   value="<?php echo  $row['p_exams']?>"></br><br>
						</li>
					    <li>
						<label for "name">TOTAL </label> 
						<input type="text" name="p_total"   value="<?php echo  $row['p_total']?>"></br><br>
						</li> 
					    <li>
						<label for "name">GRADE </label>  
						<input type="text"  name="p_grade"  value="<?php echo  $row['p_grade']?>"></br><br>
						</li> 
						<li>
						<label for "name">REMARK </label> 
						<input type="text"  name="p_remark" value="<?php echo  $row['p_remark']?>"></br><br>
						</li>
						<li>
						<label for "name">SIGN </label> 
						<input type="text"  name="p_sign"   value="<?php echo  $row['p_sign']?>"></br><br>
						 </li>
						 </ul>
						 
					    <p id="update7"><button type="submit" class="button">Update</button></p>			
				
					 <?php 	
			     	  }
			       		 }
			       		 else
						{
							echo "<center></h1>Access Denied</br> You do not have access to view this page</h1></center>"."<br />";
							echo "<center></h6>Please wait while you are redirected in 3 seconds</h6></center>"."<br />";
							header('Refresh: 3; url=index.php');
						}	
						?>
				 </form>
	 	 		 <form action="logout.php"><div align="right"><a href="logout.php"><button type="submit" class="button1">Log Out</button></a></div></form></br></br>
	</body>
</html>


