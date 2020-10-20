<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$add=$_POST["add"];
$uname=$_POST["uname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$conpass=$_POST["conpass"];
$valid=0;
if(strlen($fname)==0){
	echo"firstname field can't be empty<br>";
	$valid=1;
}
if(!preg_match("/^[A-Za-z]{1,}$/",$fname)){
	echo"You must enter alphabetic characters in this firstname<br>";
	$valid=1;
}
if(strlen($lname)==0){
	echo"lastname field can't be empty<br>";
	$valid=1;
}
if(!preg_match("/^[A-Za-z]{1,}$/",$lname)){
	echo"You must enter alphabetic characters in this lastname<br>";
	$valid=1;
}
if(strlen($add)==0){
	echo"address field can't be empty<br>";
}
if(!preg_match("/^[A-Za-z0-9]{1,}$/",$add)){
	echo"You must enter your Address<br>";
	$valid=1;
}
if(strlen($uname)==0){
	echo"uname field can't be empty<br>";
}
if(!preg_match("/^[A-Za-z0-9]{1,}$/",$uname)){
	echo"You must enter your uname<br>";
	$valid=1;
}
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
	echo"You must enter correct email format<br>";
}

if(strlen($pass)==0){
	echo"password field can't be empty<br>";
	$valid=1;
}
if(!preg_match("/^[a-zA-Z0-9]{8,30}$/",$pass)){
	echo"password field must contain atleast 8 characters and must be alphanumeric<br>";
	$valid=1;
}
if(strcmp($pass,$conpass)!=0){
	echo"Password and Conform password doesn't match<br>";
	$valid=1;
}
if($valid==1){
	$default=$_POST;
	echo"<form method='post' action='$_SERVER[PHP_SELF]'>
	Firstname:<input type='text' name='fname' value='".htmlentities($default['fname'])."'><br/>
	Lastname:<input type='text' name='lname' value='".htmlentities($default['lname'])."'><br/>
	Address:<input type='text' name='add' value='".htmlentities($default['add'])."'><br/>
	username:<inpu type='text' name='uname' value='".htmlentities($default['uname'])."'><br/>
	Email:<input type='text' name='email' value='".htmlentities($default['email'])."'><br/>
	Password:<input type='text' name='pass' value='".htmlentities($default['pass'])."'><br/>
	Confirm Password:<input type='text' name='conpass' value='".htmlentities($default['conpass'])."'><br/>
	<input type='submit' value='Signup'>
	</form>";
}
else{
$con=mysqli_connect("localhost","root","","VEHICLE_REG");
if(!$con){
	die("Can't Connect to database".mysqli_error_connect($con));
}
$s="SELECT *FROM user WHERE uname='".$uname."'";
$result=mysqli_query($con,$s);
if(mysqli_num_rows($result)>0){
	echo"Sorry! Username already taken";
}
else{	
$sql=mysqli_query($con,"INSERT INTO user VALUES('$fname','$lname','$add','$uname','$email','$pass','$conpass')");
echo"Account created sucessfully";
	header("location:login.html");
	exit();
}
mysqli_close($con);
}

