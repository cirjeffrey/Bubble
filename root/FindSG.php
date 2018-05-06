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
    <link rel="stylesheet" href="table.css" type="text/css" />
		<link rel="stylesheet" href="navigator.css" type="text/css" />
  </head>
  
  
  <body>
    <header>
    <h1> LOGO</h1> 
    </header>

		<!--Copy this into index, create, find, forum, and maybe profile-->
<ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="forum.php">Bulletin Board</a></li>
        <li><a href="FindSG.php">Find Group</a></li>
        <li><a href="#editGroup">Edit My Group</a></li>
        <li><a href="#about">About</a></li>
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
			<input type="text" placeholder="Search..." name = "criteria"> <button type = "submit" name = "submit">Search</button>
		</form>
	</div>
    <table>
    <!--<form action = "includes/join.inc.php" method = "POST">-->
			
		<tr>
			<th> Class </th>
			<th> Creator </th>
			<th> Participants </th>
		</tr>
		
		<?php

			//Display non full groups listed.
		
			include "includes/sc.inc.php";
			
		?>
	
		
		
		
		
		<th>
			<th align="center"> Didn't find what you were looking for? </th>			
		</th>
		
		<tr>
			<td><input type="button" value="Create a Group" style="margin-left:240%;" onclick="window.location.href='Create.php'"> </td> 
		</tr>

		
    <!--</form>-->
    </table>
    </main>
    </body>
</html>
