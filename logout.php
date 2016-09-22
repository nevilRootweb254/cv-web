<?php
session_start();
session_destroy();
$expirytime =time()-60*60*72;
setcookie ("id",'',$expiry_time,"","","",TRUE);
$_redirect = 'login.php';
if(session_destroy){
	header('location:'.$_redirect);
}else{
	header('location:'.$_redirect);
}
?>