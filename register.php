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
	$a=$last_id-1;
	$sql2="SELECT * FROM PASSENGER WHERE p_id=' ".$a." '";
	$result=mysqli_query($con,$sql2) or die(mysqli_error($con));
	$row=mysqli_fetch_array($result);
	$v_seat=$row[1];
	static $v_id=1;	
	if($v_seat<=3)
	{
		$v_seat++;
		
	}
	else if($v_seat>=3)
	{
		$v_id++;
		$v_seat=1;
		
	}
	$sql2="INSERT INTO passenger (p_id,v_seat,v_id) VALUES($last_id,$v_seat,$v_id)";
		if(mysqli_query($con,$sql2))
			{
						
			
			echo "<html>
			<head>
			<script type='text/javascript'>
		
			function show_alert()
			{
				alert('your destination is station $d_station please wait a while until bus arrives');
			}	
			</script>
			</head>";
	echo"<body onload='show_alert()'>
		
		</body></html>";
	if(($s_station==1) AND ($d_station==2))
	{
		include("register1.html");
	}
	else if(($s_station==1) AND ($d_station==3))
	{
		include("register2.html");
	}
	else if(($s_station==1) AND ($d_station==4))
	{
		include("register3.html");
	}
	else if(($s_station==2) AND ($d_station==1))
	{
		include("register4.html");
	}else if(($s_station==2) AND ($d_station==3))
	{
		include("register5.html");
	}else if(($s_station==2) AND ($d_station==4))
	{
		include("register6.html");
	}else if(($s_station==3) AND ($d_station==1))
	{
		include("register7.html");
	}else if(($s_station==3) AND ($d_station==2))
	{
		include("register8.html");
	}else if(($s_station==3) AND ($d_station==4))
	{
		include("register9.html");
	}else if(($s_station==4) AND ($d_station==1))
	{
		include("register10.html");
	}else if(($s_station==4) AND ($d_station==2))
	{
		include("register11.html");
	}else if(($s_station==4) AND ($d_station==3))
	{
		include("register12.html");
	}
			}
			
			else
			{
				echo"error in adding in passenger".mysqli_error($con);
			}
	
	
	}
else{
	echo"error in adding".mysqli_error($con);
	}

?>

	

