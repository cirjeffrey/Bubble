<?php	
	session_start();
	include ('content_function.php');
	addview($_GET['tid']);
	
?>

<html>
<head><title>Welcome to the Bubbles Bulletin Board</title></head>

<body>
	<div><h1><a href="./forum.php"> Bubbles Bulletin Board </a></h1></div>
	
	<div>
	<?php
		#if user is not logged in
			#echo log in first
		
	?>
	</div>
	<div>
		<?php
			displaytopic($_GET['tid']);
		?>
	</div>
		<div>
	<?php 
			
		#if user is logged in
		replytopost($_GET['tid']);
		
	?>
	</div>
</body>

</html>