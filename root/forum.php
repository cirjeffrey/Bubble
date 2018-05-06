<?php	
	session_start();
	include ('content_function.php');
	
	if(!isset($_SESSION['u_id'])){
	header("Location: ./login.html?please_log_in");
	exit();
 }
	
?>

<html>
<head>
	<link rel="stylesheet" href="forum.css" type="text/css" />
	<title>Bulletin Board</title></head>
<body>

	<header><h1><a href="./forum.php"> Bubbles Bulletin Board </a></h1></header>
		<div>
			<?php display_topics();?>
		</div>

	
	<?php
		$uid = $_SESSION['u_id'];
		if(isset($_SESSION['u_id']))
		{
			echo "<div><p><a href='newtopic.php?'> add a new topic </a></p></div>";
		}
	?>
	
		

</body>

</html>