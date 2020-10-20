<?php
$s_station=$_POST["s_station"];
$d_station=$_POST["d_station"];

$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}



$sql="INSERT INTO request (s_station,d_station) VALUES ($s_station,$d_station)";
if(mysqli_query($con,$sql))
	{	

	$last_id=mysqli_insert_id($con);
	$sql2="SELECT v_seat FROM PASSENGER WHERE p_id=last_id";
	$v_seat=mysqli_query($con,$sql2);
	echo $v_seat;
	}
else{
	echo"error in adding".mysqli_error($con);
	}

?>
