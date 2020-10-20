<?php
$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}



$sql="SELECT * FROM request";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)>0)
		{
		echo"<table border=1>";
		echo"<tr><th>req_no</th><th>s_station</th><th>d_station</th><th>time</th>";
	while($row=mysqli_fetch_assoc($result))
		{
		echo"<tr><td>".$row['req_id']."</td><td>".$row['s_station']."</td><td>".$row['d_station'].
			"</td><td>".$row['req_time']."</td></tr>";
		
		}	echo"</table>";
	}
else{
	echo"unsuccessfull to create";
	}

?>
