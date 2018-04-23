<?php

    if(isset($_POST['submit'])){
        include_once 'dbh.inc.php';

        $email = mysqli_real_escape_string($db_connection, $_POST['email']);
        $pwd = mysqli_real_escape_string($db_connection, $_POST['psw']);
        $name = mysqli_real_escape_string($db_connection, $_POST['name']);
        $major = mysqli_real_escape_string($db_connection, $_POST['major']);;
        $uid = mysqli_real_escape_string($db_connection, $_POST['username']);;

        //Error handlers
        //Check for empty fields
        if(empty($email) || empty($pwd) || empty($name) || empty($uid)){
            header("Location: ../signupSeparate.html?signup=empty");
            exit();
        }
        else{
            //Check if input characters are valid
            //for checking name field !preg_match("/^[a-zA-Z]*$/", $name)
            if(filter_var(!$email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signupSeparate.html?signup=email");
                exit();
            }
            else{
                $sql = "SELECT * FROM bUser WHERE idUsername = '$uid'";
                $result = mysqli_query($db_connection, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    header("Location: ../signupSeparate.html?signup=usertaken");
                    exit();
                }
                else{
                    //Hashing the password
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user into the datebase
                    $sql = "INSERT INTO bUser (idUsername, userFullname, userEmail, userPassword, userMAjor) 
                            VALUES ('$uid', '$name', '$email', '$hashedPwd', '$major');";
                    mysqli_query($db_connection, $sql);
                    header("Location: ../New User.html?signup=success");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: ../login.html");
        exit();
    }