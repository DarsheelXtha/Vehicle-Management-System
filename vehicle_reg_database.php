<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
	{
	die("not connected.".mysqli_error());
	}



$sql="CREATE DATABASE VEHICLE_REG";
if(mysqli_query($con,$sql))
	{
	echo"creted successfully";
	}
else{
	echo"unsuccessfull to create";
	}

?>

	

