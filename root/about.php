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
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>About Us</title>
        <link rel="stylesheet" href="style1.css" type="text/css" />
        <link rel="stylesheet" href="navigator.css" type="text/css" />
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
        
        <h1>About Us</h1>
        <p>
        We are a 6 people group called LFG-362, we aim to solve your study problems!
        </p>
    </body>
</html>
