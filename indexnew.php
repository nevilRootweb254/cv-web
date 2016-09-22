<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="art.jpg" rel="icon" type="image/png">
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
	
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="jqscript.js"></script>
	<link rel="stylesheet" href="css/slicknav.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<title>Zetech Pata Job</title>
		<style>
		#search{
			z-index:1;
			position:fixed;
			top:2px;
			margin-top:5px auto;
			display:none;
		}
		.users{
			background: #294292;
			color: white;
			width:100px;
			height:30px;
			transform: rotate(-270deg);
			z-index:1;
			top:200px;
			left:0px;
			position: fixed;
			text-align: center;
			line-height: 30px;
			cursor:pointer;
		}
		.slideruser{
			z-index:1;
			top:160px;
			left:30px;
			position: absolute;
			height: 400px;
			display:none;

		}
		.arrow{
			transform: rotate(270deg);
		}
		</style>
</head>
<body>
<!-- header Start
         ================================================= -->
        
        <section id="header" >
        	<nav class="navbar navbar-default navbar-fixed-top" style="background:silver;padding-top:5px;" id="nav">
        		<div class="container">
        		<div class="navbar-header">
        			<a href="#" class="nav-brand"><h2><i class="fa fa-briefcase" ></i></h2></a>
        		</div>
        		<ul class="nav navbar-nav">
        			<li class="active"><a href="#" >Home</a></li>
        			<li><a href="#">about us</a></li>
        			<li class="serch"><a href="#">search <i class="fa fa-search"></i></a></li>
        			<li>
        			<form class="form-group format" action="" method="" style="display:none;">
        				<input type="text" class="form-control" placeholder="SEARCH">
        			</form>
        			<script>
        				$(document).ready(function(){
        					$('.serch').on('click',function(){
        						$('.format').toggle(1);
        					});
        				});
        			</script>
        			<script type="text/javascript">
        				var nav=document.getElementById('nav');
        				//function onscroll
        				function onscroll() {
        					nav.style.padding="5px";
        				}
        			</script>
        			</li>
        		</ul>
        		<ul class="nav navbar-nav navbar-right">
        			<li><form action="login.php" method="post"><input type="submit" class="btn btn-success fa fa-account sub" value="SIGN IN"></form></li>
                                    
        		</ul>
        		</div>
        	</nav>
           <!-- .container close -->
        </section><!-- #heder close -->

        <!-- Slider Start
        ============================================================== -->

        <section id="slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="block">
                            <div class="slider-text-area">
                                <div class="slider-text">
                                    <h2 style="color:black;">ZETECH PATA JOB</h2> 
                                    <h4 class="sub-slider-text">Small review</h4>
                                    <h5 class="slider-h5">Zetech pata job is a site where zetech university students sign in and post their cv for them to be advertised.Create your account for more info its easy to learn very easy pals..</h5>
                                    <button type="button" class="btn btn-info edit-button-1">LOGIN HAVE AN ACCOUNT</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- .col-md-12 close -->
					<div class="col-md-6" >
					<div class="col-md-2">
					</div>
					<div class="col-md-8">
					<h3 style="font-weight:bolder">CREATE ACCOUNT . . . </h3>
					<form class="form-group" action="indexnew.php" method="post">
					<br>
					<label><li class="fa fa-user"> </li> FIRSTNAME : </label>
					<input type="text" name="firstname" placeholder="FIRST NAME" class="form-control"> <br>
					<label><li class="fa fa-user"> </li> LASTNAME : </label>
					<input type="text" name="secondname" placeholder="SECOND NAME" class="form-control"> <br>
					<label><li class="fa fa-envelope"> </li> EMAIL : </label>
					<input type="email" name="email" placeholder="EMAIL ADDRESS" class="form-control"> <br>
					<label><li class="fa fa-phone"> </li> PHONE NUMBER : </label>
					<input type="number" name="phone" placeholder="PHONE NUMBER" class="form-control"> <br>
					<label><li class="fa fa-key"> </li> PASSWORD : </label>
					<input type="password" name="password" placeholder="PASSWORD" class="form-control"> <br>
					<label><li class="fa fa-key"> </li>CONFIRM PASSWORD : </label>
					<input type="password" name="confirmpassword" placeholder="CONFIRM PASSWORD" class="form-control"> <br>
<?php
$conn = mysql_connect('localhost','root','1995');
$db = mysql_select_db('cv_db');
if(isset($_POST['create'])){
	$firstname = stripcslashes($_POST['firstname']);
	$lastname = stripcslashes($_POST['secondname']);
	$password = stripcslashes($_POST['password']);
	$password2 = stripcslashes($_POST['confirmpassword']);
	$phone_number = stripcslashes($_POST['phone']);
	$email = stripcslashes($_POST['email']);
	
	if(!empty($firstname) && !empty($lastname)  && !empty($password) && !empty($phone_number) && !empty($email)){
		if($password == $password2){
	$firstname = mysql_real_escape_string($firstname);
	$lastname = mysql_real_escape_string($lastname);
	$username = mysql_real_escape_string($firstname.' '.$lastname);
	$password = mysql_real_escape_string($password);
	$password = md5($password);
	$phone_number = mysql_real_escape_string($phone_number);
	$email = mysql_real_escape_string($email);
	$in = "INSERT INTO cv_user_table (firstname,secondname,username,password,phone_number,email) 
			VALUES ('$firstname','$lastname','$username','$password','$phone_number','$email')";
	$insert = mysql_query($in,$conn);
			if($insert == true){
			echo '<meta http-equiv="refresh" content="0.1;url=account.php">';
			}
		}else{
			echo '
			<script type="text/javascript" document="javascript">
			alert("the passwords does not match");
			</script>
			';
		}
	}else{
		echo '
		<script type="text/javascript" document="javascript">
			alert("please input all the required field");
		</script>
		';
	}
}
?>
					<input type="submit" name="create" value="CREATEACCOUNT" class=" btn btn-success btn btn-block"> 
					</form>
					</div>
					<div class="col-md-2">
					</div>
					</div>
                </div><!-- .row close -->
            </div><!-- .container close -->
        </section><!-- #slider close -->
		<br><br>
		<footer id="Slide_footer" style="background:grey">
		<br>
		<br>
		<div class="row">
		<div class="col-md-4" STYLE="color:black;">
		<ul>
		<li><a href="#"></li>
		<li></li>
		<li></li>
		</ul>
		</div>
		<div class="col-md-4">
		</div>
		<div class="col-md-4"></div>
		</div>
		<hr>
		<br><br>
		<center>
		<h3>Share <i class="fa fa-share"></i>On Or Get In Touch </h3>
		<br>
		<br>
		<div class="social-icon">
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="@"><i class="fa fa-instagram"></i></a>
		<a href="#"><i class="fa fa-whatsapp"></i></a>
		<a href="#"><i class="fa fa-youtube"></i></a>
		<a href="#"><i class="fa fa-snapchat"></i></a>
		</div>
		<br><br>
		<p>copyright <i class="fa fa-copyright"></i> from 9/13/2016 to <?php echo date('d-m-Y');?></p>
		</center>
		</footer>
		<section id="search">
		<div class="container">
		<div class="col-sm-4"></div>
		<div class="col-sm-4" style="background:lightblue;">
		<span class="glypicon glyphicon-minus minus" style="float:right;cursor:pointer;font-weight:bolder;"></span>
		<form class="form-group">
		<label> search for career course</label><br>
		<input type="text" name="search" id="searchinput" placeholder="SEARCH" class="form-control"><br>
		<input type="submit" name="submit" id="submit" value="submit" class="btn btn-block btn btn-info">
		</form>
		</div>
		<div class="col-sm-4"></div>
		</div>
		</section>
		<div class="users">
			<p>USERS &nbsp;<span class="glyphicon glyphicon-chevron-right arrow"></span>
		</div>
		<section class="slideruser">
			
				<div class="row" >
					<div class="col-sm-6" style="background:khaki;padding:10px;height: 470px;overflow: scroll;">
					<h6 class="glyphicon glyphicon-minus" style="float:right;"></h6>
					<hr>
						<div class="col-sm-4"  style="background:khaki;padding-bottom:10px;">
							<img src="images/copy.jpg" class="thumbnail" width="150" height="150">
							<button style="" type="button" class="btn btn-primary">view profile</button><br>
						</div>
						<div class="col-sm-4" style="background:khaki;padding-bottom:10px;">
							<img src="images/copy.jpg" class="thumbnail" width="150" height="150">
							<button style="" type="button" class="btn btn-primary">view profile</button>
						</div>
						<div class="col-sm-4" style="background:khaki;padding-bottom:10px;">
							<img src="images/copy.jpg" class="thumbnail" width="150" height="150">
							<button style="" type="button" class="btn btn-primary">view profile</button>
						</div>
						<div class="col-sm-4" style="background:khaki;padding-bottom:10px;">
							<img src="images/copy.jpg" class="thumbnail" width="150" height="150">
							<button style="" type="button" class="btn btn-primary">view profile</button>
						</div>
						<div class="col-sm-4" style="background:khaki;padding-bottom:10px;">
							<img src="images/copy.jpg" class="thumbnail" width="150" height="150">
							<button style="" type="button" class="btn btn-primary">view profile</button>
						</div>
						<div class="col-sm-4" style="background:khaki;padding-bottom:10px;">
							<img src="images/copy.jpg" class="thumbnail" width="150" height="150">
							<button style="" type="button" class="btn btn-primary">view profile</button>
						</div>
						<div class="col-sm-4" style="background:khaki;padding-bottom:10px;">
							<img src="images/copy.jpg" class="thumbnail" width="150" height="150">
							<button style="" type="button" class="btn btn-primary">view profile</button>
						</div>
						</div>
					
					<div class="col-sm-6" style="background:transparent;">
						
					</div>
					</div>
				</div>
			
		</section>
		<script type="text/javascript">
			$().ready(function(){

			});
		</script>
		<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
		
</body>
</html>