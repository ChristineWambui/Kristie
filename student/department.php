<?php 

include('config.php');


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