<?php


	session_start();

	if(isset($_SESSION['username']))
	{


		session_destroy();
		echo 
		"
		<script>
		alert('Logout successful');
		window.location.href='index.html';
		</script>
	
		"
		;

	}
	else
	{
		echo "<script>
		 window.loacation.href = 'index.html'";
	}

?>