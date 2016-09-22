<?php
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "1995";
$conn = mysql_connect($server,$username,$password) or die('unable to connect');
$create = "CREATE DATABASE cv_db";
$created = mysql_query($create,$conn) or die('error creating the table');
$data = mysql_select_db('cv_db') or die('error connecting');
$select = "CREATE TABLE cv_user_table(
user_id INT PRIMARY KEY AUTO_INCREMENT ,
firstname VARCHAR(15) NOT NULL,
secondname VARCHAR(15) NOT NULL,
username VARCHAR(25) NOT NULL UNIQUE KEY,
password VARCHAR(255) NOT NULL UNIQUE KEY,
country VARCHAR(25) NOT NULL,
city VARCHAR(25) NOT NULL, 
address VARCHAR(25) NOT NULL, 
phone_number INT(25) NOT NULL UNIQUE KEY, 
email VARCHAR(40) NOT NULL UNIQUE KEY,
profilepicture VARCHAR(500) NOT NULL,
career-course varchar(100) NOT NULL,
cv_user VARCHAR(3000) NOT NULL,
gender CHAR(15) NOT NULL ,
age INT(15) NOT NULL , 
about VARCHAR(3000) NOT NULL,
sighn_up_date TIMESTAMP
)";
$table = mysql_query($select,$conn);
if($table ==1){
	echo 'created table 1';
}


$com = "CREATE TABLE cv_table(
cv_id INT PRIMARY KEY AUTO_INCREMENT ,
user_id INT  NOT NULL ,
cv VARCHAR(1000) NOT NULL,
cv_upload_date TIMESTAMP
)";
$tablecom = mysql_query($com,$conn);
if($tablecom ==1){
	echo 'created table 3';
}
mysql_close($conn);

?>