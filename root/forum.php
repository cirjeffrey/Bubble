<?php
    session_start();
    include ('content_function.php');
    
    if(!isset($_SESSION['u_id'])){
        header("Location: ./login.html?please_log_in");
        exit();
    }
    
    ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="forum.css" type="text/css" />
<link rel="stylesheet" href="navigator.css" type="text/css" />
<title>Bulletin Board</title>
</head>
<body>

<header>
    <img src="header.png" height="170px">
</header>

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



<header><h1>Bubbles Bulletin Board</h1></header>
<div>
<?php display_topics();?>
</div>

<?php
    $uid = $_SESSION['u_id'];
    if(isset($_SESSION['u_id']))
    {
        echo "<div><h4><a href='newtopic.php?'> Add a New Topic </a></h4></div>";
    }
    ?>

</body>

</html>
