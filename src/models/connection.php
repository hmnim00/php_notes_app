<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'notes_app';

    session_start();
    $conn = mysqli_connect($host, $user, $pass, $database);

    if(mysqli_connect_errno()) {
        echo 'Failed to connect with MySQL: '.mysqli_connect_errno();
    }
?>