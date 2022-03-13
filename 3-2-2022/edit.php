<?php
 session_start();
	include 'db_connection.php';
	$id = $_SESSION['sid'];
	
	$sql = "SELECT * FROM student WHERE id = '$id' and status = '1'";
	$result = mysqli_query($con,$sql);
	if($result){
		$row = mysqli_fetch_array($result);
	}
	
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		
		$sql = "UPDATE student SET `fname` = '$fname', lname = '$lname' WHERE id = '$id'";
		$result = mysqli_query($con,$sql);
		if($result){
			echo "Item updated successfully";
		}
		else{
			echo mysqli_error($con);
		}
	}
?>



<html>
<body>

<form action = "#" method = "post">
	<table>
		<tr>
			<td>
				First Name: <input type = "text" name = "fname" value = <?php echo $row['fname']; ?> />
			</td>
		</tr>
		<tr>
			<td>
				Last Name: <input type = "text" name = "lname" value = <?php echo $row['lname']; ?> />
			</td>
		</tr>
		<tr>
			<td>
				<input type = "submit" name = "submit" value = "Edit" />
			</td>
		</tr>
	</table>

</form>

</body>
</html>