<?php
$comment=$_POST["comment"];



$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}



$sql="INSERT INTO comment (comment) VALUES (' ".$comment." ')";
if(mysqli_query($con,$sql))
	{	

	echo "<html>
			<head>
			<script type='text/javascript'>
		
			function show_alert()
			{
				alert('thanks for your suggettion.');
			}	
			</script>
			</head>";
	echo"<body onload='show_alert()'>
		
		</body></html>";
				include("about con.html");
		}
else
{
	echo"error".mysqli_error();
	}
	
	?>