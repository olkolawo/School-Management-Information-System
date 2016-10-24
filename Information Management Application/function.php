<?php
session_start();
$valid = $_SESSION['valid'];
if(!$valid || $valid == ""){
header("Location:index.php");
}

function escape($conn, $text)
{
return mysqli_real_escape_string($conn, $text);
}
?>