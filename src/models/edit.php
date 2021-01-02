<?php
    include('connection.php');

    if(isset($_POST['update'])) {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $query = "UPDATE notes SET title='$title', content='$content' WHERE id='$id'";
        mysqli_query($conn, $query);

        header('location:../profile.php');
    }
?>