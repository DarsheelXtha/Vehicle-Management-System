<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
	{
	die("not connected.".mysqli_error());
	}
else
	{
	echo"successfull to connect";
	}

?>

	