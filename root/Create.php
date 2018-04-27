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
        <td> <input type="text" value="subject" name = "subj"></td>
      </tr>
      
      <tr>
        <th><label> Group Name </label></th>
        <td><input type="text" value="Group" name = "gName"></td>
        </tr>
      
      <tr>
        <th> Number of Members</th>
        <td><input type="number" value="subject" name = "numMem"></td>
      </tr>
      <tr>
        <th> Major </th>
        <td><input type="text" value="subject" name = "major"> </td>
      </tr>
    <tr>
      <th> Introduction</th>
      <td><textarea></textarea></td>
    </tr>  
      
    <tr>
      <th> Location </th>
        <td><input type="text" value="location" name = "meetingLocation"></td>
    </tr>
      
    <tr>
        <th> Date </th>
        <td> <input type="date" value="date" name = "meetingDate"></td>
    </tr>  
      
      <tr>
        <th> Time </th>
        <td> <input type="Time" value="Time" name = "meetingTime"></td>
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