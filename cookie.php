<?php
$conn = mysql_connect('localhost','root','1995');
if(!$conn ){
	echo 'not connected';
}else{
	mysql_select_db('art_gallary');
	if(isset($_POST['login'])){
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
	if(!empty($password) || !empty($username)){
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		$query = "SELECT * FROM art_gallary_table WHERE username ='$username' AND password = '$password'";
		$select = mysql_query($query,$conn) or die('something went wrong please try again');
		$arr = mysql_fetch_array($select,MYSQL_ASSOC);
			if($arr['username'] === $username AND $arr['password'] === $password){
				echo $arr['user_id'];
			}else{
				echo'forgotten password';
			}
	}else{
		echo 'fill in all fields';
	}
	}else{
		echo 'fill in all fields';
	}
}
?>
<form action="cookie.php" method="POST">
<input type="text" name="username" placeholder="username">
<input type="password" name="password" placeholder="password">
<input type="submit" name="login" value="submit">

</form>