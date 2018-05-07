<?php
 session_start();
include_once "includes/dbh.inc.php";
 //redirect to login page if not logged in yet
 if(!isset($_SESSION['u_id'])){
  header("Location: ./login.html?please_log_in");
  exit();
 }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="navigator.css">
</head>
<body>

<h2 style="text-align:Left">&nbsp&nbsp&nbspUser Profile
    <!--Copy this into index, create, find, forum, and maybe profile-->
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
<!--____________________________________________________________-->
</h2>
<div class="card">
    <?php
        $uid = $_SESSION['u_id'];
        echo "<h1>$uid</h1>";
		
		
		$sql = "SELECT * FROM buser WHERE idUsername='$uid'";
		$select2 = mysqli_query($db_connection, $sql);
		
		while($row = mysqli_fetch_assoc($select2))
		{
			echo "<p><h3>Major: ".$row['userMajor']."</h3><h3>Member Since: ".$row['user_create_time']."</h3></p>";
			
		}
        
    ?>
    <div>
        <p><h2>Groups Joined:</h2></p>
        <?php

            $uid = $_SESSION['u_id'];
            $sql = "SELECT * FROM bgroup INNER JOIN bjoin WHERE bjoin.idUsername = '$uid' AND bjoin.idGroup = bgroup.idGroup ORDER BY join_time DESC";
            $select = mysqli_query($db_connection, $sql);
            while($row = mysqli_fetch_assoc($select)){
                echo "<p><h3>".$row['groupSubjectClass']."<h3><form action = 'viewgroup.php?gid=".$row['idGroup']."' method = 'POST'><td> <button name = 'join' type = 'submit' value = '".$row['idGroup']."'>View</button> </td></form> <button>Quit&nbspGroup</button></p>";
            }
            
        ?>
        
        

    </div>

</div>

</body>
</html>

