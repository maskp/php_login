<?php
session_start();
?>

<?php

include '../dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$password = $_POST['pwd'];

if(empty($first)){
	header('Location: ../signup.php?error=empty');
	exit();
}
else if(empty($last)){
	header('Location: ../signup.php?error=empty');
	exit();
}
else if(empty($uid)){
	header('Location: ../signup.php?error=empty');
	exit();
}
else if(empty($password)){
	header('Location: ../signup.php?error=empty');
	exit();
}
else{
	$sql = "select uid from users where uid ='$uid' ";
	$result= mysqli_query($conn,$sql);
	$uidcheck = mysqli_num_rows($result);
	if($uidcheck > 1){
		header("Location: ../signup.php?error=username");
	}
	else{
		$encrypted_password = password_hash($password,PASSWORD_DEFAULT);
		$sql = "insert into users (first,last,uid,pwd) values ('$first','$last','$uid','$encrypted_password')";

		$result = mysqli_query($conn,$sql);

		//redirection
		header("Location: ../index.php");
	}
	
}

	?>




