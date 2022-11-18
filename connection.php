<?php

$server = "localhost";
$database = "login";
$username= "root";
$password= "";

$conn = mysqli_connect($server, $username, $password, $database);

if($conn)
{
	echo"Database is connected";
}
else
{
	echo"Database is not connected".mysqli_error($conn);
}
if(isset($_POST['user']))
{
	$username = $_POST['user'];
	$password = $_POST['text'];
	
	$sql = "select *from users where username = '$username' AND 'password' = $password";
	$result = mysqli_query($conn,$sql);
}
	if(mysqli_num_rows($result == 1)
		{
		echo "access granted";
		exit()
		}
	else
		{
		echo "access denied";
		exit()
		}

?> 