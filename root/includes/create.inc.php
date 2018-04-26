<?php
    //start session
    session_start();

    if(isset($_POST['submit'])){
        include_once 'dbh.inc.php';
        // dont need this anymore $gid = "0000"; // temp group id make this auto increment
        $name = $_SESSION['u_name'];
        $subj = mysqli_real_escape_string($db_connection, $_POST['subj']);
        $gName = mysqli_real_escape_string($db_connection, $_POST['gName']);
        $numMem = mysqli_real_escape_string($db_connection, $_POST['numMem']);
        $major = mysqli_real_escape_string($db_connection, $_POST['major']);
        $private = mysqli_real_escape_string($db_connection, $_POST['pub/priv']);
        $isPrivate;

        if($private == "private"){
            $isPrivate = 1;
        }
        else{
            $isPrivate = 0;
        }

        //Error handlers
        //Check for empty fields
        if(empty($subj) || empty($gName) || empty($numMem) || empty($major)){
            header("Location: ../Create.html?create=empty");
            exit();
        }
        else{
            //Check if input characters are valid
            //for checking name field !preg_match("/^[a-zA-Z]*$/", $name)
            
                $sql = "INSERT INTO bGroup (groupCreator, groupMajor, groupSubjectClass, groupNumParticipants, isPrivate, isFull) 
                        VALUES ('$name', '$major', '$subj', '$numMem', '$isPrivate', '0');"; // isFull = 0 because group is never full when newly created; priv = 0 for now
                //$result = mysqli_query($db_connection, $sql);
                //$resultCheck = mysqli_num_rows($result);
                mysqli_query($db_connection, $sql);
                header("Location: ../index.php?groupCreated");
                exit();
            
        }
    }
    else{
        header("Location: ../Create.html?error");
        exit();
    }