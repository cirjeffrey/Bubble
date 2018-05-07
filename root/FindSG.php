<?php
 session_start();
 //redirect to login page if not logged in yet
 if(!isset($_SESSION['u_id'])){
  header("Location: ./login.html?please_log_in");
  exit();
 }

 if(!isset($_POST['criteria'])){
	$_POST['criteria'] = "empty";
 }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Groups</title>
    <link rel="stylesheet" href="forum.css" type="text/css" />
	<link rel="stylesheet" href="style1.css">
		<link rel="stylesheet" href="navigator.css" type="text/css" />
  </head>
  
  
  <body>
    <header>
    <img src="header.png" height="170px">
    </header>

		<!--Copy this into index, create, find, forum, and maybe profile-->
<ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="forum.php">Bulletin Board</a></li>
        <li><a href="FindSG.php">Find Group</a></li>
        <li><a href="#editGroup">Edit My Group</a></li>
        <li><a href="about.php">About</a></li>
        <div class="dropdown">
            <?php
            $uid = $_SESSION['u_id'];
            echo "<a href='profile.php' class='dropbtn'>$uid</a>";
            ?>
            <div class="dropdown-content">
                <a href="profile.php">My Profile</a>
                <a href="#editProfile">Edit My Profile</a>
                <a href="includes/logout.inc.php?signout=true">Log out</a>
            </div>
        </div>
    </ul>
<!--____________________________________________________________-->
	
  <main>  
	<div class="topnav">
		<form action = "FindSG.php" method = "POST">
			<!-- add some text here like search by class/major/creator -->
			<h2> Search by Class/Major/Creator </h2>
			<input type="text" placeholder="Search..." name = "criteria"> <button type = "submit" name = "submit">Search</button>
		</form>
	</div>
	
    <table class = "searchTable">
    <!--<form action = "includes/join.inc.php" method = "POST">-->
			
		<tr>
			<th> Class </th>
			<th> Creator </th>
			<th> Participants </th>
			<th> View </th>
			<th> Join </th>
		</tr>
		
		<?php
			//Display non full groups listed.
			include "includes/sc.inc.php";
			
		?>
	</table>
		
    <!--</form>-->
   		<h4> Didn't find what you were looking for? </h4>
		
		<input type="button" value="Create a Group" onclick="window.location.href='Create.php'"> 
		
    </main>
    </body>
</html>
