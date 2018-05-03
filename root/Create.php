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
    <title>Made with Thimble</title>
    <link rel="stylesheet" href="style.css">
    <style>
      .dropdown {
        position: relative;
        display: inline-block;
        float: right;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 50px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
      }
      .dropdown:hover .dropdown-content {
        display: block;
      }
    </style>
  </head>
  <body>
    <header>
    <h1> LOGO</h1>  
    </header>

    <div class="dropdown">
      
      <?php
        $uid = $_SESSION['u_id'];
        echo "<span>$uid</span>";
      ?>
      <div class="dropdown-content">
        <a href="profile.php">My Profile</a>
        <p>My Group</p>
        <a href="includes/logout.inc.php?signout=true">Sign Out</a>
      </div>
    </div>

  <main>  
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