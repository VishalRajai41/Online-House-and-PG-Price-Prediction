<?php 	
		include("connect.php");
		$result1=mysqli_query($con,"select * from state where sid=$id") or die(mysqli_error($con));
		$row1=mysqli_fetch_array($result1);

		
		while($row1=mysqli_fetch_array($result1)) 
		{
			echo "<td value='$row1[0]'>$row1[1]</td>";
			
		}
?>