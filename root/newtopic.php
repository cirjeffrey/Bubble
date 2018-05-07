<?php	
	session_start();
	include ('content_function.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="forum.css" type="text/css" />
	<link rel="stylesheet" href="navigator.css" type="text/css" />
	<title>Welcome to the Bubbles Bulletin Board</title>
</head>

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



	<div class = "bubbleTitle"><h1>Add a New Topic</h1></div>
		
		<div>
			<?php 
				if(!isset($_SESSION['u_id']))
				{
					header("Location: ./login.html?please_log_in");
					exit();
				}
				else
				{
					echo "<form action='addnewtopic.php?' method='POST'>
						
						<table class='postTable'>
							<tr>
								<th>Title: </th>
							</tr>
							<tr>
								<td><input type='text' id='topic' name='topic' size='95' required/><td>
							</tr>
							
							<tr>
								<th>Content: </th>
							</tr>
							<tr>
								<td><textarea cols='97' rows='10' id='content' name='content' required></textarea><td>
							</tr>
							
							<tr>
								<td><input type='submit' value='Add New Post' /></td>
							</tr>
						</table>
						</form>";	
				}
				#else if user not loggin in
				#send to login or register.
				
			?>
		</div>
</div>
</body>

</html>

