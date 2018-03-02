
<?php

	session_start();
	if(isset($_SESSION["name"]))
	{

?>


<!DOCTYPE html>



<html>


	<head>
	
	
		<title>welcome</title>
	
	</head>
	
	
	
	<body>
	
		<h2 align="cemnter">Welcome</h2>
		<p align="center"><a href="logout.php">Logout</a>
		
	
	
	</body>






</html>

<?php
	
	} else{
		echo "login first";
	}

?>