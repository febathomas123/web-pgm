<?php
include "connect.php";
$sql = " SELECT * FROM `reg` " ;
$result=$con->query($sql);
?>
<html>
<head>
<title>view page</title>
</head>
<body>
<div class="container">
<h2>USERS</h2>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Number</th>
<th>Date of birth</th>
<th>Email</th>
<th>Password</th>
</tr>
<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['number'];?></td>
<td><?php echo $row['date of birth'];?></td>
<td><?php echo $row['email'];?></td>
<td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
<?php
	}
}
?>
</table>
</html>