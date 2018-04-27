<?php
 session_start();
 //redirect to login page if not logged in yet
 if(!isset($_SESSION['u_id'])){
  header("Location: ./login.html?please_log_in");
  exit();
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


  <body>
    <header>
    <h1> LOGO</h1>

    </header>
  <main>
    <table>
    <form>

		<tr>
			<label> Is there a specific course you are looking for? </label><br>
			<input type="text"><br><br>
		</tr>

		<tr>
			<td><input type="button" value="Look for a Group" style="margin-center:240%;" onclick="window.location.href='Find SG.html'"> </td>
		</tr>

    </form>
    </table>
    </main>
    </body>
</html>