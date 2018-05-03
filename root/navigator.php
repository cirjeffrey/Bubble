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
    <title>navigator</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <!-- Please move all styling to style.css 
    <style>
        ul{
            list-style-type:none;
            margin:0;
            padding:0;
            overflow:hidden;
            background-color:#007acc;
        }
        li{
            float:left;
        }
        li a, .dropbtn
        {
            display:inline-block;
            color:white;
            text-align:center;
            padding:10px 15px;
            text-decoration:none;
        }
        li a:hover, .dropdown:hover, .dropbtn
        {
            background-color:#005c99;
        }
        .dropdown
        {
            display:inline-block;
        }
        .dropdown-content
        {
            display:none;
            position:absolute;
            background-color:#005c99;
            min-width:140px;
            box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
            right:0;
        }
        .dropdown-content a
        {
            color:white;
            padding:12px 16px;
            text-decoration:none;
            display:block;
        }
        .dropdown-content a:hover {background-color: #3399ff}
        .dropdown:hover .dropdown-content
        {
            display:block;
        }
    </style>
    ______________________________________-->
</head>
<body>
<!--Copy this into index, create, find, forum, and maybe profile-->
<ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="forum.php">Bulletin Board</a></li>
        <li><a href="FindSG.php">Find Group</a></li>
        <li><a href="#editGroup">Edit My Group</a></li>
        <li><a href="#about">About</a></li>
        <div style="float:right" class="dropdown">
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
<h3></h3>
<p></p>

</body>
</html>
