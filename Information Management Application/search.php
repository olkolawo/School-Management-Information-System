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
		 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		 <link rel="stylesheet" type="text/css"  href="color.css"/>
		 <title>Test</title>
		 <h2 align="middle" style="color:purple;"><center><font size="5">GRADE UPDATE</font></center></h2>
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
	 <body style="border: 25px solid purple; margin:50px; padding:50px; ">
		 
		<?php
			require('connect.php');
			include_once ('function.php');
		  
			if (isset($_GET['id']) && is_numeric($_GET['id']))
				 {
				 // get id value
				 $id =  escape($conn, $_GET['id']);
				 }
		
			   $class = escape($conn, $_POST['class']);
			   $find =  escape($conn, $_POST['find']);
				
				if ($_SESSION['valid'] == 'mathematics'){
				$edit= mysqli_query($conn, "SELECT id, subject_class, student_name, middle_name, m_subject, m1_result, m2_result, m3_result, m1_ca, m2_ca, m3_ca, m_others,m_exams, m_total, m_grade, m_remark, m_sign FROM bado WHERE subject_class='$class' and m_subject='$find'  ");
											 		
		?>
		 
	  <form action="search.php"  method="POST">
		<table width="100%" border="1" cellpadding="5" cellspacing="1">
		  
		   </br>
		   
		   <tr>
		   <th>First Name</th>
		   <th>Second Name</th>
		   <th>Subjects</th>
		   <th>Subject Class</th>
		   <th>1st Term Result</th>
		   <th>2nd Term Result</th>
		   <th>3rd Term Result</th>
		   <th>1st CA</th>
		   <th>2nd CA</th>
		   <th>3nd CA</th>
		   <th>OTHERS</th>
		   <th>EXAMS</th>
		   <th>TOTAL</th>
		   <th>GRADE</th>
		   <th>SUBJECT </br>TEACHER'S REMARK</th>
		   <th>SIGN</th>
		   <th>ACTION</th>
		   <tr>	  
		  
		  
		  <?php 
		 while ($row= mysqli_fetch_array($edit)){
		    
					 echo "<tr>";
					 echo "<td>".$row['student_name']."</td>";
					  echo "<td>".$row['middle_name']."</td>";
					 echo "<td>".$row['m_subject']."</td>";
					 echo "<td>".$row['subject_class']."</td>";
					 echo "<td>".$row['m1_result']."</td>";
					 echo "<td>".$row['m2_result']."</td>";
					 echo "<td>".$row['m3_result']."</td>";
					 echo "<td>".$row['m1_ca']."</td>";
					 echo "<td>".$row['m2_ca']."</td>";
					 echo "<td>".$row['m3_ca']."</td>";
					 echo "<td>".$row['m_others']."</td>";
					 echo "<td>".$row['m_exams']."</td>";
					 echo "<td>".$row['m_total']."</td>";
					 echo "<td>".$row['m_grade']."</td>";
					 echo "<td>".$row['m_remark']."</td>";
					 echo "<td>".$row['m_sign']."</td>";
					
		 ?>
		 
		 <td><a href="maths_update.php?id=<?php echo $row['id'];?>">Edit</a></td>	
		  <?php 
		  echo "</tr>";	
		 
		 }
		 echo "</tabe>";
			
		}
		
				if($_SESSION['valid'] == 'english'){
				$edit= mysqli_query($conn, "SELECT id, subject_class, student_name, middle_name, e_subject, e1_result, e2_result, e3_result, e1_ca, e2_ca, e3_ca, e_others, e_exams, e_total, e_grade, e_remark, e_sign FROM bado WHERE subject_class='$class' and e_subject='$find'");
											 		
		 ?>
		 
	  <form action="search.php"  method="POST">
	  
		 
		<table width="100%" border="1" cellpadding="5" cellspacing="1">
		  
		   </br>
		   
		   <tr>
		   <th>First Name</th>
		   <th>Second Name</th>
		   <th>Subjects</th>
		   <th>Subject Class</th>
		   <th>1st Term Result</th>
		   <th>2nd Term Result</th>
		   <th>3rd Term Result</th>
		   <th>1st CA</th>
		   <th>2nd CA</th>
		   <th>3nd CA</th>
		   <th>OTHERS</th>
		   <th>EXAMS</th>
		   <th>TOTAL</th>
		   <th>GRADE</th>
		   <th>SUBJECT </br>TEACHER'S REMARK</th>
		   <th>SIGN</th>
		   <th>ACTION</th>
		   <tr>	  
		  
		  
		  <?php 
		 while ($row= mysqli_fetch_array($edit)){
		    
					 echo "<tr>";
					 echo "<td>".$row['student_name']."</td>";
					  echo "<td>".$row['middle_name']."</td>";
					 echo "<td>".$row['e_subject']."</td>";
					 echo "<td>".$row['subject_class']."</td>";
					 echo "<td>".$row['e1_result']."</td>";
					 echo "<td>".$row['e2_result']."</td>";
					 echo "<td>".$row['e3_result']."</td>";
					 echo "<td>".$row['e1_ca']."</td>";
					 echo "<td>".$row['e2_ca']."</td>";
					 echo "<td>".$row['e3_ca']."</td>";
					 echo "<td>".$row['e_others']."</td>";
					 echo "<td>".$row['e_exams']."</td>";
					 echo "<td>".$row['e_total']."</td>";
					 echo "<td>".$row['e_grade']."</td>";
					 echo "<td>".$row['e_remark']."</td>";
					 echo "<td>".$row['e_sign']."</td>";
					
		 ?>
		 
		 <td><a href="english_update.php?id=<?php echo $row['id'];?>">Edit</a></td>	
		  <?php 
		  echo "</tr>";	
		 
		 }
		 echo "</tabe>";
			
		}
		
		
		
				if($_SESSION['valid'] == 'chemistry'){
				$edit= mysqli_query($conn, "SELECT id, subject_class, student_name, middle_name, c_subject, c1_result, c2_result, c3_result, c1_ca, c2_ca, c3_ca, c_others, c_exams, c_total, c_grade, c_remark, c_sign FROM bado WHERE subject_class='$class' and c_subject='$find'");
											 		
		 ?>
		 
	  <form action="search.php"  method="POST">
	  
		 
		<table width="100%" border="1" cellpadding="5" cellspacing="1">
		  
		   </br>
		   
		   <tr>
		   <th>First Name</th>
		   <th>Second Name</th>
		   <th>Subjects</th>
		   <th>Subject Class</th>
		   <th>1st Term Result</th>
		   <th>2nd Term Result</th>
		   <th>3rd Term Result</th>
		   <th>1st CA</th>
		   <th>2nd CA</th>
		   <th>3nd CA</th>
		   <th>OTHERS</th>
		   <th>EXAMS</th>
		   <th>TOTAL</th>
		   <th>GRADE</th>
		   <th>SUBJECT </br>TEACHER'S REMARK</th>
		   <th>SIGN</th>
		   <th>ACTION</th>
		   <tr>	  
		  
		  
		  <?php 
		 while ($row= mysqli_fetch_array($edit)){
		    
					 echo "<tr>";
					 echo "<td>".$row['student_name']."</td>";
					 echo "<td>".$row['middle_name']."</td>";
					 echo "<td>".$row['c_subject']."</td>";
					 echo "<td>".$row['subject_class']."</td>";
					 echo "<td>".$row['c1_result']."</td>";
					 echo "<td>".$row['c2_result']."</td>";
					 echo "<td>".$row['c3_result']."</td>";
					 echo "<td>".$row['c1_ca']."</td>";
					 echo "<td>".$row['c2_ca']."</td>";
					 echo "<td>".$row['c3_ca']."</td>";
					 echo "<td>".$row['c_others']."</td>";
					 echo "<td>".$row['c_exams']."</td>";
					 echo "<td>".$row['c_total']."</td>";
					 echo "<td>".$row['c_grade']."</td>";
					 echo "<td>".$row['c_remark']."</td>";
					 echo "<td>".$row['c_sign']."</td>";
					
		 ?>
		 
		 <td><a href="chemistry_update.php?id=<?php echo $row['id'];?>">Edit</a></td>	
		  <?php 
		  echo "</tr>";	
		 
		 }
		 echo "</tabe>";
			
		}
		
		
				if($_SESSION['valid'] == 'physics'){
				$edit= mysqli_query($conn, "SELECT id, subject_class, student_name, middle_name, p_subject, p1_result, p2_result, p3_result, p1_ca, p2_ca, p3_ca, p_others, p_exams, p_total, p_grade, p_remark, p_sign FROM bado WHERE subject_class='$class' and p_subject='$find'");
											 		
		 ?>
		 
	  <form action="search.php"  method="POST">
	  
		 
		<table width="100%" border="1" cellpadding="5" cellspacing="1">
		  
		   </br>
		   
		   <tr>
		   <th>First Name</th>
		   <th>Second Name</th>
		   <th>Subjects</th>
		   <th>Subject Class</th>
		   <th>1st Term Result</th>
		   <th>2nd Term Result</th>
		   <th>3rd Term Result</th>
		   <th>1st CA</th>
		   <th>2nd CA</th>
		   <th>3nd CA</th>
		   <th>OTHERS</th>
		   <th>EXAMS</th>
		   <th>TOTAL</th>
		   <th>GRADE</th>
		   <th>SUBJECT </br>TEACHER'S REMARK</th>
		   <th>SIGN</th>
		   <th>ACTION</th>
		   <tr>	  
		  
		  
		  <?php 
		 while ($row= mysqli_fetch_array($edit)){
		    
					 echo "<tr>";
					 echo "<td>".$row['student_name']."</td>";
					 echo "<td>".$row['middle_name']."</td>";
					 echo "<td>".$row['p_subject']."</td>";
					 echo "<td>".$row['subject_class']."</td>";
					 echo "<td>".$row['p1_result']."</td>";
					 echo "<td>".$row['p2_result']."</td>";
					 echo "<td>".$row['p3_result']."</td>";
					 echo "<td>".$row['p1_ca']."</td>";
					 echo "<td>".$row['p2_ca']."</td>";
					 echo "<td>".$row['p3_ca']."</td>";
					 echo "<td>".$row['p_others']."</td>";
					 echo "<td>".$row['p_exams']."</td>";
					 echo "<td>".$row['p_total']."</td>";
					 echo "<td>".$row['p_grade']."</td>";
					 echo "<td>".$row['p_remark']."</td>";
					 echo "<td>".$row['p_sign']."</td>";
					
		 ?>
		 
		 <td><a href="physics_update.php?id=<?php echo $row['id'];?>">Edit</a></td>	
		  <?php 
		  echo "</tr>";	
		 
		 }
		 echo "</tabe>";
			
		}
		
			
		?>
		 </form>
		</body>
		 <form action="find.php" method="POST">
			<div align="left"><input type="submit" class="button1" value="Back"></div></br></br>
			</form>
</html>


