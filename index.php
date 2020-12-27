<?php
    include('header.php');
    include('models/auth.php');
    include('navigation.php');
?>

<div class="main-content">
    <div class="content__ welcome">
        <p>Welcome <strong class="username"><?php echo $_SESSION['username']; ?></strong></p>
    </div>
    <div class="content__">
        <h3 class="new-note">New note</h3>
        <div class="form-container">
            <form action="models/new-note.php" method="POST">
                <input type="text" name="title" placeholder="Title" require autofocus>
                <textarea name="content" rows="10" placeholder="Content"></textarea>
                <button type="submit" name="save" class="btn">Save new note</button>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>