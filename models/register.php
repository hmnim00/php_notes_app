<?php
    include('connection.php');
    include('functions.php');

    if(isset($_POST['register'])) {
        $data = array(
            $_POST['username'],
            $_POST['email'],
            $_POST['password'],
            $_POST['confirmation']
        );

        if(empty_data($data) == false) {
            if($data[2] != $data[3]) {
                header('location:../register.php?register=password');
            } else {
                $checkUser = "SELECT * FROM users WHERE username = '$data[0]'";
                $checkResult = mysqli_query($conn, $checkUser);
    
                if(mysqli_num_rows($checkResult) > 0) {
                    header('location:../register.php?register=username');
                } else {
                    $query = "INSERT INTO users (username, email, password) VALUES ('$data[0]', '$data[1]', '".md5($data[2])."')";
                    $result = mysqli_query($conn, $query);
                    $_SESSION['username'] = $data[0];
                    
                    if($result) {
                        $query = "SELECT * FROM users WHERE username='$data[0]'";
                        $result = mysqli_query($conn, $query);
                        if(mysqli_num_rows($result) == 1) {
                            $_SESSION['username'] = $data[0];
                            $row = $result -> fetch_assoc();
                            $_SESSION['user_id'] = $row['id'];
                            header('location:../profile.php');
                        }
                    } else {
                        die('Failed to connect to Database');
                    }
    
                }
            }
        } else {
            header('location:../register.php?register=empty');
        }
    }
?>