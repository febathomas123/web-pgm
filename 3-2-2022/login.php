<!DOCTYPE html>
<html lang="en">
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

</head>
<body>

    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation">
            <div class="container">

                <div class="navbar-header">
                   <img src="assets/img/a.jpg" alt="">
                    <a class="site-title"><span>Diocese</span> Management</a>

                </div><!-- /.navbar-header -->

                <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">

						<li><a href="Adminlogin.php">Admin</a></li>
                         <li><a href="index.html">Home</a></li>

                    </ul>

                </div>

            </div>   
        </nav><!-- /.site-navigation -->
    </header><!-- /#mastheaed -->

    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">

<?php

include 'connect.php';
session_start();

if(isset($_POST['login'])){
	$username = $_POST['uname'];
	$password = $_POST['pswd'];
	$sql = "SELECT id From userinfo where email = '$username' and pwd = '$password'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$_SESSION['sid'] = $row['id'];

	if($_SESSION['sid'] > 0)
		{
			header("Location:user.php");
			exit();
		}
	else
	{
		echo"<script>alert('Enter correct password')</script>";
	}
	
}
?>



<html>
<head><b>
<title>Login Here!</title>
<style>
					.sec{
						position: relative;
						padding-top: 100px;
					}
					
			</style>
</head>
<body>
		<form action = "" method = "post">
		<div class="sec">
			<center><h1><b>Login Here!</b><br>
			</h1>
			<table><br>
				<tr><td>
					Username : <input type = "text" name = "uname" >
				</td></tr>
				<tr><td><br>
					Password : <input type = "password" name ="pswd" >
				<td></tr>
				<tr><td><br><br>
				</td></tr>
				<tr><td> <a href="user.php?id=<?php echo $row['id'];?>">
					<center><input type ="submit" name = "login" value = "LOGIN" >
				</td></tr>
			</table>
		</form>
	</body>
<html>			
				
				
		
                <!-- <h1>Your story begins from here.</h1> -->
          
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->
  
</body>
</html>