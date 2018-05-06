<?php	
	session_start();
	include ('content_function.php');
	addview($_GET['tid']);
	
?>

<html>
<head>
	<link rel="stylesheet" href="forum.css" type="text/css" />
	<title>Welcome to the Bubbles Bulletin Board</title></head>

<body>
	<div><h1><a href="./forum.php"> Bubbles Bulletin Board </a></h1></div>
	<div>
	<?php
		displaytopic($_GET['tid']);
		echo "<div><p>All Replies(".countreplies($_GET['tid']).") </p></div>";
		dispreplies($_GET['tid']);
	?>
	</div>
	<div>
	<?php
		replylink($_GET['tid']);
	?>
	</div>
</div>
</body>
</html>