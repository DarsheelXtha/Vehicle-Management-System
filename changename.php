<?php
$hidden=$_POST["uname"];
$name=$_POST["fname"];
$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}


$sql="UPDATE TABLE user SET firstname=' ".$name." ' WHERE uname=' ".$hidden." ' ";
if(mysqli_query($con,$sql))
	{
	echo"changed";
	}
else{
	echo"unsuccessfull to change";
	}

?>
