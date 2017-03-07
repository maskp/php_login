<?php 
	date_default_timezone_set('America/New_York');
	include 'comments.inc.php';
	include 'dbh.inc.php';

?>



<!DOCTYPE html>
<html>
<head>
	<title>comment ndex</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	
	<?php

	$cid = $_POST['cid'];
	$uid = $_POST['uid'];
	$date = $_POST['date'];
	$message = $_POST['message'];

	echo "<form method='post' action='".editComments($conn)."'>
			<input type='hidden' name='cid' value='".$_POST['cid']."'/>
			<input type='hidden' name='uid' value='".$_POST['uid']."'/>
			<input type='hidden' name='date' value='".$_POST['date']."'/>
			<textarea name='message'>".$message."</textarea><br>
			<input type='submit' name ='editsubmit' value='comments'/>
		</form>";
	
	?>
</body>
</html>