<?php
$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}



$sql="SELECT * FROM comment";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)>0)
		{
		echo"<table border=1>";
		echo"<tr><th colspan=10>reviews</th></tr>";
	while($row=mysqli_fetch_assoc($result))
		{
		echo"<tr><td>".$row['comment']."</td></tr>";
		
		}	echo"</table>";
	}
else{
	echo"unsuccessfull to create";
	}

?>
