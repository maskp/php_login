
<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Title of the document</title>
	<link rel="stylesheet" href="styles.css"/>
</head>
<body>

<header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>

			<?php 
			if(isset($_SESSION['id'])){
				//echo $_SESSION['id'];
				echo "<form action='includes/includes.logout.php' >
					<button >Log out</button>
				</form>";
			}
			else{
			echo "<form action='includes/includes.login.php' method='post'>
				<input type='text' name='uid' placeholder='userid'/><br/>
				<input type='password' name='pwd' placeholder='password'/><br/>
				<input type='submit' value='login'/>

					</form>";
			}

			?>


			<li><a href="signup.php">Signup</a></li>
		</ul>
	</nav>
</header>