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
    <title>Create Group</title>
    <link rel="stylesheet" href="create.css">
    <link rel="stylesheet" href="navigator.css">
    
  </head>
  <body>
    <header>
    <img src="header.png" height="170px">
    </header>

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

  <main>  
  <h2> Fill Out This Form To Create A Group</h2>
    <table>
    <form action = "includes/create.inc.php" method = "POST">
      <tr>
        <th><label> Subject/Class/Section </label> </th>
        <td> <input type="text" placeholder="Subject" name = "subj" required></td>
      </tr>
      
      <tr>
        <th><label> Group Name </label></th>
        <td><input type="text" placeholder="Group" name = "gName" required></td>
        </tr>
      
      <tr>
        <th> Number of Members</th>
        <td><input type="number" min="0" max="10" placeholder="0" name = "numMem" required></td>
      </tr>
      <tr>
        <th> Major </th>
        <td><input type="text" placeholder="Major" name = "major" required> </td>
      </tr>
    <tr>
      <th> Description </th>
      <td><textarea cols="25" row="50" placeholder="Write a Description" name="groupDescription"></textarea></td>
    </tr>  
      
    <tr>
      <th> Location </th>
        <td><input type="text" Placeholder="Location" name = "meetingLocation"></td>
    </tr>
      
    <tr>
        <th> Date </th>
        <td> <input type="date" Placeholder="Date" name = "meetingDate" required></td>
    </tr>  
      
      <tr>
        <th> Time </th>
        <td> <input type="time" Placeholder="Time" name = "meetingTime" required></td>
      </tr>
      <tr>
        <th>Public</th>
        <td> <input type="radio" name="pub/priv" value="public" checked></td>
      </tr>  
      <tr>
        <th> Private </th>
        <td> <input type="radio" name="pub/priv" value="private"></td>
      </tr>
      
      <tr>
        <td><button type="submit" style="margin-left:70%;" name = "submit">Create Group</button> </td>
      </tr>

    </form>
    </table>
    </main>
    </body>
</html>
