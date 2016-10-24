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
	<script type="text/javascript" src="jspdf.min.js"></script>
	<script type="text/javascript" src="html2canvas.js"></script>
	<script type="text/javascript">
		function genPDF(){
			
			html2canvas(document.body,{
				onrendered: function (canvas){
					var img = canvas.toDataURL("image/png");
					var doc = new jsPDF();
					doc.addImage(img,'JPEG' ,-50,-50);
					doc.save('Result.pdf');
				}
			});
			
		}
	
	</script>
	<title>Test</title>
	<font size="4"><font face="Courier New" >
	<h2 align="middle" style="color:purple;"><strong><font size="8"><center>UNCLE BADO MEMORIAL COLLEGE</center></font></strong></h2>
	<center>29, New Dawaki Road, Unguwar Sarki (GRA)  P.O. Box 1998, Kaduna TEL: 07036072445 </br> E-Mail badoschools@yahoo.co.nz
	</br><strong>SENIOR SECONDARY SCHOOL</br> EXAMINATION REPORT</strong><a href="javascript:genPDF ();" style="text-decoration: none;" > &nbsp;&nbsp;&nbsp;  Download</a></center>
	</font>
	</font>
	</head>
     <body style="
	 
		border:20px solid purple;
		border-width: 40px 40px 40px 40px;
		padding:50px;
		margin:50px;
		
	 ">
	 
	 <?php
	 
	 
	 require('connect.php');
	 include_once 'jsPDF';
	 include_once ('function.php');
	 
	 if (isset($_GET['id']) && is_numeric($_GET['id']))
			 {
			 // get id value
			 $id = escape( $conn, $_GET['id']);
			 }
	 
			 $student_name  = escape( $conn, $_POST['student_name']);
			 $subject_class=  escape( $conn, $_POST['subject_class']);
	 
			$edit= mysqli_query($conn, "SELECT * FROM bado WHERE student_name='$student_name' and subject_class='$subject_class' and id=id");
										 		
	 ?>
	 
  <form action="verify_view.php"  method="POST">
  
	 
	<table width="100%" border="1" cellpadding="5" cellspacing="1">
	  
	   </br>
	   <font face="Courier New" >
	   <tr>
	   <th><font face='Courier New' >SUBJECTS</font></th>
	   <th><font face='Courier New' >1st TERM RESULT</font></th>
	   <th><font face='Courier New' >2nd TERM RESULT</font></th>
	   <th><font face='Courier New' >3rd TERM RESULT</font></th>
	   <th><font face='Courier New' >1st CA</font></th>
	   <th><font face='Courier New' >2nd CA</font></th>
	   <th><font face='Courier New' >3nd CA</font></th>
	   <th><font face='Courier New' >OTHERS</font></th>
	   <th><font face='Courier New' >EXAMS</font></th>
	   <th><font face='Courier New' >TOTAL</font></th>
	   <th><font face='Courier New' >GRADE</font></th>
	   <th><font face='Courier New' >SUBJECT </br>TEACHER'S REMARK</font></th>
	   <th><font face='Courier New' >SIGN</font></th>
	   <tr>	  
	  </font>
	  
	  <?php 
	 while ($row= mysqli_fetch_array($edit)){
		 
		  echo "<font face='Courier New' >";
		  
				  echo "<p id='session'><center><strong><font size='4';>".$row['session']."</font></stong></center></p>";
				  echo "<p id='term'><center style='color:purple;'><font size='5';><strong><u>".$row['term']."</u></stong></font></center></p>";
				  
	    
				 echo "<h4 style='color:black;'>Name:&nbsp&nbsp; <u>".$row['student_name']."&nbsp&nbsp;&nbsp&nbsp&nbsp".$row['middle_name']."</u> 
				
				<div align='right'> || Admission Number:  &nbsp&nbsp; <u>".$row['adm_no']."</u></div>  Class:&nbsp&nbsp; <u>" .$row['subject_class']."</u>
			
				<div align='right'> || No. Of Attendance: &nbsp&nbsp; <u>".$row['no_attendance']."</u></div>House:&nbsp&nbsp;<u>".$row['house']."</u>
				
			    <div align='right'> || No. Of Times School Opened: &nbsp&nbsp; <u>".$row['no_opened']."</u></div></h4></br></br>";
				 

				 
				  
				
  
				 echo "<tr>";
				 echo "<td><font face='Courier New' >".$row['m_subject']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m1_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m2_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m3_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m1_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m2_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m3_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m_others']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m_exams']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m_total']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m_grade']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m_remark']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['m_sign']."</font></td>";
				
	 ?> 
	  <?php 
	  echo "</tr>";	
	
	  echo "<tr>";
				
				 echo "<td><font face='Courier New' >".$row['e_subject']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e1_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e2_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e3_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e1_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e2_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e3_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e_others']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e_exams']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e_total']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e_grade']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e_remark']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['e_sign']."</font></td>";
	echo"</tr>";
	
	echo"<tr>";
					
				 
				 echo "<td><font face='Courier New' >".$row['c_subject']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c1_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c2_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c3_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c1_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c2_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c3_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c_others']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c_exams']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c_total']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c_grade']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c_remark']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['c_sign']."</font></td>";
	 echo "</tr>";
	 
	 echo "<tr>";
				 
				 echo "<td><font face='Courier New' >".$row['p_subject']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p1_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p2_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p3_result']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p1_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p2_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p3_ca']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p_others']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p_exams']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p_total']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p_grade']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p_remark']."</font></td>";
				 echo "<td><font face='Courier New' >".$row['p_sign']."</font></td>";
				
               
	echo "</tr>";
	
	
	  echo "<tabe>";
	  echo "<tr>";
	  echo "<td><font face='Courier New'><strong><center>GRAND TOTAL:<center></strong></font></td>";
	  
	         echo "<td></td>";
	         echo "<td></td>";
		     echo "<td></td>";
		     echo "<td></td>";
		     echo "<td></td>";
		     echo "<td></td>";
			 echo "<td></td>";
			 echo "<td></td>";
			 echo "<td></td>"; 
			 echo "</tr>";
			 echo "</tabe>";
			 echo "</tabe>";
		     echo "</font>";
			echo  "<table>";
			echo "<font face='Courier New' >";
			echo "<tr>";
			echo "</br></br>";
			echo "<div align='center' valign='middle'>POSITION IN CLASS:________ &nbsp OUT OF:________&nbsp POSITION PER TERM:_______&nbsp OUT OF:________ </div>";
			echo"</tr>";
			echo"<td></br></br></br></td>";
			echo "</table>";
			echo "<font size='5%'><p style='color:purple;'>PSYCHOMOTOR & AFFECTIVE DOMAIN REPORT</p></font>";
		
			echo "<table style='width:100%' border='1'>";
		 
			    echo "<tr>";
			    echo "<td>Handwriting</td>";
				echo"<td>".$row['handwriting']."</td>";
				echo"<td>Class Attendance</td>";
				echo"<td>".$row['class_attendance']."</td>";
				echo"<td>Initiative</td>";
				echo"<td>".$row['initiative']."</td>";
				echo"<td>Personal Neatness</td>";
				echo"<td>".$row['personal_neatness']."</td>";
				
				
			    echo"</tr>";
			    echo"<tr>";
				echo"<td>Creativity</td>";
				echo"<td>".$row['creativity']."</td>";
				echo"<td>Punctuality</td>";
				echo"<td>".$row['punctuality']."</td>";
				echo"<td>Honesty</td>";
				echo"<td>".$row['honesty']."</td>";
				echo"<td>Neatness In Work</td>";
				echo"<td>".$row['neatness_in_work']."</td>";
				
			  echo"</tr>";
			  echo"<tr>";
			  echo"<td>Oral Fluency</td>";
			  echo"<td>".$row['oral_fluency']."</td>";
			  echo"<td>Class Participation</td>";
			  echo"<td>".$row['class_participation']."</td>";
			  echo"<td>Politeness</td>";
			  echo"<td>".$row['politeness']."</td>";
			  echo"<td></td>";
			  echo"<td></td>";
			  
			 echo" </tr>";
			  echo"<tr>";
			  echo"<td>Athletic Ability</td>";
			  echo"<td>".$row['athletic_ability']."</td>";
			  echo"<td>Self Control</td>";
			  echo"<td>".$row['self_control']."</td>";
			  echo"<td>Relationship with peers</td>";
			  echo"<td>".$row['relationship_peers']."</td>";
			  echo"<td></td>";
			  echo"<td></td>";
			  
			  echo"</tr>";
			   echo"<tr>";
			   echo"<td>Physical Health</td>";
			   echo"<td>".$row['physical_health']."</td>";
			   echo"<td>Sense of Responsibility</td>";
			   echo"<td>".$row['sense_responsibility']."</td>";
			   echo"<td>Relationship with Teachers</td>";
			   echo"<td>".$row['relationship_teachers']."</td>";
			   echo"<td></td>";
			   echo"<td></td>";
			   echo"</tr>"; 
			 echo"</table>"; 
			 echo"<br>";
		
		 echo"<div align='center' valign='middle'>KEY: EXCELLENT = 5, GOOD = 4, AVERAGE = 3, BELOW AVERAGE = 2, WEAK = 1</div>";
        echo "</br></br>";

		 echo"<div align='left'>EXTRA CURRICULAR ACTIVITIES:&nbsp&nbsp&nbsp <input type='text' size='100%'></div></br>";
		 echo"<div align='left'>CLASS TEACHER'S REMARK:&nbsp&nbsp&nbsp <input type='text' size='100%'> &nbsp&nbsp SIGNTURE:&nbsp&nbsp<input type='text' size='10'></div></br>";
		 echo"<div align='left'>PRINCIPAL'S REMARK:&nbsp&nbsp&nbsp <input type='text' size='100%'>&nbsp&nbsp SIGNTURE:&nbsp&nbsp <input type='text' size='10'></div></br></br>";

	echo "</font>";
	$id= $row['id']; 
	echo "<a href='edit_view.php?id=$id'>Edit Psych Report Here</a></br></br>";
	}
	?>
	
	</body>
	
	</html>