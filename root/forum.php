<?php	
	session_start();
	include ('content_function.php');
	
	if(!isset($_SESSION['u_id'])){
	header("Location: ./login.html?please_log_in");
	exit();
 }
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="forum.css" type="text/css" />
	<title>Bulletin Board</title>
</head>
<body>

	<header><h1><a href="./forum.php"> Bubbles Bulletin Board </a></h1></header>
		<div>
			<?php display_topics();?>
		</div>

	<?php
		$uid = $_SESSION['u_id'];
		if(isset($_SESSION['u_id']))
		{
			echo "<div><h4><a href='newtopic.php?'> Add a New Topic </a></h4></div>";
		}
	?>
	
</body>

</html>
