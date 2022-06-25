<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        echo "<script> 
        alert('Log out sucessfully');
        window.location = \"login.php\";
        </script>";
        //header("Location: login.php");
    }
?>