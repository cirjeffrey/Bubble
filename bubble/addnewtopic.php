<?php
	#session_start();
	
	include ('dbconn.php');
	
	$topic = addslashes($_POST['topic']);
	$content = nl2br(addslashes($_POST['content']));
	
	$insert = mysqli_query($con, "INSERT INTO topics (`author`,`title`, `content`, `date_posted`) 
								  VALUES ('test','".$topic."', '".$content."', NOW());");
								  
	if ($insert) {
		header("Location: /bubble/forum.php?");
	}
?>