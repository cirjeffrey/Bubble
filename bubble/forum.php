<?php	
	include ('content_function.php');
	
?>

<html>
<head><title>Welcome to the Bubbles Bulletin Board</title></head>
<body>

	<div><h1><a href="/bubble/forum.php"> Bubbles Bulletin Board </a></h1></div>
		<div>
			<?php display_topics();?>
		</div>
	</div>
	
	<?php
		#check if user is logged in
		#if(isset($_SESSION['username']))
		#{
			echo "<div><p><a href='newtopic.php?'> add a new topic </a></p></div>";
		#}
	?>
		

</body>

</html>