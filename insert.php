<?php
	
	
	if(isset($_POST["submit"]))
	{
		$con = mysqli_connect("localhost","root","","test");
		if(!$con)
		{
			die("connection error".mysqli_connect_error());
		}
		$name=$_POST["name"];
		$id=$_POST["id"];
		$pass=$_POST["pass"];
		
		//$sql = "INSERT INTO userpass VALUES('1','rion','2145')";
		$sql = "INSERT INTO userpass (id,user,pass) VALUES('".$_POST["id"]."' , '".$_POST["name"]."' ,'".$_POST["pass"]."')";
		
		$quer = mysqli_query($con,$sql);
		
		if($quer)
		{
			echo "DAta inserted";
		}
		else{
			echo "not inserted";
		}
		
	}
?>



<html>


	<head>
	
		<title>Data insertion</title>
	
	</head>
	
	
	<body>
	
	
		<form action="" method="post">
		
			
			User Name:<input type="text" name="name" ><br><br>
			Id:<input type="text" name="id" ><br><br>
			
			Password:<input type="password" name="pass"><br>
			<hr>
			<input type="submit" name="submit">
		
		</form>
	
	</body>


</html>