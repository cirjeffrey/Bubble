<?php
	//start session
	session_start();
	//store session variables into local variables
	$author = $_SESSION['u_id']; // username
	
	
	include ('includes/dbh.inc.php');
	
	$topic = addslashes($_POST['topic']);
	$content = nl2br(addslashes($_POST['content']));
	
	$insert = mysqli_query($db_connection, "INSERT INTO topics (`author`,`title`, `content`, `date_posted`) 
								  VALUES ('$author','".$topic."', '".$content."', NOW());");
								  
	if ($insert) {
		header("Location: ./forum.php?");
	}
?>