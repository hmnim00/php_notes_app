<?php
    include('connection.php');
    
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username='$username' AND password ='".md5($password)."'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            // Get all elements of the user
            $row = $result -> fetch_assoc();
            // Get id from user
            $_SESSION['user_id'] = $row['id'];
            header('location:../profile.php');
        } else {
            header('location:../login.php?login=error');
        }
    }
?> 