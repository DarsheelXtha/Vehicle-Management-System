<?php
$s_station=$_POST["s_station"];
$d_station=$_POST["d_station"];
static $v_id=1;

$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}



$sql="INSERT INTO request (s_station,d_station) VALUES ($s_station,$d_station)";
if(mysqli_query($con,$sql))
	{	

	$last_id=mysqli_insert_id($con);
	echo $last_id;
	$a=1;
	$sql2="SELECT * FROM PASSENGER WHERE p_id=' ".$a." '";
	$result=mysqli_query($con,$sql2) or die(mysqli_error($con));
	$row=mysqli_fetch_array($result);
	$v_seat=$row[1];
	echo $v_seat;	
	}
else{
	echo"error in adding".mysqli_error($con);
	}

?>

	

