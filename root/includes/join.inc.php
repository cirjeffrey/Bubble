<?php
 session_start();
 //redirect to login page if not logged in yet
 if(!isset($_SESSION['u_id'])){
  header("Location: ./login.html?please_log_in");
  exit();
 }

 if(!isset($_POST['join'])){
     header("Location: ./FindSG.php?error");
     exit();
 }

 //get group id of the group joined
    include_once "dbh.inc.php";
    $gid = mysqli_real_escape_string($db_connection, $_POST['join']);
 //get user id to store in join table
    $uid = $_SESSION['u_id'];

    $sql = "INSERT INTO bjoin (idGroup, idUsername) VALUES ('$gid','$uid');";
    mysqli_query($db_connection, $sql);
    //echo $sql;
    #header("Location: ../profile.php?GroupJoined");
    header("Location: ../viewgroup.php?gid=".$gid."");
    exit();
?>