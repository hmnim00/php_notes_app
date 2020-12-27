<?php
    // session_start();
    include ('connection.php');
    
    if(!isset($_SESSION['username']) && !isset($_SESSION['user_id'])) {
        header('location:login.php');
        exit();
    }
?>