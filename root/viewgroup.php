<?php
 session_start();
 $group = $_GET['gid'];
 //redirect to login page if not logged in yet
 if(!isset($_SESSION['u_id'])){
  header("Location: ./login.html?please_log_in");
  exit();
 }
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="viewgroup.css">
    <link rel="stylesheet" type="text/css" href="navigator.css">
</head>
<body>

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
<div>
        <?php
            include_once "includes/dbh.inc.php";
			$sql = mysqli_query($db_connection, "SELECT * FROM bgroup WHERE idGroup =".$group."");
			$row = mysqli_fetch_assoc($sql);
			
			//converting time and date 
			//into easier to read time and date
			$meetTime = $row['meetingDateTime'];	
			$time_in_12_hour_format = date("g:i a", strtotime($meetTime));
			$meet_date = date("m-d-y", strtotime($meetTime));
			$participants = mysqli_query($db_connection, "SELECT idUsername FROM bjoin WHERE idGroup =".$group."");
			//==============
			
			echo "<h1 class='title'>".$row['groupSubjectClass']."</h1>";
			
			echo nl2br("<div class='group-info' id='card2'>
					<h1>Group Info</h1>
					<b>Group Creator: </b>".$row['groupCreator']."\n 
					<b>Group Major: </b>".$row['groupMajor']."\n
					<b>Number of Participants: </b>".$row['groupNumParticipants']."\n
					<b>Description: </b>".$row['groupDescription']."\n
					<b>Meet Time: </b> $time_in_12_hour_format\n
					<b>Meet Date: </b> $meet_date\n </div>");
			
			echo "<div class='participants' id='card1'> <h2>Participants</h2>";
			if (mysqli_num_rows($participants) != 0)
			{	
				echo "<div>";
				while($result = mysqli_fetch_assoc($participants))
				{
					echo nl2br($result['idUsername']);
				}
				echo "<form action = 'includes/join.inc.php' method = 'POST'><button name = 'join' type = 'submit' value = '$group' id='button'>JOIN</button></form>";

				echo "</div>";
				
			}
			echo "</div>";
			?>
</div>

</body>
</html>

