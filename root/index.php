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
    <title>Homepage</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="homepage.css" type="text/css" />
    <!--<meta name="viewport" content="width=device-width, initial-scale=1"/> Commented this out and nothing changes, if not needed: delete-->
    
   
  </head>
  <body>
    <header>
      <h1> Welcome</h1>
    </header>
    
    

    <main>
      <form>
        <input type="button" value="Find Study Group" onclick="window.location.href='FindSG.php'" />
        
        <input type="button" value="Create Study Group" onclick="window.location.href='Create.php'" />
        
        <input type="button" value="View Forum" onclick="window.location.href='forum.php'" />
      
      
      </form>
    
    
    </main>
  </body>
</html>