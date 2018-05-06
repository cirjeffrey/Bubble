<?php
 session_start();
 $username = $_GET['username'];
 
 include('includes/dbh.inc.php');
 //redirect to login page if not logged in yet
 if(!isset($_SESSION['u_id'])){
  header("Location: ./login.html?please_log_in");
  exit();
 }
?>

<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="viewprofile.css">
 <link rel="stylesheet" type="text/css" href="navigator.css">
</head>
<body>
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
<div class="card">
	
	<img src="https://i.imgur.com/q9lARFU.jpg" alt="profile pic" class="profile-img" height="200px" width="200px"> 
	
    <?php
        echo "<h1>$username</h1>"
    ?>
	
    <?php 
	$select = mysqli_query($db_connection, "SELECT userMajor FROM buser WHERE idUsername='".$username."';");
	$row = mysqli_fetch_assoc($select);
	if($select)
	{
		echo "<div><p> Major: ".$row['userMajor']."</p></div>";
	}
    ?>

</div>

</body>
</html>


