<?php
    include('connection.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM notes WHERE id=$id";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die('Error on DB');
        }

        header('location:../profile.php');
    }
?>