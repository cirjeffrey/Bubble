<?php	
	session_start();
	include ('content_function.php');
	addview($_GET['tid']);
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="forum.css" type="text/css" />
	<title>Welcome to the Bubbles Bulletin Board</title></head>
<link rel="stylesheet" href="navigator.css" type="text/css" />
<body>

<header>
	<img src="header.png" height="170px">
</header>

<ul>
	<li><a class="active" href="index.php">Home</a></li>
	<li><a href="forum.php">Bulletin Board</a></li>
	<li><a href="FindSG.php">Find Group</a></li>
	<li><a href="about.php">About</a></li>
<div class="dropdown">
<?php
    $uid = $_SESSION['u_id'];
    echo "<a href='profile.php' class='dropbtn'>$uid</a>";
    ?>
<div class="dropdown-content">
	<a href="profile.php">My Profile</a>
	<a href="includes/logout.inc.php?signout=true">Log out</a>
</div>
</div>
</ul>

	<div><h1>Bubbles Bulletin Board</h1></div>
	
	<div>
	<?php
		#if user is not logged in
			#echo log in first
		if(!isset($_SESSION['u_id']))
				{
					header("Location: ./login.html?please_log_in");
					exit();
				}
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
		if(isset($_SESSION['u_id']))
		{
			replytopost($_GET['tid']);
		}
	?>
	</div>
</body>
</html>
