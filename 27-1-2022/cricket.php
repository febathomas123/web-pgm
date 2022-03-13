<!DOCTYPE html> 
<html lang="en"> 
<head> 
 <title>Document</title></head> 
<body> 
 <?php 
$c=array("Kohli","Rohit","Rahul","Pant","Pandya","Bhuvaneshvar","Aswin","Shami","Jadej a","Bhumrah","Agharwal"); 
echo "<table border='1' width='90'><tr><th>Cricketers</th></tr>"; 
foreach($c as $i){ 
echo "<tr><td>$i</td></tr>"; 
} 
echo "<table>"; 
?> 
</body> 
</html>
