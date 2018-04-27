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
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
            float: right;
        }

        .dropdown-content {
            right: 0;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 50px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 10px 12px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 800px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: black;
            font-size: 16px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #070;
            text-align: center;
            cursor: pointer;
            width: 40%;
            font-size: 18px;
        }

        button2 {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 4px;
            color: red;
            background-color: #FFEBE6;
            text-align: center;
            cursor: pointer;
            width: 20%;
            font-size: 14px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>

<h2 style="text-align:Left">&nbsp&nbsp&nbspUser Profile
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
    <img src="https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Userpic" style="width:100%">
    <?php
        $uid = $_SESSION['u_id'];
        echo "<h1>$uid</h1>"
    ?>
    
    
    <p class="title">Freshman/Sophomore...etc</p>
    <?php
        $major = $_SESSION['u_major'];
        echo "<p>$major</p>"
    ?>
    <P style="text-align:left">&nbsp&nbsp&nbspUser's Group:<br /></p>
    <p>&nbsp&nbsp&nbsp[Group&nbspName]&nbsp[unique&nbspgroup&nbspnumber][Name of Creator]&nbsp&nbsp&nbsp<button2>Quit&nbspGroup</button2></p>
    <p>&nbsp&nbsp&nbsp[Group&nbspName]&nbsp[unique&nbspgroup&nbspnumber][Name of Creator]&nbsp&nbsp&nbsp<button2>Quit&nbspGroup</button2></p>
    <p>&nbsp&nbsp&nbsp[Group&nbspName]&nbsp[unique&nbspgroup&nbspnumber][Name of Creator]&nbsp&nbsp&nbsp<button2>Quit&nbspGroup</button2></p>
    <p>&nbsp&nbsp&nbsp[Group&nbspName]&nbsp[unique&nbspgroup&nbspnumber][Name of Creator]&nbsp&nbsp&nbsp<button2>Quit&nbspGroup</button2></p>

    <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-dribbble"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-facebook"></i></a>
    </div>
    <p><button>Add Friend</button></p>
</div>

</body>
</html>
