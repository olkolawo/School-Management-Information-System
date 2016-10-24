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
				if (isset($_GET['id']) && is_numeric($_GET['id']))
				 {
				 // get id value
				 $id =  escape($conn, $_GET['id']);
				 }
		
				 $edit= mysqli_query($conn, "SELECT handwriting, class_attendance, initiative, personal_neatness, creativity, punctuality, honesty, neatness_in_work, oral_fluency, class_participation, politeness, athletic_ability, self_control, relationship_peers, physical_health, sense_responsibility, relationship_teachers FROM bado WHERE id='$id'");	
			
			 while ($row= mysqli_fetch_array($edit)){						
	 ?> 
  		<form action="verify_edit_view.php"  method="POST">
			<input type="hidden" name="id" value="<?php echo $id;?>">
		
			<ul style="list-style-type:none;">
			
			<li>
			 <label for "name">Handwriting </label>
			<input type="text" name="handwriting" value="<?php echo $row['handwriting']?>"></br></br>
			</li>
			
			<li>
			 <label for "name">Class Attendance </label>
			<input type="text" name="class_attendance" value="<?php echo  $row['class_attendance']?>"></br></br>
			</li>
			
			<li>
			 <label for "name">Initiative </label>
			<input type="text" name="initiative" value="<?php echo  $row['initiative']?>"></br></br>
			</li>
			
	        <li>
			 <label for "name">Personal Neatness </label>
			<input type="text"  name="personal_neatness" value="<?php echo  $row['personal_neatness']?>"></br><br>
			</li>
			
		    <li>
			 <label for "name">Creativity </label>
			<input type="text"  name="creativity" value="<?php echo  $row['creativity']?>"></br><br>	
			</li>
			
		    <li> 
			<label for "name">Punctuality </label>
			<input type="text" name="punctuality"  value="<?php echo  $row['punctuality']?>"></br><br>	
			</li>
			
		    <li> 
			<label for "name">Honesty </label>
			<input type="text" name="honesty"  value="<?php echo  $row['honesty']?>"></br><br>		
		    </li>
			
		    <li>
			<label for "name">Neatness in work </label>
			<input type="text"   name="neatness_in_work"  value="<?php echo  $row['neatness_in_work']?>"></br><br>	
			</li>
	
		    <li>
			<label for "name">Oral Fluency </label> 
			<input type="text"  name="oral_fluency"  value="<?php echo  $row['oral_fluency']?>"></br><br>
			</li>
			
			<li>
			<label for "name">Class Participation </label> 
			<input type="text"  name="class_participation"   value="<?php echo  $row['class_participation']?>"></br><br>	
			</li>
			
		    <li>
			<label for "name">Politeness </label>  
			<input type="text" name="politeness"  value="<?php echo  $row['politeness']?>"></br><br>	
			 </li>
			 
			<li>
			<label for "name">Athletic Ability </label> 
			<input type="text" name="athletic_ability"   value="<?php echo  $row['athletic_ability']?>"></br><br>
			</li>
			
		    <li>
			<label for "name">Self Control </label> 
			<input type="text" name="self_control"   value="<?php echo  $row['self_control']?>"></br><br>
			</li>
			 
		    <li>
			<label for "name">Relationship with Peers </label>  
			<input type="text"  name="relationship_peers"  value="<?php echo  $row['relationship_peers']?>"></br><br>
			</li>
			 
			<li>
			<label for "name">Physical Health </label> 
			<input type="text"  name="physical_health" value="<?php echo  $row['physical_health']?>"></br><br>
			</li>
			
			<li>
			<label for "name">Sense of Responsibility </label> 
			<input type="text"  name="sense_responsibility"   value="<?php echo  $row['sense_responsibility']?>"></br><br>
			 </li>
			 
			 <li>
			<label for "name">Relationship With Teachers </label> 
			<input type="text"  name="relationship_teachers"   value="<?php echo  $row['relationship_teachers']?>"></br><br>
			 </li>	 
			 
			<?php
				 }
				?>		  
			 <p id="update7"><button type="submit" class="button">Update</button></p>
 </form>
  <form action="logout.php"><div align="middle"><a href="logout.php"><button type="submit" class="button1">Log Out</button></a></div></form></br></br> 
</body>
</html>


