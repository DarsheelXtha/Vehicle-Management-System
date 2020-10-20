<?php
echo"<html>
<head>
<link rel='stylesheet' href='serve.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<script type='text/Javascript'>
	function toggleSidebar(){
	document.getElementById('sidebar').classList.toggle('active');
}
	</script>
</head>
<body>
	<div class='main'>
	<div id='sidebar' onclick='toggleSidebar()'>
		<div class='toggle-btn'>
			<span></span>
			<span></span>
			<span></span>
		</div>
<ul>
	<li><a href='server.html'><span class='fa fa-home'></span>Home</a></li>
	<li><a><span class='fa fa-question-circle'></span>About Us</a>
		<ul>
			<li><a href='about con.html'>Contributors</a></li>
			<li><a>Service</a></li>
		</ul>
	</li>
	<li><a><span class='fa fa-user-circle'></span>Me</a>
		<ul><li><a href='change.html'>Update account</a></li>
			<li><a href='Remove.html'>Remove account</a></li>
			<li><a href='signup.html'>Add new account</a></li>
		</ul>
	</li>	
	<li><a><span class='fa fa-question'></span>About Vehicle</a>
		<ul>
			<li><a>Registration</a></li>
			<li><a>Maintenance</a></li>
			<li><a>Fare</a></li>
		</ul>
	</li>
	<li><a href='register.html'><span class='fa fa-address-book'></span>Booking</a></li>
	<li><a><span class='fa fa-bus'></span>Stations</a>
		<ul>
	<li><a href='Station 1.html'>Gongabu</a></li>
			<li><a href='Station 2.html'>Banasthali</a></li>
			<li><a href='Station 3.html'>Lazimpat</a></li>
			<li><a=href='Station 4.html'>Maharajganj</a></li>
		 </ul>
	</li>
	<li><a><span class='fa fa-phone'></span>Contact Us</a>
		<ul>
			<li><a>Driver</a></li>
			<li><a>Adminstrators</a></li>
		</ul>
	</li>
	<li><a><span class='fa fa-comments '></span>Feedback</a></li>
	<li><a href='logout.php'><span class='fa fa-sign-out'></span>Logout</a></li>
	</ul>
</div>
<div id='nav'>	
<ul>
	<li><a href='server.html'><font color='red'>Home</font></a></li>
	<li><a>About</a>
		<ul>
			<li><a href='about con.html'>Contributors</a></li>
			<li><a>Users</a></li>
		</ul>
	</li>
	<li><a>Vehicle</a>
		<ul>
			<li><a>Registration</a></li>
			<li><a>Maintenance</a></li>
			<li><a>Fare</a></li>
		</ul>
	</li>
	<li><a href='register.html'>Booking</a></li>
	<li><a>Station</a>
		<ul>
	<li><a href='Station 1.html'>Gongabu</a></li>
			<li><a href='Station 2.html'>Banasthali</a></li>
			<li><a href='Station 3.html'>Lazimpat</a></li>
			<li><a href='Station 4.html'>Maharajganj</a></li>
		</ul>
	</li>
	<li><a>Contact Us</a>
	<ul>
	<li><a href='driver.php'>Driver</a></li>
			<li><a href='administrators.php'>Adminstrators</a></li>
	</ul>
	</li>
</ul>
</div>
</div>";





$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con)
	{
	die("not connected.".mysqli_connect_error());
	}
	
echo"<center>";
echo"<h2>for more info contact our admnitrators</h2>";
$sql="SELECT * FROM user1";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	if(mysqli_num_rows($result)>0)
		{
		echo"<table border=1>";
		echo"<tr><th>name</th><th>email</th><th>phone</th></tr>";
	while($row=mysqli_fetch_assoc($result))
		{
		echo"<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td></tr>";
		
		}	echo"</table>";
	}
else{
	echo"unsuccessfull to create";
	}
echo"</center>";




echo"</body>
</html>";
?>