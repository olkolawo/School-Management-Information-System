<!DOCTYPE html>

<html>
<head>
 <link rel="stylesheet" type="text/css"  href="color.css"/>
 <title>TEST</title>
<style>
	.button {
	  display: inline-block;
	  padding: 8px 15px;
	  font-size: 10px;
	  cursor: pointer;
	  text-align: center;	
	  text-decoration: none;
	  outline: none;
	  color: #fff;
	  background-color:green;
	  border: none;
	  border-radius: 8px;
	  box-shadow: 0 5px #999;
	  }

	.button:hover {background-color: blue}

	.button:active {
	  background-color: #3e8e41;
	  box-shadow: 0 5px #666;
	  transform: translateX(4px);
	}
</style>
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
	<form class="contact_form  "action="verify_admin.php" method="POST" name="contact_form" style="color:blue;">
	 <ul style="list-style-type:none;">
		 <li>
		 <label for "name" style="text-align: center;;"><h2>Admin Login</h2></label></label>||<label><a href="index.php"><h2 style="color:blue">Teacher Login </h2></a></label>	
		</li>
		<li>
		<hr class="horizontal"/>
		</li></br>
		<li>	
		   <label for "name"> Username:</label> 
		   <input type="text" name="admin" placeholder="admin" required></br></br>	   
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
		<span  id="info" style="line-height:20px; color: grey; font-size: 16px;" ><b style="color: black;">Username:</b> admin <br>
		 <b style="color: black;">Password:</b> Password is password
		</span>
	</ul>
</body>
</html>