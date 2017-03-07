<?php include 'header.php';?>


<?php

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url,'error=empty')!==false){
	echo "please don't leave empty field";
}
else if(strpos($url,'error=username')){
	echo "That username has already been taken by someone else!!Please try another ";
}
if(isset($_SESSION['id'])){
	echo $_SESSION['id'];
}
else{
		echo "<form action='includes/includes.signup.php' method='post'>
		
		<input type='text' name='first' placeholder='firstname'/><br>
		<input type='text' name='last'placeholder='lastname'/><br/>
		<input type='text' name='uid' placeholder='userid'/><br/>
		<input type='text' name='pwd' paceholder='password'/><br/>
		<input type='submit' value='sign up'/>

	</form>";
}

?>



	


</body>
</html>