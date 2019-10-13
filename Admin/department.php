<?php 

include('config.php');

$department = $_POST['department'];
$role = $_POST['role'];

$department = "INSERT INTO deparment(departmentname,role)VALUES('$department','$role')";
$departmentquery =mysqli_query($connection,$department);
if($departmentquery)
{
	echo "<script>
	alert('Added the department succesfully');
	window.location.href='editstudentsportal.php';
	</script>";
}
else
{
	echo "<script>
	alert('Action unsuccesful');
	window.location.href ='editstudentsportal.php';
	</script>";
}


function retrievedepartment()
{
	global $connection;
	$select="SELECT departmentname FROM deparment";
	$selectresult=mysqli_query($connection,$select);
	$result=array();
	if(mysqli_num_rows($selectresult)>0)
	{
		while($row=mysqli_fetch_array($selectresult))
		{
			$result[]=$row;
		}
		return $result;
	}
}

?>