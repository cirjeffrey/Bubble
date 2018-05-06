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

	<title> View Group</title>
	<link rel="stylesheet" href="groupprofile.css">
	
</head>
<body>

<h2 class ="head" >&nbsp&nbsp&nbsp Group Page
    <div class="dropdown">
        <?php
            $uid = $_SESSION['u_id'];
            echo "<span>$uid</span>"
        ?>
        <div class="dropdown-content">
            <a href="FindSG.php">SearchGroup</a>
            <a href="Create.php">CreateNewGroup</a>
            <a href="includes/logout.inc.php?signout=true">Sign Out</a>
        </div>
    </div>
</h2>
<div class="card">
   <div>
      
        <?php
            include_once "includes/dbh.inc.php";
			$sql = mysqli_query($db_connection, "SELECT * FROM bgroup WHERE idGroup =".$group."");
			$row = mysqli_fetch_assoc($sql);
			
			echo nl2br("<div><tr>
					<td><b>Group Subject: </b>".$row['groupSubjectClass']."\n </td>
					<td><b>Group Creator: </b>".$row['groupCreator']."\n </td>
					<td><b>Group Major: </b>".$row['groupMajor']."\n </td>
					<td><b>Number of Participants: </b>".$row['groupNumParticipants']."\n </td>
					<td><b>Description: </b>".$row['groupDescription']."\n </td>
					<td><b>Date Created: </b>".$row['group_create_time']."\n </td>
				</tr></div>");
				
			$participants = mysqli_query($db_connection, "SELECT idUsername FROM bjoin WHERE idGroup =".$group."");
			
			echo "<h2>Participants</h2>";
			
			if (mysqli_num_rows($participants) != 0)
			{	
				echo "<div>";
				while($result = mysqli_fetch_assoc($participants))
				{
					echo nl2br("<div>".$result['idUsername']."</div>");
				}
				echo "</div>";
				
			}
			
			echo "<form action = 'includes/join.inc.php' method = 'POST'><td> <button name = 'join' type = 'submit' value = '$group'>JOIN</button> </td></form>";
     
        ?>
		
		
    </div>

</div>

</body>
</html>

