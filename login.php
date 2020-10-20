<?php
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$con=mysqli_connect("localhost","root","","VEHICLE_REG");


if(($uname=="sanish" AND $pass="9843602612") || ($uname=="dev" AND $pass="9813081051") || ($uname=="prithvi" AND $pass="9810250693"))
{
	header("location:admin.html");
	
}
else{
if(!$con){
	die("Can't Connect to database".mysqli_error_connect($con));
}

$sql="SELECT * FROM user WHERE uname='".$uname."' AND pass='".$pass."' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)!=0){
	header("location:server.html");
	exit();
	

}

else{
	echo "<html>
			<head>
			<script type='text/javascript'>
		
			function show_alert()
			{
				alert('Username or Password is Wrong');
			}	
			</script>
			</head>";
	echo"<body onload='show_alert()'>
		
		</body></html>";
		include('login.html');

}
}
?>