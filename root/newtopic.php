<?php	
	include ('content_function.php');
?>

<html>
<head><title>Welcome to the Bubbles Bulletin Board</title></head>

<body>
	<div><h1><a href="./forum.php"> Bubbles Bulletin Board </a></h1></div>
		
		<div>
			<?php 
				#check for user to be logged in
				echo "<form action='addnewtopic.php?' method='POST'>
						<p>Title: </p>
						<input type='text' id='topic' name='topic' size='95' />
						<p>Content: </p>
						<textarea cols='110' rows='10' id='content' name='content'></textarea><br />
						<input type='submit' value='add new post' /></form>";
						
				#else if user not loggin in
				#send to login or register.
			?>
		</div>
</div>
</body>

</html>