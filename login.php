<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!---fort owsome link-->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="main.css" media="screen" title="no title" charset="utf-8">-->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link href="art.jpg" rel="icon" type="image/png">
    <!--<link rel="stylesheet" href="main.css" media="screen" title="no title" charset="utf-8">-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="jqscript.js"></script>
	<title>SIGN IN</title>
	<style>
		.input,.button{
			height:50px;
		}
		 #progress{
	   
	   height:10px;
	   background:silver;
	   border-radius:6px;
  		}
   #progress_bar{
	   width:0px;
	   height:10px;
	   background:#294292;
	   border-radius:6px;
	   animation:loader 4s infinite linear;
   }
		@keyframes loader{
			20%{
				width:20%;
			}
			40%{
				width:40%;
			}
			60%{
				width:60%;
			}
			80%{
				width:80%;
			}
			100%{
				width:100%;
			}
		}
	</style>
</head>
<body onload="return loaded()">
	<header id="header">
		<nav class="navbar navbar-default navbar-fixed-top" style="background:#294292;padding:20px;">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="nav-brand" style="color:lightblue;text-decoration:none;"><h2><i class="fa fa-briefcase"></i> Zetech Pata Job <sub style="font-size:15px;">un</sub></h2></a>
				</div>
			</div>
		</nav>
	</header>
	<section style="margin-top:30px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<h4 style="padding:10px;">SIGN TO MY ACCOUNT</h4>
					<div class="thumbnail" style="padding:30px;border:1px solid silver;">
						<form class="form" method="post" action="login.php">
							<label for="login_field">Username or email address.</label><br>
							<input type="text" class="form-control input" placeholder="USERNAME OR EMAIL ADDRESS..." name="username" id="user"><br>
							<label for="password">Password.</label><br>
							<input type="password" class="form-control input" placeholder="PASSWORD..." name="password" id="pass"><br>
                        	<input type="submit" class="btn btn-block btn-success button" name="login" value="LOGIN" style=";font-style:bold;"><br>
 <?php
$conn = mysql_connect('localhost','root','1995');
$db = mysql_select_db('cv_db');
if(isset($_POST['login'])){
	$user = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['password']);
	$pass = md5($pass);
	$select = "SELECT * FROM cv_user_table WHERE (username = '$user' OR email = '$user') AND password = '$pass'";
	$query = mysql_query($select,$conn) or die('something went wrong please try again');
	$row = mysql_fetch_array($query,MYSQL_ASSOC);
	if(($row['username'] === $user OR $row['email'] === $user) AND $row['password'] == $pass ){
		$id = $row['user_id'];
		$_SESSION['id'] = $id;
		$session = $_SESSION['id'];
		echo '<meta http-equiv="refresh" content="1;url=account.php">';
	}else{
		echo '<p style="color:red;"><i class="fa fa-warning"></i> error wrong username or password.... <i class="fa fa-spinner fa-spin"></i></p><p><a href="#">forgetten password</a><span id="time"></span></p>';
	}
}
?>
						
						</form>
					</div>
					<div class="thumbnail" style="padding:30px;border:1px solid silver">
					 	<p> Don't have an Account?<a href="#">create account...<div id="progress" class="block"><div id="progress_bar" class="block"></div></div></a></p>
					 	<script type="text/javascript" type="text/javascript">
					 		var load = document.getElementById('progress');
					 		function loaded(){
					 			load.style.display = "none";
					 		}
					 		
					 	</script>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</section>
	<!-- footer Start
        ====================================================================== -->

        <section id="footer" style="background:#294292;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="footer-contant">
                                <h3>Follow us , Get In Touch.</h3>
                                <div class="social-icon">
                                    <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" title="google"><i class="fa fa-google"></i></a>
                                    <a href="#" title="flickr"><i class="fa fa-flickr"></i></a>
                                    <a href="#" title="instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" title="youtube"><i class="fa fa-youtube"></i></a>
                                </div>
                                <div class="support-link">
                                    <ul>
                                        <li><a href="#"><span class="fa fa-phone"></span> Contact</a></li>
                                        <li><a href="#"><span class="fa fa-question"></span> FAQ's</a></li>
                                        <li><a href="#" ><span class="fa fa-file"></span> Support</a></li>
                                        <li><a href="#"> <span class="fa fa-desktop"></span> Developers</a></li>
                                        <li><a href="#"><span class="fa fa-key"></span> Privacy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- #footer --> 
       <div id="help-btn">
        	<p><i class="material-icons"> share</i> HELP</p>
       </div>
</body>
</html>