<?php

include('config.php');

function retrievestudents()
{
	global $connection;
	$select="SELECT * FROM student";
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


function projectcleared()
{
	global $connection;
	if(isset($POST['search']))
	{
	   $searchq = $_POST['search'];
	   $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	
	  
	  $query = "SELECT * FROM clear WHERE departmentid LIKE '%searchq%'";
	  $searchquery = mysqli_query($connection,$query)or die("couldnt search!");
	  $count = mysql_num_rows($query);
	  if($count == 0)
	  {
		  $output = 'There was no search results!';
	  }
	  else
	{
		while($row=mysqli_fetch_array($query))
			{
				$result[]=$row;
			}
			return $result;
	}
	
	}
	else{
	$select="SELECT * FROM clear WHERE status = 1";
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
}


function retrievedepartment()
{
	global $connection;
	$select="SELECT * FROM deparment ";
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


function retrieveusers()
{
	global $connection;
	$select="SELECT * FROM users ";
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

function projectdenied()
{
	global $connection;
	$select="SELECT * FROM clear WHERE status = 3";
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

function progress($admission)
{
	global $connection;
	$select="SELECT * FROM project_progress WHERE admission = $admission";
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