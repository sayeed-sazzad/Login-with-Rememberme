<?php
	
	session_start();
	
	$con = mysqli_connect("localhost","root","","test");
	
	if(isset($_POST["submit"]))
	{
		$sql = "SELECT * FROM userpass WHERE user = '".$_POST["name"]."' AND pass = '".$_POST["pass"]."'";
		$query = mysqli_query($con,$sql);
		
		//$res = mysqli_fetch_assoc($query);
		
		if(mysqli_num_rows($query)>1)
		{
		
		
			
			while($row=mysqli_fetch_assoc($query))
			{
				
				if($row['user']==$_POST["name"] && $row['pass']==$_POST["pass"])
				{
					
					if(!empty($_POST["remember"]))
					{
						setcookie("user",$_POST["name"],time()+(24*60*60));
						setcookie("pass",$_POST["pass"],time()+(24*60*60));
					}
					
					
					else
					{
						if(isset($_COOKIE["user"]))
						{
							setcookie("user", "");
						}
						
						if(isset($_COOKIE["pass"]))
						{
							setcookie("pass", "");
						}
					}
					
					$_SESSION["name"] ="rakib";
					header("Location:welcome.php");
				}
				
				else{
					echo "Invalid user name and password";
				}
				
			}
		
		}
			
	
	}
	
	

?>














<!DOCTYPE html>



<html>


	<head>
	
	
		<title>Registration Form</title>
	
	</head>
	
	
	
	<body>
	
		<form action="" method="post">
		
			
			User Name:<input type="text" name="name" value="<?php if(isset($_COOKIE["user"])) {echo $_COOKIE["user"];} ?>"><br><br>
			<input type="checkbox" name="remember" <?php if(isset($_COOKIE["user"])) {?>checked <?php }?> >Remember me<br><br>
			Password:<input type="password" name="pass"  value="<?php if(isset($_COOKIE["pass"])) {echo $_COOKIE["pass"];} ?>"><br>
			<hr>
			<input type="submit" name="submit">
		
		
		</form>
		
		
	
	
	</body>






</html>