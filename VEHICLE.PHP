<?php
$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}



$sql="CREATE TABLE VEHICLE(
V_ID INTEGER PRIMARY KEY,
S_STATION INT,
D_STATION INT,
TIME TIMESTAMP,
REQ_NO INT AUTO INCREMENT)";
if(mysqli_query($con,$sql))
	{
	echo"created successfully";
	}
else{
	echo"unsuccessfull to create";
	}

?>

	

