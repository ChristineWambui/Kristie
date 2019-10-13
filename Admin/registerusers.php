<?php

include('config.php');

$username = $_POST['username'];
$department =$_POST['department'];
$fullname =$_POST['fullname'];
$role = $_POST['role'];
$password =$_POST['password'];

$user = "INSERT INTO users(fullname,username,department,password,role)VALUES('$fullname','$username','$department','$password','$role')";
$userquery =mysqli_query($connection,$user);
if($userquery)
{
	echo "<script>
	alert('Added the user succesfully');
	window.location.href='viewusers.php';
	</script>";
}
else
{
	echo "<script>
	alert('Action unsuccesful');
	window.location.href ='viewusers.php';
	</script>";
}

?>