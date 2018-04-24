<?php

session_start();

    if(isset($_POST['submit'])){
        include_once 'dbh.inc.php';

        $email = mysqli_real_escape_string($db_connection, $_POST['email']);
        //echo $username;
        $password = mysqli_real_escape_string($db_connection, $_POST['password']);

        //Error handlers
        //check if inputs are empty
        if(empty($email) || empty($password)){
            header("Location: ../login.php?login=empty");
            exit();
        }
        else{
            $sql = "SELECT * FROM bUser WHERE userEmail = '$email'";
            $result = mysqli_query($db_connection, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck < 1){
                header("Location: ../login.php?login=wrongusername");
                exit();
            }
            else{
                if($row = mysqli_fetch_assoc($result)){
                    //De-hashing the password
                    $hashedPwdCheck = password_verify($password, $row['userPassword']);

                    if($hashedPwdCheck == false){
                        header("Location: ../login.php?login=wrongpassword");
                        exit();
                    }
                    elseif($hashedPwdCheck == true){
                        //Log in the user here
                        $_SESSION['u_id'] = $row['idUsername'];
                        $_SESSION['u_name'] = $row['userFullname'];
                        $_SESSION['u_email'] = $row['userEmail'];
                        $_SESSION['u_major'] = $row['userMajor'];
                        //$_SESSION['u_id'] = $row['idUsername'];
                        header("Location: ../index.php");
                        exit();
                    }
                }
            }
        }
    }
    else{
        header("Location: ../login.php?login=error");
        exit();
    }
?>