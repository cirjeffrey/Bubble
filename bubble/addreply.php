<?php
	#session_start();
	
	include('dbconn.php');
	$comment = nl2br(addslashes($_POST['comment']));
	$tid = $_GET['tid'];

	$insert = mysqli_query($con, "INSERT INTO replies (`topic_id`, `author`, `comment`, `date_posted`)
										VALUES ('".$tid."','another_test', '".$comment."', NOW());");
	$update = mysqli_query($con, "UPDATE topics SET replies = replies+1 where topic_id = '".$tid."';");									
	
	if($insert && $update)
	{
		header("Location: /bubble/readtopic.php?tid=".$tid."");
	}

?>