













<?php
$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}



$sql="SELECT * FROM user";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)>0)
		{
		echo"<table border=1>";
		echo"<tr><th>firstname</th><th>lastname</th><th>address</th><th>user name</th><th>email</th></tr>>";
	while($row=mysqli_fetch_assoc($result))
		{
		echo"<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['add'].
			"</td><td>".$row['uname']."</td><td>".$row['email']."</td></tr>";
		
		}	echo"</table>";
	}
else{
	echo"unsuccessfull to create";
	}

?>
