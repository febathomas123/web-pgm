<!DOCTYPE html>
<html>
<head>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

<style>

body {
  background-image: url('bg2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
<body>

<center><h2><B>Admin Panel</B></h2>

</body>
<body>

    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                    <a class="site-title"><span>Diocese</span> Management</a>
					

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

						<li><a href="Registration.php">Registration</a></li>
                        <li><a href="login.php">Logout</a></li>
						

                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

 <?php
include "connect.php";
$sql = " SELECT * FROM `userinfo` " ;
$result=$con->query($sql);
?>
<html>
<head><b>
<title>User</title>
<style>
					.sec{
						position: relative;
						padding-top: 100px;
					}
					
			</style>
</head>
<body>

<Left><h1>USERS</h1>
<table border= 9 style="width:90%">
<colgroup>
  <col span="10" style="background-color: #E6EEEE">
</colgroup>
<tr>
<font color=blue size='4pt'>
<th><center><b>ID</b></th>
<th><center><b>Parish name</th>
<th><center><b>Vicar</th>
<th><center><b>Phone</th>
<th><center><b>Email</th>
<th><center><b>Founded</th>
<th><center><b>Number of Familys</th>
</tr> 
<?php
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
?>
<tr>
<td><center><?php echo $row['id'];?></td>
<td><center><?php echo $row['parishname'];?></td>
<td><center><?php echo $row['vicar'];?></td>
<td><center><?php echo $row['phone'];?></td>
<td><center><?php echo $row['email'];?></td>
<td><center><?php echo $row['founded'];?></td>
<td><center><?php echo $row['no_of_fam'];?></td>
<td><a href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
<?php
	}
}
?>   
  
</body>



</html>