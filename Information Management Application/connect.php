<?php
$host='localhost';
$username='root';
$password='root';
$database='test';

 error_reporting (0);
 $error_issues='Sorry we\'re experiencing downtime. ';
  // connect to database   
 $conn=mysqli_connect($host, $username, $password, $database) or die($error_issues);
?>