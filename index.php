<?php include 'header.php';?>



<br/>
<br/>
<br/>

<?php
if(isset($_SESSION['id'])){
	echo $_SESSION['id'];
}
else{
	echo 'you"re not logged in';
}
?>



<br><br>
	
</body>
</html>