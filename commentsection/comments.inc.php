<?php 

function setComments($conn){
	if(isset($_POST['commentsubmit'])){
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "insert into comments (uid,date,message) values ('$uid','$date','$message')";
		$result = mysqli_query($conn,$sql);
		//$row = mysqli_fetch_assoc($result);
	}

}

function editComments($conn){
	if(isset($_POST['editsubmit'])){
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql = "update comments set message='$message' where cid='$cid'";
		$result = mysqli_query($conn,$sql);
		//$row = mysqli_fetch_assoc($result);
		header("Location: index.php");
	}

}




function getComments($conn){
	$sql = 'select * from comments';
	$result = mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($result)){
		echo "<div class='comment-box'><p>";
		echo nl2br($row['message']);
		echo $row['uid'].'<br>';
		echo $row['date'];
		echo "</p>
		<form class='edit-form' method='post' action='editcomment.php'>
			<input type='hidden' name='cid' value='".$row['cid']."'/>
			<input type='hidden' name='uid' value='".$row['uid']."'/>
			<input type='hidden' name='date' value='".$row['date']."'/>
			<input type='hidden' name='message' value='".$row['message']."'/>
			<input type='submit' name='edit' value='edit'/>

		</form>


		</div>";
	  }
}