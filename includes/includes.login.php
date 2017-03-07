<?php
session_start();
?>

<?php

include '../dbh.php';

$uid = $_POST['uid'];
$password = $_POST['pwd'];

$sql = "select * from users where uid = '$uid'";
//queries the db and retrives and compare
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$hash_pwd = $row['pwd'];
$hash = password_verify($password,$hash_pwd);

if($hash == 0){
	header("Location: ../index.php?error=empty");
	exit();
}
else{

	$sql = "select * from users where uid='$uid' and pwd='$hash_pwd'";

	$result = mysqli_query($conn,$sql);

if(!$row = mysqli_fetch_assoc($result)){
	echo "you messed up somewhere!!";
}
else{
	$_SESSION['id'] = $row['id'];
}


//redirection
header("Location: ../index.php");}
?>