<?php
	session_start();
	
	include('includes/dbh.inc.php');
	$comment = nl2br(addslashes($_POST['comment']));
	$tid = $_GET['tid'];
	$author = $_SESSION['u_id'];

	$insert = mysqli_query($db_connection, "INSERT INTO replies (`topic_id`, `author`, `comment`, `date_posted`)
										VALUES ('".$tid."','$author', '".$comment."', NOW());");
	$update = mysqli_query($db_connection, "UPDATE topics SET replies = replies+1 where topic_id = '".$tid."';");									
	
	if($insert && $update)
	{
		header("Location: ./readtopic.php?tid=".$tid."");
	}

?>