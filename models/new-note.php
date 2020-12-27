<?php
    include('connection.php');
    if(isset($_POST['save'])) {
        $title = $conn -> real_escape_string($_POST['title']);
        $content = $conn -> real_escape_string($_POST['content']);
        $user_id = $_SESSION['user_id'];

        $query = "INSERT INTO notes (title, content, user_id) VALUES ('$title', '$content', $user_id)";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die('Failed to connect to Database');
            echo $content;
        }

        header('location:../profile.php');
    }
?>