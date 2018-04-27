<?php

    if(isset($_GET['signout'])){
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../login.html?logout=successful");
    }

?>