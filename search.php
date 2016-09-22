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
	<link rel="stylesheet" href="css/main.css">
	<!--linking font awsome icon-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="art.jpg" rel="icon" type="image/png">
    <!--<link rel="stylesheet" href="main.css" media="screen" title="no title" charset="utf-8">-->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery.js"></script>
    <script src="jqscript.js"></script>
    <title>(results of : <?php echo $_GET['search'];?>)CURICULUM VITAE PAGE</title>

  </head>
  <body onload="return ">
  <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background:#294292;color:white;border-radius:0px;">
  <div class="container-fluid">
  <ul class="nav navbar-nav">
    <li><a href="index.php">CURICULUM VITAE PAGE</a></li>
    <li><a href="account.php">my profile</a></li>
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
      <li><?php
if(isset($_SESSION['id'])){
	$topNavFeed = '<a href="logout.php"><span class="glyphicon glyphicon-off"> LOGOUT</span></a>';
	echo $topNavFeed;
}else{
	$topNavFeed = '<a href="index.php"><span class="glyphicon glyphicon-user"> LOGIN</span></a>';
	echo $topNavFeed;
}
?></li>
    </ul>
    </span>
  </nav>
<div class="container-fluid">
<div class="row"  STYLE="height:600px;">
<div class="col-sm-2"></div>
<div class="col-sm-8">

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<?php
$conn = mysql_connect('localhost','root','1995');
$db = mysql_select_db('cv_db');
if(isset($_GET['search'])){
	$search = htmlentities($_GET['search']);
	if(!empty($search)){
	$search = mysql_real_escape_string($search);
	$seresult = mysql_query("SELECT *  FROM cv_user_table WHERE career LIKE '%$search%' order by user_id desc");
	if($seresult){
				while($snow = mysql_fetch_array($seresult)){
					$user = $snow['user_id'];
					$snowimage = $snow['profilepicture'];
					$firstname = $snow['firstname'];
					$secondname = $snow['lastname'];
					$snowuser  = $snow['username'];
					$snowuser = strtoupper($snowuser);
					$snowage = $snow['age'];
					$description = $snow['about'];
					$phone_number = $snow['phone_number'];
					$email = $snow['email'];
					$career = $snow['career'];
					$cv = $snow['cv_user'];
					if($snowage == "0"){
						$snowage = 'Not updated by user';
					}else{
						$snowage = $snowage.' Years Old';
						
					}
					if($description == ""){
						$description = 'Not updated by user';
					}else{
						$description = $description;
					}
					if($career == ""){
						$career = 'Not updated by user';
					}else{
						$career = $career;
					}
					if($cv == ""){
						$answer = 'Not updated by user';
					}else{
						$answer = 'available';
						$download = 'click to '."<a href='download.php? nama=".$cv."'>download my cv.</a> ";
					}
					if($snowimage == ""){
					$snowimage = 'images/default.jpg';
				}else{
					$snowimage = $snowimage;
				}
					echo
					'<div class="row" style="background:white;padding:10px;">'.
					'<div class="col-sm-4">'.
					'<img src="'.$snowimage.'" width="150" height="150" class="img-circle" title="About:'.$description.'">'.
					'</div>'.
					'<div class="col-sm-8">'.
				    '<h4><b>'.$snowuser.'\'s </b>profile.</h4>'.
					'<hr>'.
					'<p>'.'<a href="#">'.$snowuser.'</a>'.'</p>'.
					'<b>Age : </b><span style="color:blue;">'.$snowage.'.</span><br>'.
					'<b>phone_number : </b><span style="color:blue;">0'.$phone_number.'.</span><br>'.
					'<b>Email : </b><span style="color:blue;"><a href="mailto:'.$email.'">'.$email.'</a>.</span><br>'.
					'<b>Career : </b><span style="color:blue;">'.$career.'.</span><br>'.
					'<b>About : </b><span style="color:blue;">'.$description.'.</span><br>'.
					'<b>Cv : </b><span style="color:blue;">'.$answer.'</span><br>'.$download.''.
					'<h4 style="float:right;"><a href="search.php? more='.$user.'">more</a></h4>'.
					'</div>'.
					'</div>'.
					'<hr>'
					;
				}

			}
    }else{
       echo 'no result';
    }
}
?>
<?php
//more info
if(isset($_GET['more'])){
	$more = $_GET['more'];
    $conn = mysql_connect('localhost','root','1995');
    $db = mysql_select_db('cv_db');
//selection from db
	$seresult = mysql_query("SELECT *  FROM cv_user_table WHERE user_id = '$more' ");
	if($seresult){
				if($now = mysql_fetch_array($seresult)){
					$user = $now['user_id'];
					$nowimage = $now['profilepicture'];
					$firstname = $now['firstname'];
					$secondname = $now['secondname'];
					$nowuser  = $now['username'];
					$nowuser = strtoupper($nowuser);
					$age = $now['age'];
					$gender = $now['gender'];
					$country = $now['country'];
					$city = $now['city'];
					$description = $now['about'];
					$phone_number = $now['phone_number'];
					$email = $now['email'];
					$careers = $now['career'];
					$cv = $now['cv_user'];
					if($nowage == "0"){
						$nowage = 'Not updated by user';
					}else{
						$nowage = $nowage.' Years Old';
						
					}
					if($description == ""){
						$description = 'Not updated by user';
					}else{
						$description = $description;
					}
					if($careers == ""){
						$careers = 'Not updated by user';
					}else{
						$careers = $careers;
					}
					if($cv == ""){
						$answers = 'Not updated by user';
					}else{
						$answers = 'available';
						$downloads = 'click to '."<a href='download.php? nama=".$cv."'>download my cv for more info.</a> ";
					}
					if($nowimage == ""){
					$nowimage = 'images/default.jpg';
				}else{
					$nowimage = $nowimage;
				}
					echo
					'<div class="row" style="background:white;padding:10px;">'.
					'<div class="col-sm-4">'.
					'<img src="'.$nowimage.'" width="150" height="150" class="img-circle" title="About:'.$description.'"><br><br>'.
					'First name : '.$firstname.'.<br>'.
					'Second name : '.$secondname.'.<br>'.
					'<h4> Username : '.'<a href="#">'.$nowuser.'</a>'.'</h4>'.
					'</div>'.
					'<div class="col-sm-8">'.
					
				    '<p><b>'.$nowuser.'\'s </b>profile.</p>'.
					'<hr>'.
					'<p>'.'<a href="#">'.$nowuser.'</a>'.'<p/>'.
					'<b>Age : </b><span style="color:blue;">'.$age.'.</span><br>'.
					'<b>Gender : </b><span style="color:blue;">'.$gender.'.</span><br>'.
					'<b>Email : </b><span style="color:blue;"><a href="mailto:'.$email.'">'.$email.'</a>.</span><br>'.
					'<b>phone_number : </b><span style="color:blue;">0'.$phone_number.'.</span><br>'.
					'<b>Country : </b><span style="color:blue;">'.$country.'.</span><br>'.
					'<b>City : </b><span style="color:blue;">'.$city.'.</span><br>'.				
					'<b>Career : </b><span style="color:blue;">'.$careers.'.</span><br>'.
					'<b>About : </b><span style="color:blue;">'.$description.'.</span><br>'.
					'<b>Cv : </b><span style="color:blue;">'.$answers.'</span><br>'.$downloads.''.
					'</div>'.
					'</div>'.
					'<hr>'
					;
					
				}

			}
}
?>
</div>

<div class="col-sm-2"></div>
</div>
</div>
<div class="col-sm-2"></div>
</div>
</div>
<!---footer begines from here buddy---->
<footer id="footer" style="padding:40px;">
 <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div class="footer-contant">
                                <h3 style="color:white;">Follow us , Get In Touch.</h3>
                                <div class="social-icon" style="color:white;">
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
                                <div class="copyright" style="margin-top:10px;">
                               		<?php
										echo '<h5 style="color:white;">copyright &copy;from 25-7-2016 to  '.' '.date('d-m-Y').' .</h5>';
									?>
                                </div>
                            </div>
                        </div>
                    </div><!-- col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
</footer>
  </body>
  </html>