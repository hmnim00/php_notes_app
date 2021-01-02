<?php
    include('header.php');
    include('models/auth.php');
    include('navigation.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM notes WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $content = $row['content'];
        }
    }

?>

<div class="main-content">
    <div class="content__ welcome">
        <p>Welcome <strong class="username"><?php echo $_SESSION['username']; ?></strong></p>
    </div>
    <div class="content__">
        <h3 class="new-note">Edit note</h3>
        <div class="form-container">
            <form action="models/edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <input type="text" name="title" placeholder="Title" value="<?php echo $title; ?>">
                <textarea name="content" rows="10" placeholder="Content"><?php echo $content; ?></textarea>
                <div class="actions-btns">
                    <button type="submit" name="update" class="btn">Update note</button>
                    <a href="profile.php" class="btn-cancel">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>