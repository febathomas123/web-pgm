<?php 

include "connect.php";

    if (isset($_POST['update'])) {

    $parish=$_POST['parish'];
	$vicar=$_POST['vicar'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$founded=$_POST['founded'];
	$family=$_POST['family'];
	$password=$_POST['password'];
	$user_id = $_GET['id'];

$sql = "UPDATE `userinfo` SET `parishname`='$parish',`vicar`='$vicar',`phone`='$phone',`email`='$email',`founded`='$founded',`no_of_fam`='$family',`pwd`='$password' WHERE `id`='$user_id'";
$result=$con->query($sql);
         

        if ($result == TRUE) {

            header('location:user.php');

        }else{

            echo "Error:" . $sql . "<br>" . $con->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `userinfo` WHERE `id`='$user_id'";

    $result = $con->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $parish=$row['parishname'];
			$vicar=$row['vicar'];
			$phone=$row['phone'];
			$email=$row['email'];
			$founded=$row['founded'];
			$family=$row['no_of_fam'];
			$password=$row['pwd'];
			$id=$row['id'];

        } 

    ?>

        <h2><center>Update user details</h2>

        <form action="" method="post">

          <fieldset>

        
				<center>
                 <label>Parish</label>
                     <input type="text" id="parish" name="parish" pattern="[A-Za-z\s]{1,20}"  placeholder="Enter parish name" autocomplete="off" onclick=" return onclear()">
                     <span id="nme" style="color: red;"></span><br><br
					 
					 <label>vicar</label>
                     <input type="text" id="vicar" name="vicar" pattern="[A-Za-z\s]{1,20}"  placeholder="Enter vicar name" autocomplete="off" onclick=" return onclear()">
                     <span id="namevr" style="color: red;"></span><br><br>
					 
					 <label>Mobile No</label>
                     <input type="tel" name="phone"  pattern="[0-9]{10}" id="phno"placeholder="Enter Number" onclick="return onclear();" autocomplete="off">
                     <span id="ph" style="color: red;"></span><br><br>
					 
					 <label>Foundation</label>
                     <input type="date" name="founded" id="founded" pattern="[0-9]{2})-([0-9]{2})-([0-9]{4}" placeholder="Enter DOB" onclick="return onclear();" autocomplete="off">
                     <span id="fd" style="color: red;"></span><br><br>

                     <label>Mail id</label>
                     <input type="email" id="email" name="email" placeholder="Enter Mail id" onclick="return onclear();" autocomplete="off">
                     <span id="gmail" style="color: red;"></span><br><br>

                     <label>Number of Families</label>
                     <input type="text" id="family" name="family" placeholder="Enter number of families" onclick="return onclear();" autocomplete="off">
                     <span id="fam" style="color: red;"></span><br><br>

                     <label>Password</label>
                     <input type="password" name="password" id="password" placeholder="Enter Password" onclick="return onclear();">
                     <span id="pwd" style="color: red;"></span><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: login.php');

    } 

}

?> 