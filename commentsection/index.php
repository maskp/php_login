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
	<video width="853" height="480" controls>
		<source src="best.mp4" type="video/mp4">
		Your browser doesn't support the video tag
	</video>
	<?php
	echo "<form method='post' action='".setComments($conn)."'>
		<input type='hidden' name='uid' value='Anonymous'/>
		<input type='hidden' name='date' value='".date('m-d-Y H:i:s')."'/>
		<textarea name='message'></textarea><br>
		<input type='submit' name ='commentsubmit' value='comments'/>
	</form>";
	getComments($conn);
	?>
</body>
</html>