<?php 
require "bookconnect.php"; 
if(isset($_POST['sub'])) 
{ $bookhead=$_POST['btitle']; 
$store = "SELECT * FROM `books` WHERE `title` = '$bookhead'"; 
$result=$con->query($store); 
if($is_query_run=mysqli_query($con,$store)) 
{ 
while($query_execute=mysqli_fetch_assoc($is_query_run)) 
{ ?><table  
border="1"><tr><th>sino</th><th>title</th><th>author</th><th>edition</th><th>publisher </th></tr> 
<tr><td><?php echo $query_execute["ano"];?></td> 
<td><?php echo $query_execute["title"];?></td> 
<td><?php echo $query_execute["author"];?></td> 
<td><?php echo $query_execute["edition"];?></td> 
<td><?php echo $query_execute["publisher"];?></td></tr></table> 
<?php } 
}$con->close(); 
} 
?> 
<html> 
<head> 
<title>book search</title> 
</head> 
<body><form method="POST" action=""> 
<label>enter the title</label> 
<input type="text" name="btitle"> 
<input type="submit" name="sub" value="submit"> 
</form> 
</body> 
</html> 
searchbook.php 
Displaying bookconnect.php.
Amal Jyothi College of Engineering Kanjirappally 67  
20MCA133 WEB PROGRAMMING LAB Dept. of Computer Applications 
<?php 
include "bookconnect.php"; 
if(isset($_POST['submit'])) 
{ 
$ano=$_POST['ano']; 
$title=$_POST['title']; 
$author=$_POST['author']; 
$edition=$_POST['edition']; 
$publisher=$_POST['publisher']; 
$sql = "INSERT INTO `books` ( `ano`,`title`, `author`, `edition`, `publisher`) VALUES (  '$ano','$title', '$author', '$edition', '$publisher')"; 
$result=$conn->query($sql); 
if($result==TRUE) 
{ 
echo "new record created successfully"; 
} 
else 
{ 
echo "Error".$sql."<br>".$conn->error; 
} 
$conn->close(); 
} 
?> 
<html>
Amal Jyothi College of Engineering Kanjirappally 68  
20MCA133 WEB PROGRAMMING LAB Dept. of Computer Applications 
<head> 
<title>newcustomer</title> 
</head> 
<body> 
<form method="POST" action=""> 
<h1>Register</h1><br> 
Ano<br> 
<input type="text" name="ano" required><br> 
<br> 
Title<br> 
<input type="text" name="title" required><br> 
Author<br> 
<input type="text" name="author" required><br> 
Edition<br> 
<input type="text" name="edition" required><br> 
Publisher<br> 
<input type="text" name="publisher" required> 
<br> 
<input type="submit" name="submit" value="register"><br><br><br><br><br> <a href="pro_login.html">already have an account</a><br><br> </form> 
</body> 
</html> 
bookinsert.php 
Displaying bookconnect.php.
