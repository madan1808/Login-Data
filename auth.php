<?php
session_start();
$userid = $_POST['userid'];
$password = $_POST['password'];
$con = mysqli_connect("localhost", "root","");
// if(mysqli_connect_errno()) {  
//     die("Failed to connect with MySQL: ". mysqli_connect_error());  
// }  

mysqli_select_db($con,"logintest");
$result = mysqli_query($con,"select * from userTable where userid = '$userid' 
	and password = '$password' ");

if($result === FALSE) { 
    $error = "Your Login Details are invalid";
    echo $error;
}
else{
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	     
	echo "Name: ".$row['username'];
	echo nl2br("\n");
	echo "Logged in sucessfully";
}
?>
