<?php
error_reporting(0);
session_start();
$session = $_SESSION['id'];
?>
<?php
if(isset($_SESSION['id'])){

$connect = mysql_connect("localhost","root","1995");
$data = mysql_select_db("cv_db");
$sele = mysql_query("SELECT * FROM cv_user_table where user_id=$session");

if($sele){
	while($row = mysql_fetch_array($sele,MYSQL_ASSOC)){
		$user = $row['username'];
		$country = $row['country'];
		$city = $row['city'];
		$address = $row['address'];
		$phone = $row['phone_number'];
		$email = $row['email'];
        $age = $row['age'];
        $gender = $row['gender'];
        $about = $row['about'];
        $careercourse = $row['career'];
        $date = $row['sighn_up_date'];
		$_SESSION['username'] = $user;
		$_SESSION['country'] = $country;
		$_SESSION['city'] = $city;
		$_SESSION['phone_number'] = $phone;
		$_SESSION['email'] = $email;
		$_SESSION['age'] = $age;
		$_SESSION['gender'] = $gender;
		$_SESSION['address'] = $address;
		$_SESSION['about'] = $about;
		$_SESSION['career-course'] = $careercourse;
		$_SESSION['sighn_up_date'] = $date;
	}
}
}else{
    header('location:logout.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="art.jpg" rel="icon" type="image/png">
    <!--<link rel="stylesheet" href="main.css" media="screen" title="no title" charset="utf-8">-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="jqscript.js"></script>
    <title>(<?php echo $_SESSION['username'];?> )ON NET CV</title>
<style>
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>

</head>
<body>
  <div id="uploaded" >
  
    
    <div id="upload" class="row"  style="display:none;margin:100px;">
    <div class="col-sm-2"></div>
    <div class="col-sm-8" style="background:black;padding:5px;border-radius:15px;">
	<p class="clrs" style="float:right;top:0px;height:20px;width:20px;border-radius:100%;border:1px solid black;color:black;text-align:center;line-height:20px;"><a href="#" style="text-decoration:none;font-weight:bolder;">&times;</a></p><br>
	<div class="thumbnail" style="background:white;margin:10px;">
	<p><b>update profile picture</b></p>
	<hr>
	   <form class="form-group" action="account.php" method="post" enctype="multipart/form-data">
	   <div class="form-group has-upload has-feedback" >
	   <input type="file" class="form-control" placeholder="FILE" name="file">
	   </div>
	   <input type="submit" value="upload" name="update" class="btn btn-default">
	   </form>
	   </div>
	   </div>
	   <div class="col-sm-2"></div>
	   </div>
	   
	    <div id="row5" class="row" style="display:none;margin:100px;border-radius:15px;">
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4" style="background:white;padding:5px;border-radius:15px;">
	   <p class="clrs" style="float:right;top:0px;height:20px;width:20px;border-radius:100%;border:1px solid black;color:black;text-align:center;line-height:20px;"><a href="#" style="text-decoration:none;font-weight:bolder;">&times;</a></p><br>
	   <div class="thumbnail" style="background:black;margin:10px;">
	   <h3><b>update cv</b></h3>
	   <hr>
	   <form class="form-group" action="account.php" method="POST" enctype="multipart/form-data">
	   <input type="file" class="form-control" placeholder="UPDATE CV" name = "doc"><br><br>
	   <input type="submit" value="update" name="subups" class="btn btn-info form-control">
	   <?php
	   if(isset($_POST['subups'])){
		   mysql_connect('localhost','root','1995');
		   mysql_select_db('cv_db');
		   $name = $_FILES['doc']['name'];
		   $tmp_name = $_FILES['doc']['tmp_name'];
		   $type = $_FILES['doc']['type'];
		   $extension = strtolower(substr($name,strpos($name,' ')+1));
		   $path = 'cvfiles'.$name;
		   if(!empty($name)){
			   if($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png' || $extension === 'gif'){
				   $upload = move_uploaded_file($path,$tmp_name);
				   if($upload){
					   echo 'wow';
				   }
			   }
		   }
		   
	   }
        
	   ?>
	   </form>
	   </div>
	   </div>
	   <div class="col-sm-4"></div>
	   </div>
	   
	   
	   	      <div id="row4" class="row" style="display:none;margin:100px;border-radius:15px;">
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4" style="background:black;padding:5px;border-radius:15px;">
	   <p class="clrs" style="float:right;top:0px;height:20px;width:20px;border-radius:100%;border:1px solid black;color:black;text-align:center;line-height:20px;"><a href="#" style="text-decoration:none;font-weight:bolder;">&times;</a></p><br>
	   <div class="thumbnail" style="background:white;margin:10px;">
	   <h3><b>update about myself</b></h3>
	   <hr>
	   <form class="form-group" action="account.php" method="POST">
	   <input type="text" class="form-control" placeholder="DIPLOMA/DEGREE IN......." name= "career"><br><br>
	   <input type="submit" value="update" name="sub" class="btn btn-info form-control">
	   <?php
	   	if(isset($_POST['sub'])){
		$career = htmlentities($_POST['career']);
		if(!empty($career)){
			$career = mysql_real_escape_string($career);
			$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
			    $update_pro = "UPDATE cv_user_table SET career = '$career'  where user_id = $session";
				$up = mysql_query($update_pro,$conn);
				if($up){
					echo 'updated';
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}else{
					echo 'something went wrong try again';
				}
		}else{
			echo 'error';
		}
		
		
	    }else{
	     echo 'input all fields';
       }
	   ?>
	   </form>
	   </div>
	   </div>
	   <div class="col-sm-4"></div>
	   </div>
	   
	      <div id="row3" class="row" style="display:none;margin:100px;">
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4" style="background:black;padding:5px;border-radius:15px;">
	   	<p class="clrs" style="float:right;top:0px;height:20px;width:20px;border-radius:100%;border:1px solid black;color:black;text-align:center;line-height:20px;"><a href="#" style="text-decoration:none;font-weight:bolder;">&times;</a></p><br>
	   <div class="thumbnail" style="background:white;margin:10px;">
	   <h3><b>update profile</b></h3>
	   <hr>
	   <form class="form-group" action="account.php" method="POST">
	   <input type="number" class="form-control" placeholder="PHONE NUMBER" name="phone"><br>
	   <input type="email" class="form-control" placeholder="email" name="mail"><br>
	   <input type="submit" value="update" name="updating" class="btn btn-info form-control">
	   <?php
	   	if(isset($_POST['updating'])){
		$phone = htmlentities($_POST['phone']);
		$mail = htmlentities($_POST['mail']);
		if(!empty($phone) || !empty($mail)){
			$phone = mysql_real_escape_string($phone);
			$mail = mysql_real_escape_string($mail);
			$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
			    $update_pro = "UPDATE cv_user_table SET phone_number = '$phone' , email = '$mail' where user_id = $session";
				$up = mysql_query($update_pro,$conn);
				if($up){
					echo 'updated';
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}else{
					echo 'something went wrong try again';
				}
		}else{
			$age = mysql_real_escape_string($age);
			$gender = mysql_real_escape_string($gender);
			$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
				if($db){
					 $update_pro = "UPDATE cv_user_table SET age = '$age' , gender= '$gender' where user_id = $session";
				    !$up = mysql_query($update_pro,$conn);
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}else{
					echo 'something went wrong try again';
				}
		}
		
		
	    }else{
	     echo 'input all fields';
       }
	   ?>
	   </form>
	   </div>
	   </div>
	   <div class="col-sm-4"></div>
	   </div>
	   
	   <div id="row1" class="row" style="display:none;margin:100px;">
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4" style="background:black;padding:5px;border-radius:15px;">
	   <p class="clrs" style="float:right;top:0px;height:20px;width:20px;border-radius:100%;border:1px solid black;color:black;text-align:center;line-height:20px;"><a href="#" style="text-decoration:none;font-weight:bolder;">&times;</a></p><br>
	   <div class="thumbnail" style="background:white;margin:10px;">
	   <h3><b>update profile</b></h3>
	   <hr>
	   <form class="form-group" action="account.php" method="POST">
	   <input type="number" class="form-control" placeholder="AGE" name="age"><br>
	   <input type="text" class="form-control" placeholder="GENDER" name="gender"><br>
	   <input type="submit" value="update" name="update" class="btn btn-info form-control">
	   <?php
	   	if(isset($_POST['update'])){
		$age = htmlentities($_POST['age']);
		$gender = htmlentities($_POST['gender']);
		if(!empty($age) || !empty($gender)){
			$age = mysql_real_escape_string($age);
			$gender = mysql_real_escape_string($gender);
			$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
			    $update_pro = "UPDATE cv_user_table SET age = '$age' , gender= '$gender' where user_id = $session";
				$up = mysql_query($update_pro,$conn);
				if($up){
					echo 'updated';
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}else{
					echo 'something went wrong try again';
				}
		}else{
			$age = mysql_real_escape_string($age);
			$gender = mysql_real_escape_string($gender);
			$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
				if($db){
					 $update_pro = "UPDATE cv_user_table SET age = '$age' , gender= '$gender' where user_id = $session";
				    !$up = mysql_query($update_pro,$conn);
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}else{
					echo 'something went wrong try again';
				}
		}
		
		
	    }else{
	     echo 'input all fields';
       }
	   ?>
	   </form>
	   </div>
	   </div>
	   <div class="col-sm-4"></div>
	   </div>
	   
	   <div id="row2" class="row" style="display:none;margin:100px;">
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4" style="background:black;padding:5px;border-radius:15px;">
	   <p class="clrs" style="float:right;top:0px;height:20px;width:20px;border-radius:100%;border:1px solid black;color:black;text-align:center;line-height:20px;"><a href="#" style="text-decoration:none;font-weight:bolder;">&times;</a></p><br>
	   <div class="thumbnail" style="background:white;margin:10px;">
	   <h3><b>update profile</b></h3>
	   <hr>
	   <form class="form-group" action="account.php" method="POST">
	   <input type="text" class="form-control" placeholder="COUNTRY" name="country"><br>
	   <input type="text" class="form-control" placeholder="CITY" name="city"><br>
	   <input type="text" class="form-control" placeholder="ADDRESS" name="address"><br>
	   <input type="submit" value="update" name="updated" class="btn btn-info form-control">
	   <?php
	   	if(isset($_POST['updated'])){
		$country = htmlentities($_POST['country']);
		$city = htmlentities($_POST['city']);
		$address = htmlentities($_POST['address']);
		if(!empty($country) || !empty($city) || !empty($address)){
			$country = mysql_real_escape_string($country);
			$city = mysql_real_escape_string($city);
			$address = mysql_real_escape_string($address);
			$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
			    $update_pro = "UPDATE cv_user_table SET  country = '$country' , city= '$city', address = '$address' where user_id = $session";
				$up = mysql_query($update_pro,$conn);
				if($up){
					echo 'updated';
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}else{
					echo 'something went wrong try again';
				}
		}
		
		
	    }else{
	     echo 'input all fields';
       }
	   ?>
	   </form>
	   </div>
	   </div>
	   <div class="col-sm-4"></div>
	   </div>
	   
	 </div>
	 <!--header========================================-->
<header>
<nav class="navbar navbar-inverse " data-spy="affix" data-offset-top="197" style="background:#294292;color:white;border-radius:0px;">
<div class="container-fluid">
  <ul class="nav navbar-nav">
    <li><a href="index.php">CURICULUM VITAE PAGE &nbsp;&nbsp;<i class="fa fa-file"></i></a></li>
    <li ><a href="#"><?php echo $_SESSION['username'];?> <i class="fa fa-dashboard" style="color:green; title="available"></i></a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
  <li class="right">
	 <form class="form-group" action="search.php" method="GET" style="margin:8px auto;">
	 <div class="form-group has-search has-feedback" >
	 <input type="text" name="search" class="form-control" placeholder="SEARCH FOR ANY USER OR FUCULTY">
	 <span class="glyphicon glyphicon-search form-control-feedback">
	 </div>
	 </form>
	</li>
      <li><a href="logout.php" ><span class="glyphicon glyphicon-off"> </span>&nbsp;logout&nbsp;&nbsp;</a></li>
    </ul>
    </div>
</nav>
</header>
<section>
<div class="container-fluid">
<div class="row">
<div class="col-sm-2">
</div>
<div class="col-sm-8">

<div class="row" style="background:white;">
<div class="col-sm-4" style="padding:10px;">
<hr>
<h3><b><a href="#" style="color:black;">my account</a></b></h3>
<div id="img-image">
	<?php
	 $conn = mysql_connect("localhost","root","1995");
    $db = mysql_select_db("cv_db");
	$sel = "SELECT * FROM cv_user_table where user_id=$session";
	$sq = mysql_query($sel,$conn);
	while($row = mysql_fetch_array($sq,MYSQL_ASSOC)){
	$rowusername = $row['username'];

    $rowimage = $row['profilepicture'];
	if($rowimage == ""){
		echo '<div id="img">'.'<a href="#" title="click to update picture "><img src="images/default.jpg" width="150" height="150" class="img-responsive img-rounded thumbnail" style="border:1px solid khaki;"></a>'.'</div>';
	}else{
		echo '<div id="img">'.'<a href="#" title="click to update picture "><img src="'.$rowimage.'" width="150" height="150" class="img-responsive img-rounded thumbnail" style="border:1px solid khaki;background:#294292;"></a>'.'</div>';
	}
	}

	?>
	<?php
	$sel = "SELECT * FROM cv_user_table where user_id=$session";
	$sq = mysql_query($sel,$conn);
	while($row = mysql_fetch_array($sq,MYSQL_ASSOC)){
		$age = $row['age'];
		$gender = $row['gender'];
		$country = $row['country'];
		$city = $row['city'];
		$address = $row['address'];
		$phone = $row['phone_number'];
		$email = $row['email'];
		$about = $row['about'];
		$curriculum = $row['cv_user'];
		if($age !=0 && $gender !=""){
	       echo'<br><div style="display:none"><h4 >profile complete 10%.</h4><div class="progress" >
				<div class="progress-bar" role="progress id="pro"
		 aria-valuenow="10%" ariavaluemin="0%" aria-valuemax="100%" style="width:10%;" style="background: #294292">
				<span class="sr-only">70% complete</span>
				</div>
	        </div>
	        </div>
	        ';
		} if($country !="" && $city !="" && $address !=""){
				echo'<br><div style="display:none"><h4>profile complete 40%.</h4><div class="progress">
				<div class="progress-bar" role="progress id="pro"
		 aria-valuenow="40%" ariavaluemin="0%" aria-valuemax="100%" style="width:40%;" style="background: #294292">
				<span class="sr-only">70% complete</span>
				</div>
	        </div></div>';
		}if($email !="" && $phone !=""){
	       echo'<br><h4 >profile complete 60%.</h4><div class="progress" >
				<div class="progress-bar" role="progress id="pro"
		 aria-valuenow="60%" ariavaluemin="0%" aria-valuemax="100%" style="width:60%;" style="background: #294292">
				<span class="sr-only">70% complete</span>
				</div>
	        </div>
	        
	        ';
		}
	}
	   echo '<H3><b>Username : </b></h3>'.$_SESSION['username'].'<br>';
	   //view as others comment=**************************************************
	   echo'<a href="search.php ? more='.$session.'" style="color:#294292;">view my profile as others </a>';
	?>
</div>
	 <?php
	 if(isset($_POST['update'])){
	  $name = htmlentities($_FILES['file']['name']);
	  $tmp_name = htmlentities($_FILES['file']['tmp_name']);
	  $type = htmlentities($_FILES['file']['type']);

	  $extension = strtolower(substr($name,strpos($name, '.')+1));
	  $path = 'images/'.$name;
	  if(!empty($name)){
		  if($extension === 'jpg' || $extension === 'jpeg' || $extension === 'png' || $extension === 'gif'){
			 $move = move_uploaded_file($tmp_name,$path);
			 if($move == true){
				$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
			    $update_pro = "UPDATE cv_user_table SET profilepicture = '$path' where user_id = $session";
				$up = mysql_query($update_pro,$conn);
				if($up){
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}
			 }
		  }
	  }
  }
  ?>
</div>
<div class="col-sm-8">
<h4><?php
echo $_SESSION['username'].'  '.'<a href="#" title ="click to update your profile">profile</a>';
?></h4>
<div class="row">
<div class="col-sm-6" style="padding:5px;">
<fieldset>
<legend>info</legend>
<?php
echo '&nbsp;Username : '.$_SESSION['username'].'<br><br>';
$age = $_SESSION['age'];
if($age == 0){
	echo ' &nbsp;Age : <span style="color:blue;">unavailable.</span>'.'&nbsp;&nbsp;<br><br>';
}else{
	echo 'Age : '.$_SESSION['age'].'&nbsp; Years Old.<br><br>';
}
$gender =$_SESSION['gender'];
if($gender == ""){
	echo '<span color:black;>&nbsp;Gender</span> : <span style="color:blue;">unavailable.</span>&nbsp;&nbsp;<br><br>';
}else{
	echo 'Gender : '.$_SESSION['gender'];
}
?>
<button type="button" style="float:right;" id="edit" class="btn btn-success">edit</button>&nbsp;&nbsp;
</fieldset>
</div>
<div class="col-sm-6" style="padding:5px;">
<fieldset>
<legend>Contacts</legend>
<?php
echo '<span class="glyphicon glyphicon-earphone">  </span>&nbsp;Phone Number : '.'0'.$_SESSION['phone_number'].'.<br><br>';
echo '<span class="glyphicon glyphicon-envelope">  </span>&nbsp;Email : '.$_SESSION['email'].'.<br><br>';
echo '<button id="btnrow3" type="button" style="float:right;" class="btn btn-success">edit</button>&nbsp;&nbsp;';
?>
</fieldset>
</div>
</div>
<!------>
<div class="row">
<div class="col-sm-6" style="padding:5px;">
<fieldset>
<legend>Address</legend>
<?php
$country= $_SESSION['country'];
$city= $_SESSION['city'];
$address= $_SESSION['address'];
//country varification
if($country=""){
   	 $country="update your country <i class='fa fa-spinner fa-spin'></i>";
}else{
	$country=$_SESSION['country'];
}
//city varification
if( $city==""){
   	 $city="update your city <i class='fa fa-spinner fa-spin'></i>";
}else{
	$city=$_SESSION['city'];
}
//address varification
if($address==""){
   	 $address="update your address <i class='fa fa-spinner fa-spin'></i>";
}else{
	$address=$_SESSION['address'];
}
echo '&nbsp;Country : '.$country.'.<br><br>';
echo '&nbsp;city : '.$city.'.<br><br>';
echo '&nbsp;Address : '.$address.'.<br><br>';
echo '<button id="btnrow2" type="button" style="float:right;" class="btn btn-success">edit</button>&nbsp;&nbsp;';
?>
</fieldset>
</div>
<div class="col-sm-6" style="padding:5px;">
<fieldset>
<legend>about myself and my cv</legend>
<?php
$career = $_SESSION['career-course'];
if($career == ""){
	echo 'career course :  <span style="color:red;"> not updated</span><button id="career" type="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil">edit</span></button><br><br>';
}else{
	echo 'career course : <span style="color:blue">'.$career.'</span>.<button id="career" type="button" class="btn btn-link"><span class="glyphicon glyphicon-pencil">edit</span></button><br><br>';
}

$about = $_SESSION['about'];
if($about == ""){
	echo'
	<form role="form" class="form-group" action="account.php" method="POST">
	<lebal>About : </lebal>
	<input type="text" class="form-control" name="about" placeholder="EDIT ABOUT MY SELF">
	<input type="submit" class=" btn btn-primary form-control" name="submit" value="EDIT ">
	</form>
	';
	if(isset($_POST['submit'])){
		$about = htmlentities($_POST['about']);
		if(!empty($about)){
			$about = mysql_real_escape_string($about);
			$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
			    $update_pro = "UPDATE cv_user_table SET about = '$about' where user_id = $session";
				$up = mysql_query($update_pro,$conn);
				if($up){
					echo 'updated';
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}else{
					echo 'something went wrong try again';
				}
		}
		
		
	}
}else{
	echo '&nbsp;<b class="readonly">About my self</b>: <br> '.$_SESSION['about'].'.<br><br>';
}
$connect = mysql_connect("localhost","root","1995");
$data = mysql_select_db("cv_db");
$sel = "SELECT * FROM cv_table RIGHT OUTER JOIN cv_user_table ON cv_table.user_id = cv_user_table.user_id  WHERE cv_table.user_id=$session ORDER BY cv_upload_date DESC";
$query =mysql_query($sel,$connect);
if($query){
	$row=mysql_fetch_array($query,MYSQL_ASSOC);
	$rowcv =$row['cv'];
	$rowcv_date =$row['cv_upload_date'];
	if($rowcv == ""){
		echo'
	<form role="form" class="form-group" action="account.php" method="post" enctype="multipart/form-data">
	<lebal>Curriculum vitae : <span style="color:blue;">not available.</span></lebal>
	<input type="file" class="form-control" name="file" placeholder="choose cv file">
	<input type="submit" class=" btn btn-primary form-control" name="submit" value="upload CV ">
	</form>
	';

	 if(isset($_POST['submit'])){
	  $name = htmlentities($_FILES['file']['name']);
	  $tmp_name = htmlentities($_FILES['file']['tmp_name']);
	  $type = htmlentities($_FILES['file']['type']);

	  $extension = strtolower(substr($name,strpos($name, ' ')+1));
	  $path = 'cvfiles/'.$name;
	  if(!empty($name)){
		  if($extension === 'cv.docx' || $extension === 'cv.rtf' || $extension === 'cv.doc' || $extension === 'cv.docm'){
			  echo $extension;
			 $move = move_uploaded_file($tmp_name,$path);
			 if($move == true){
				$conn = mysql_connect('localhost','root','1995');
			    $db = mysql_select_db('cv_db');
				$insert = mysql_query("INSERT into cv_table (user_id,cv) VALUES ('$session','$path')");
				$insert = mysql_query("UPDATE cv_user_table set cv_user = '$path' WHERE user_id=$session");
				if($insert){
					echo '<meta http-equiv="refresh" content="1;url=account.php">';
				}
			 }
		  }else{
			  echo'save ur file as "example cv.docx or example cv.rtf "';
		  }
	  }
	}
	}else{
		echo 'Curriculum vitae : <span style="color:blue;">available.</span> ';
		$file = $rowcv;
		echo 'click to '."<a href='download.php? nama=".$file."'>download.</a> "."<button id='span' type='button' class='btn btn-link'><span class='glyphicon glyphicon-pencil'>edit</span></button><br><br>";
	}
}else{
	echo 'error ';
}

?>
</fieldset>
</div>
</div>
<!------>
</div>


</div>
<div class="col-sm-2">

</div>
</div>

</div>
</div>
</section>
<footer>
<div class="container-fluid">
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
</footer>


</body>
</html>