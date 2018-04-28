<?php	
	session_start();
	include ('content_function.php');
	
	if(!isset($_SESSION['u_id'])){
	header("Location: ./login.html?please_log_in");
	exit();
 }
	
?>

<html>
<head><title>Welcome to the Bubbles Bulletin Board</title></head>
<body>

	<div><h1><a href="./forum.php"> Bubbles Bulletin Board </a></h1></div>
		<div>
			<?php display_topics();?>
		</div>
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