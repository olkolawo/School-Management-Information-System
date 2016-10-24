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
	<title>TS</title>
	</head>
	<body>

	<?php
		require('connect.php');

			if(isset($_POST['firstname'])&& isset($_POST['class']) && isset($_POST['mathematics']) && isset($_POST['english']) && isset($_POST['chemistry']) && isset($_POST['physics'])  && isset($_POST['adm_no'])  && isset($_POST['middle_name'])  && isset($_POST['term'])  && isset($_POST['house'])  && isset($_POST['session']))
			{
				$firstname=      mysqli_real_escape_string ($conn, $_POST['firstname']);
				$middle_name=    mysqli_real_escape_string ($conn, $_POST['middle_name']);
				$class =         mysqli_real_escape_string ($conn, $_POST['class']);
				$adm_no =  mysqli_real_escape_string ($conn, $_POST['adm_no']);
				$house       =   mysqli_real_escape_string ($conn, $_POST['house']);
				$term    =       mysqli_real_escape_string ($conn, $_POST['term']);
				$session =       mysqli_real_escape_string ($conn, $_POST['session']);
				$mathematics =   mysqli_real_escape_string ($conn, $_POST['mathematics']);
				$english =       mysqli_real_escape_string ($conn, $_POST['english']);
				$chemistry =     mysqli_real_escape_string ($conn, $_POST['chemistry']);
				$physics =       mysqli_real_escape_string ($conn, $_POST['physics']);
				//$biology = mysqli_real_escape_string ($conn, $_POST['biology']);
				if(!empty($firstname) && !empty($class) && !empty($mathematics) && !empty($english) && !empty($chemistry) && !empty($physics) && !empty($adm_no) && !empty($middle_name) && !empty($term) && !empty($house) && !empty($session)) {
				
					$sql= "insert into bado (student_name, subject_class, m_subject, e_subject, c_subject, p_subject, middle_name, adm_no, house, term, session)
					                     VALUES('$firstname', '$class','$mathematics','$english','$chemistry', '$physics', '$middle_name', '$adm_no', '$house', '$term','$session')";
					
					if (mysqli_query($conn, $sql)){
						
						echo"</br></br>";
						echo "<font face='Courier New' ><font size='5' ><center style='color:red;'></h1>Student has been registered successfully</h1></center></font></font>"."<br /></br>";
						echo "<font face='Courier New' ><font size='5' ><center style='color:red;'></h1>Please click the button below to register another student</h1></center></font></font>"."<br />";
						echo "<center><a href='register.php'><button type='submit' class='button'>Back</button></a></center></br></br>";	
					}	

					}else{
					echo 'Field must not be empty!';	
					}
		    }
	?>
	</body>
</html>