<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
    <link href="art.jpg" rel="icon" type="image/png">
    <!--<link rel="stylesheet" href="main.css" media="screen" title="no title" charset="utf-8">-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="jqscript.js"></script>
    <title>videos</title>

</head>
<body>

<div id="down">

<center>
<button class="btn btn-info" id="btn_eject" style="margin-top:2px;margin-bottom:4px;"> CLOSE &nbsp;  &nbsp;<span class="glyphicon glyphicon-chevron-up"></span></button>
<center>

<div class="row">
<div class="col-lg-12">

<?php
$conn = mysql_connect('localhost','root','1995');
$db = mysql_select_db('cv_db');
$sele = mysql_query("SELECT * FROM cv_user_table ORDER BY sighn_up_date DESC");
if($sele){
	while($row = mysql_fetch_array($sele,MYSQL_ASSOC)){
		$user = $row['firstname'];
		$lastname = $row['secondname'];
		$profile = $row['profilepicture'];
		$career  = $row['career'];
		$date_signed = $row['sighn_up_date'];
		$time = strtotime($date_signed);
		$datestr = date("m-d-y",$time);
		$day = date("m-d-y",strtotime("-1 days"));
				$weekday = date("m-d-y",strtotime("-2 days"));
				$weekdays = date("m-d-y",strtotime("-3 days"));
				$weekdayf = date("m-d-y",strtotime("-4 days"));
				$weekdayfv = date("m-d-y",strtotime("-5 days"));
				$weekdayfs = date("m-d-y",strtotime("-6 days"));
				$week = date("m-d-y",strtotime("-7 days"));
				$eightweek = date("m-d-y",strtotime("-8 days"));
				$nineweek = date("m-d-y",strtotime("-9 days"));
				$tenweek = date("m-d-y",strtotime("-10 days"));
				$elevenweek = date("m-d-y",strtotime("-11 days"));
				$twelveweek = date("m-d-y",strtotime("-12 days"));
				$thirteenweek = date("m-d-y",strtotime("-13 days"));
				$twoweeks = date("m-d-y",strtotime("-14 days"));
				if($datestr == date('m-d-y')){
					$datestr = "today.";
				}else{
					$datestr =$datestr;
				}
				if($day == $datestr){
					$datestr = "yesterday.";
				}else{
					$datestr =$datestr;
				}
				if($week == $datestr){
					$datestr = "a week ago.";
				}else if($weekday == $datestr){
					$datestr ='2 day ago.';
				}else if($weekdays == $datestr){
					$datestr ='3 days ago.';
				}else if($weekdayf == $datestr){
					$datestr ='4 days ago.';
				}else if($weekdayfv == $datestr){
					$datestr ='5 days ago.';
				}else if($weekdayfs == $datestr){
					$datestr ='6 days ago.';
				}else if($eightweek == $datestr){
					$datestr ='1 week and a day ago.';
				}else if($nineweek == $datestr){
					$datestr ='1 weeks 2 days ago.';
				}else if($tenweek == $datestr){
					$datestr ='1 weeks 3 days ago.';
				}else if($elevenweek == $datestr){
					$datestr ='1 week 4 days ago.';
				}else if($twelveweek == $datestr){
					$datestr ='1 week 5 days ago.';
				}else if($thirteenweek == $datestr){
					$datestr ='1 week 6 days ago.';
				}else if($twoweeks == $datestr){
					$datestr ='2 weeks ago.';
				}else{
					$datestr =$datestr;
				}
				//profile default
				if($profile == ""){
					$profile = 'images/default.jpg';
				}else{
					$profile = $profile;
				}
		echo'
		<div class="col-lg-4" >
		<div class="thumbnail" style="border-radius:0px;">
		<img src="'.$profile .'" class="img-responsive" style="" width="125px" height="125px">
		</div>
		<b>Username : </b>'.$user.' '.$lastname.'.<br>
		<b>Career couse : </b>'.$career.'.<br>
		<b>Updated: </b>'.$datestr.'
		</div>
		';
	}
}
?>



</div>

</div>


</div>
<div id="btn_toggle">
<center>
<button class="btn btn-info" id="btn" style="display:non;"> VIEW USERS <span class="glyphicon glyphicon-chevron-down"></span></button>
</center>
</div>
<div class="container-fluid">
<img src="images/PATA-JOB.jpg" class="img-responsive" style="margin:1px auto;height:110px;width:100%;border:0px;">
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background:gray;">
  <ul class="nav navbar-nav">
    <li style="color:black;"><a href="index.php">PATA-JOB</a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right" >
  <li class="right">
	 <form class="form-group" action="search.php" method="GET" style="margin:8px auto;">
	 <div class="form-group has-search has-feedback" >
	 <input type="text" name="search" class="form-control" placeholder="SEARCH FOR ANY USER OR FUCULTY">
	 <span class="glyphicon glyphicon-search form-control-feedback">
	 </div>
	 </form>
	</li>
      <li><a href="#" class="log" style="display:none;"><span class="glyphicon glyphicon-log-in"  ></span>Login </a></li>
      <li><a href="#" class="logging"><span class="glyphicon glyphicon-user"></span>Sign Up </a></li>
    </ul>
</nav>
<script>
$().ready(function (){
	$('.logging').click(function(){
		$('.log').show();
		$('#create').show();
		$('.logging').hide();
		$('#login').hide();
	});
	//
	$('.log').click(function(){
		$('.logging').show();
		$('#login').show();
		$('.log').hide();
		$('#create').hide();
	});
});
</script>
<?php//fist row?>
<div class="row">
<div class="col-sm-2">

</div>
<div class="col-sm-8">
<?php//second row on first row?>
<div class="row" style="background:silver;">

<div class="col-sm-2" style="">
</div>
<div class="col-sm-8 " style="padding:15px;">
  <!----CREATE ACCOUNT FORM BELOW---->
  <div id="create" style="display:none">
  <h3><b>CREATE ACCOUNT</b></H3>
  <HR>
	  <form class="form2" action="<?php $_PHP_SELF; ?>" method="POST" style="" >
	  <div class="form-group">
		<input type="text" class="form-control" name="firstname" placeholder="FIRSTNAME">
	  </div>
	  <div class="form-group">
		<input type="text" class="form-control" name="lastname" placeholder="LASTNAME">
	  </div>
	  <div class="form-group">
		<input type="text" class="form-control" name="username" placeholder="USERNAME">
	  </div>
	   <div class="form-group">
		<input type="password" class="form-control" name="password" placeholder="PASSWORD">
	  </div>
	  <div class="form-group">
		<input type="password" class="form-control" name="password2" placeholder="CONFIRMPASSWORD">
	  </div>
	  <div class="form-group">
		<input type="text" class="form-control" name="country" placeholder="COUNTRY">
	  </div>
	  <div class="form-group">
		<input type="text" class="form-control" name="city" placeholder="CITY">
	  </div>
	  <div class="form-group">
		<input type="text" class="form-control" name="address" placeholder="ADDRESS">
	  </div>
	   <div class="form-group">
		<input type="number" class="form-control" name="number" placeholder="PHONE NUMBER">
	  </div>
	  <div class="form-group">
		<input type="email" class="form-control" name="email" placeholder="EMAIL">
	  </div>
	   <input type="submit" class="btn btn-info form-control" name="submit" value="CREATE ACCOUNT" style="font-family:chiller;font-style:bold;">
<?php
$conn = mysql_connect('localhost','root','1995');
$db = mysql_select_db('cv_db');
if(isset($_POST['submit'])){
	$firstname = stripcslashes($_POST['firstname']);
	$lastname = stripcslashes($_POST['lastname']);
	$username = stripcslashes($_POST['username']);
	$password = stripcslashes($_POST['password']);
	$password2 = stripcslashes($_POST['password2']);
	$country = stripcslashes($_POST['country']);
	$city = stripcslashes($_POST['city']);
	$address = stripcslashes($_POST['address']);
	$phone_number = stripcslashes($_POST['number']);
	$email = stripcslashes($_POST['email']);
	
	if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password) && !empty($country) && !empty($city) && !empty($address)&&!empty($phone_number) && !empty($email)){
		if($password == $password2){
	$firstname = mysql_real_escape_string($firstname);
	$lastname = mysql_real_escape_string($lastname);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$password = md5($password);
	$country = mysql_real_escape_string($country);
	$city = mysql_real_escape_string($city);
	$address = mysql_real_escape_string($address);
	$phone_number = mysql_real_escape_string($phone_number);
	$email = mysql_real_escape_string($email);
	$in = "INSERT INTO cv_user_table (firstname,secondname,username,password,country,city,address,phone_number,email) 
			VALUES ('$firstname','$lastname','$username','$password','$country','$city','$address','$phone_number','$email')";
	$insert = mysql_query($in,$conn);
			if($insert == true){
			echo '<script type="text/javascript" document="javascript" >alert("your account is created click ok to proceed");</script>';
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
	  </form>
</div>
<div id="login">
<h3><b>LOGIN</b></H3>
<form class="form-group" action="index.php" method="POST" style="margin:8px auto;">
<div class="form-group">
<input type="text" name="username" class="form-control" placeholder="USERNAME">
</div>
<div class="form-group" >
<input type="password" name="password" class="form-control" placeholder="PASSWORD">
</div>
<input type="submit" name="login" value="login" class="btn btn-success form-control" style="font-family:chiller;font-style:bold;">
 
</form>
</div>
</div>
<div class="col-sm-2">


</div>

</div>
</div>
<div class="col-sm-2">

</div>
</div>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">

<div class="row" style="background:white;padding:20px;margin-top:10px;">
<div class="col-sm-2">
</div>
<div class="col-sm-8">
<center>
<?php
echo 'copyright &copy;from 25-7-2016 to  '.' '.date('d-m-Y').' .';
?>
</center>
</div>
<div class="col-sm-2">
</div>
</div>

</div>
<div class="col-sm-2"></div>
</div>
</div>
</body>
</html>