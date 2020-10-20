<?php
$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_error());
	}



$sql="CREATE TABLE user(
fname VARCHAR(20) NOT NULL,
lname VARCHAR(20) NOT NULL,
addr VARCHAR(20) NOT NULL,
uname VARCHAR(20) NOT NULL,
email VARCHAR(20) NOT NULL,
pass VARCHAR(20) NOT NULL,
conpass VARCHAR(20) NOT NULL)";
if(mysqli_query($con,$sql))
	{
	echo"created successfully";
	}
else{
	echo"unsuccessfull to create";
	}


?>
