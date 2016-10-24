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
	 
	  <?php
		 require('connect.php');
		 include_once ('function.php');
	 
	    
			if (isset($_GET['id']) && is_numeric($_GET['id']))
			 {
			 // get id value
			 $id =  escape($conn, $_GET['id']);
			 }
	
		if ($_SESSION['valid'] == 'mathematics'){
			 $edit= mysqli_query($conn, "SELECT student_name, middle_name, subject_class, m_subject, m1_result, m2_result, m3_result, m1_ca, m2_ca, m3_ca, m_others, m_exams, m_total, m_grade, m_remark, m_sign FROM bado WHERE id='$id'");
			 while ($row= mysqli_fetch_array($edit)){
							
	 ?>
	 
  <form action="maths_update1.php"  method="POST">
	 
			 <input type="hidden" name="id" value="<?php echo $id;?>">
			 
			
			<ul style="list-style-type:none;">
			
			<li>
			 <label for "name">Student Name </label>
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
			<input type="text"  name="m_subject" value="<?php echo  $row['m_subject']?>"></br><br>
			</li>
			
		    <li>
			 <label for "name">1st Term Result </label>
			<input type="text"  name="m1_result" value="<?php echo  $row['m1_result']?>"></br><br>	
			</li>
			
		    <li> 
			<label for "name">2nd Term Result </label>
			<input type="text" name="m2_result"  value="<?php echo  $row['m2_result']?>"></br><br>	
			</li>
			
		    <li> 
			<label for "name">3rd Term Result </label>
			<input type="text" name="m3_result"  value="<?php echo  $row['m3_result']?>"></br><br>		
		    </li>
			
		    <li>
			<label for "name">1st CA </label>
			<input type="text"   name="m1_ca"  value="<?php echo  $row['m1_ca']?>"></br><br>	
			</li>
	
		    <li>
			<label for "name">2nd CA </label> 
			<input type="text"  name="m2_ca"  value="<?php echo  $row['m2_ca']?>"></br><br>
			</li>
			
			<li>
			<label for "name">3rd CA </label> 
			<input type="text"  name="m3_ca"   value="<?php echo  $row['m3_ca']?>"></br><br>	
			</li>
			
		    <li>
			<label for "name">OTHERS </label>  
			<input type="text" name="m_others"  value="<?php echo  $row['m_others']?>"></br><br>	
			 </li>
			 
			<li>
			<label for "name">EXAMS </label> 
			<input type="text" name="m_exams"   value="<?php echo  $row['m_exams']?>"></br><br>
			</li>
			
		    <li>
			<label for "name">TOTAL </label> 
			<input type="text" name="m_total"   value="<?php echo  $row['m_total']?>"></br><br>
			</li>
			 
		    <li>
			<label for "name">GRADE </label>  
			<input type="text"  name="m_grade"  value="<?php echo  $row['m_grade']?>"></br><br>
			</li>
			 
			<li>
			<label for "name">REMARK </label> 
			<input type="text"  name="m_remark" value="<?php echo  $row['m_remark']?>"></br><br>
			</li>
			
			<li>
			<label for "name">SIGN </label> 
			<input type="text"  name="m_sign"   value="<?php echo  $row['m_sign']?>"></br><br>
			 </li>
			 </ul>
			 
			  <p id="update7"><button type="submit" class="button">Update</button></p>	
			
				 <?php 	
					 }

					 }else
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


