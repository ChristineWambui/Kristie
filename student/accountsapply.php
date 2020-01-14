<?php

include('config.php');

session_start();

    if(isset($_SESSION['admission']))
        {
            foreach($_SESSION as $admission){
                $thevalue = $admission;
            }
        }

function apply()
{	
	global $admission;
	global $connection;
	$retrievename = "SELECT fullname FROM student WHERE admission ='$admission'";
	$namequery = mysqli_query($connection,$retrievename);
	$names = mysqli_fetch_array($namequery);
	foreach ($names as $name){}
	
	$retrievedep = "SELECT departmentname FROM deparment WHERE role = 3";
	$depquery = mysqli_query($connection,$retrievedep);
	$dep= mysqli_fetch_array($depquery);
	foreach ($dep as $department){}

	$applyfirst ="INSERT INTO clear(departmentid,departmentname,admission,userid,datetime,status,studentname)VALUES(3,'".$department."','".$admission."',3,NOW(),2,'".$name."')";
	$projectapplyfirst = mysqli_query($connection,$applyfirst)or die(mysqli_error($connection));
	if($projectapplyfirst)
	{
	    echo "<script>
		window.location.href = 'studentportal.php';
		</script>";
	}
	else
	{
	    echo "failed";
	}
}

function update()
{
	global $admission;
	global $connection;
	$update ="UPDATE clear SET status=2 WHERE admission=$admission and departmentid=3";
	$projectupdate = mysqli_query($connection,$update)or die(mysqli_error($connection));
	if($projectupdate)
	{
	    echo "<script>
		window.location.href = 'studentportal.php';
		</script>";
		
		

	}
	else
	{
	    echo "failed";
	}
}

$selectQuery = "SELECT * FROM clear WHERE admission=$thevalue  and departmentid=3";
$selectResults = mysqli_query($connection,$selectQuery);


	if (mysqli_num_rows ($selectResults)>0)
    {
    	update();
    }
    else
    {
    	apply();
    } 

?>