<?php

define('DB_NAME', 'example');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
	die('Could not connect: '.mysql_error());
}

$db_selected = mysqli_select_db($link,DB_NAME);

if(!$db_selected){
	die('Cannot use: '.DB_NAME. ': '.mysqli_error($link));
}

$value1 = $_POST['firstname'];
$value2 = $_POST['lastname'];
$value3 = $_POST['Email'];
$value4 = $_POST['addl1'];
$value5 = $_POST['addl2'];
$value6 = $_POST['addl3'];
$value7 = $_POST['pin'];
$value8 = $_POST['Comments'];

$value = $value1."','".$value2."','".$value3."','".$value4."','".$value5."','".$value6."','".$value7."','".$value8;

$sql = "INSERT INTO hello (firstname,lastname,email,addl1,addl2,addl3,pin,comments) VALUES ('" . $value. "')";

if(!mysqli_query($link,$sql)){
	die('Error: '.mysqli_error($link));
}

mysqli_close($link);

header("Location: cart.php");
exit(1);
?>