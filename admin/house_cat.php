<?php 	
		include("connect.php");
		$result=mysqli_query($con,"select * from house_room where h_a_p_id=$id") or die(mysqli_error($con));
		while($row=mysqli_fetch_array($result)) 
		{
			echo "<option value=$row[0]>$row[1]</option>";
		}
?>