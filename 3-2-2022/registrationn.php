<?php
include 'connect.php';

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$date=$_POST['date'];
	$address=$_POST['address'];
	$pass=$_POST['password'];

$sql = "INSERT INTO `reg` ( `name`,`email`,`number`,`date of birth`,`address`,`password`) VALUES ('$name','$email','$number','$date','$address','$pass')";
$result=$con->query($sql);
if($result==TRUE)
{
    header('location:loginn.php');
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}

?>




?>

<html>
    <head>
        <title>Registration</title>
    </head>
        <script>
            function validateform()
            {
                var a=document.getElementById('name').value.trim();
                var b=document.getElementById('mail').value.trim();
                var c=document.getElementById('phno').value.trim();
                var dob=document.getElementById('dob').value.trim();
                var d=document.getElementById('add').value.trim();
                var e=document.getElementById('cpswd').value.trim();

                if(a=="")
                {
                    document.getElementById('nme').innerHTML="**please enter name";
                    return false;
                }
                if(b.indexOf('@')<=0){
                    document.getElementById('gmail').innerHTML="**Invalid  Email Address";
                    return false;
                }     
                if ((b.charAt(b.length-4)!='.') && (b.charAt(b.length-3)!='.')) {
                    document.getElementById('gmail').innerHTML="**Invalid  Email Address";
                    return false;
                }
                if(c==""){
                  document.getElementById('ph').innerHTML="**Enter 10 digit valid number";
                  return false;
                }
                if(c.length>10||c.length<10){
                  document.getElementById('ph').innerHTML="**Enter 10 digit valid number";
                  return false;
                }
                if (dob == null || dob == "" || !pattern.test(dob)) 
               {
                document.getElementById('db').innerHTML="**Enter date of birth";
                    return false;
               }
               if(d=="")
               {
                document.getElementById('ad').innerHTML="**Please Enter Address"; 
                return false;
               }
               if(e=="")
               {
                document.getElementById('cpwd').innerHTML="**Please Enter Password"; 
                return false;
               }
              
             else
                {
                    return true;
                }
            }
            function onclear(){
                document.getElementById('nme').innerHTML="";
                document.getElementById('gmail').innerHTML="";
                document.getElementById('ph').innerHTML="";
                document.getElementById('db').innerHTML="";
                document.getElementById('ad').innerHTML="";
                document.getElementById('cpwd').innerHTML="";  
            }

        </script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <body style=" background: url(login.jpg);">
            <div class="regbox">
      
                <center>
                 <form method="post"  onsubmit="return validateform();">
                     <label>Name</label>
                     <input type="text" id="name" name="name" pattern="[A-Za-z\s]{1,20}"  placeholder="Enter Name" autocomplete="off" onclick=" return onclear()">
                     <span id="nme" style="color: red;"></span><br><br>

                     <label>Mail id</label>
                     <input type="email" id="mail" name="email" placeholder="Enter Mail id" onclick="return onclear();" autocomplete="off">
                     <span id="gmail" style="color: red;"></span><br><br>

                     <label>Mobile No</label>
                     <input type="tel" name="number"  pattern="[0-9]{10}" id="phno"placeholder="Enter Number" onclick="return onclear();" autocomplete="off">
                     <span id="ph" style="color: red;"></span><br><br>

                     <label>Date of Birth</label>
                     <input type="date" name="date" id="dob" pattern="[0-9]{2})-([0-9]{2})-([0-9]{4}" placeholder="Enter DOB" onclick="return onclear();" autocomplete="off">
                     <span id="db" style="color: red;"></span><br><br>
                     
                     <label>Address</label>
                     <textarea id="add" name="address" placeholder="Enter Address" onclick="return onclear();" autocomplete="off"></textarea>
                     <span id="ad" style="color: red;"></span><br><br>

                     <label>Password</label>
                     <input type="password" name="password" id="cpswd" placeholder="Enter Password" onclick="return onclear();">
                     <span id="cpwd" style="color: red;"></span><br><br>

                     <input type="submit" name="submit" value="Register">
                   
                 </form>
				 </center>
            </div>
           
        </body>
</html>