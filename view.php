
<h2>ALL INFORMATION</h2>

<?php


	$con = mysqli_connect("localhost" , "root" , "" , "test");
	
	$sql = "select * from userpass";
	
	$query = mysqli_query($con,$sql);
	
	
	if(mysqli_num_rows($query)>0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			
		
	
	
	

?>

	<table>
	
	
		
		
		<tr>
		
			<td>
			
				Name:<?php echo $row['user'];  ?>
				
			
			</td>
			
			<td>
			
				
				Id:<?php echo $row['id'];  ?>
			
			</td>
		
		</tr>
	
	</table>
	
	
<?php 

		}
	}


?>	