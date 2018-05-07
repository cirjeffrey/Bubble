<?php
 session_start();
 //redirect to login page if not logged in yet
 if(!isset($_SESSION['u_id'])){
  header("Location: ./login.html?pleaseLogIn");
  exit();
 }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Page</title>
    <meta charset="utf-8"/>
	<link rel="stylesheet" href="homepage.css" type="text/css">
<link rel="stylesheet" href="navigator.css" type="text/css" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1"/> Commented this out and nothing changes, if not needed: delete-->
<style>
ul{
    background-color:#ecdc9e;
}
</style>

  </head>
  <body>

<ul>
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

    <header>
      <h2> Welcome</h2>
    </header>

    <main>
      <form>
        <input type="button" value="Find Study Group" onclick="window.location.href='FindSG.php'" />
        <input type="button" value="Create Study Group" onclick="window.location.href='Create.php'" />
        <input type="button" value="View Forum" onclick="window.location.href='forum.php'" /> <br>
		<img src="homepage.png" height="200px">
	</form>
	  
		
    
    </main>
  </body>
</html>
