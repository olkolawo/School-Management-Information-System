<!DOCTYPE html>

<html>
	<head>
		<title>MIS</title>
		 <link rel="stylesheet" type="text/css"  href="color.css"/>
	</head>
	<body style="
		background-color:#E6E6FA;
		background-repeat: repeat;
	    border-width: 50px;    
		border-style: solid;    
		border-color: purple;
		margin:auto;
		margin-top:2cm;
		width:60%;   
	    padding:50px;
	    left: 120px;   
		">
			
		<form class="contact_form  "action="verify_index.php" method="POST" name="contact_form" style="color:blue;">

			<ul style="list-style-type:none;">

				<li>
				 <label for "name" style="text-align: center;"><h2>Teachers Login </h2></label>||<label><a href="admin.php"><h2 style="color:blue">Admin Login </h2></a></label>
				</li>
				<li>
				<hr class="horizontal"/>
				</li></br>
				
				<li>
			   	<label for "name"> Username:</label> 
				<input type="text" name="admin" placeholder="chemistry or physics or english or mathematics" required></br></br> 
			    </li>
				<li>
				<label for "name"> Password:</label> 
				<input type="password"  name="password" placeholder="password" required></br></br>
				</li>
				<li>
		     	<label for "name"> </label> 
				 <button type="submit" class="button">Login</button>
				 </li>
				 <li>
				</br><hr class="horizontal2"/>
				</li></br>
				<span  id="info" style="line-height:20px; color: grey; font-size: 16px;" ><b style="color: black;">Username:</b> chemistry or physics or english or mathematics <br>
				 <b style="color: black;">Password:</b> Password is password
				</span>
			</ul>
 		</form>
	</body>
</html>