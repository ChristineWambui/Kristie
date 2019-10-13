<?php

include('config.php');

$username = $_POST['username'];
$role = $_POST['role'];
$message = $_POST['message'];
$label = 'Super Admin';

$messageuser= "INSERT INTO message_user(label,username,role,message)VALUES('$label','$username','$role','$message')";
$messageuserquery =mysqli_query($connection,$messageuser);
if($messageuserquery)
{
	echo "<script>
	alert('Message sent succesfully');
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