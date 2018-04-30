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
    <title>Made with Thimble</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
	table{ border: 2px solid black;}
	th, td{ padding: 5px;}
  </style>
  
  <body>
    <header>
    <h1> LOGO</h1> 
    </header>
	
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
