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
        <?php
            $query = "SELECT * FROM notes WHERE user_id='".$_SESSION['user_id']."' ORDER BY date DESC";
            $notes = mysqli_query($conn, $query);

            if(mysqli_num_rows($notes) < 1) { ?>
                <div class="note-container">
                    <div class="note-header">
                        <h3>No notes created yet</h3>
                    </div>
                    <div class="note-body">
                        <p class="form-toggle">Create a new note <a href="create.php">here</a>.</p>
                    </div>
                </div>
            <?php } else {
                while($row = mysqli_fetch_array($notes)) { ?>
                    <div class="note-container">
                        <div class="note-header">
                            <h3><?php echo $row['title']; ?></h3>
                            <p><?php echo date('d/m/Y', strtotime($row['date'])); ?></p>
                        </div>
                        <div class="note-body">
                            <p><?php echo nl2br($row['content']); ?></p>
                        </div>
                        <div class="note-footer">
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="actions-btn-edit"><i class="fas fa-edit"></i></a>
                            <a href="models/delete.php?id=<?php echo $row['id']; ?>" class="actions-btn-delete"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                <?php }
            }
        ?>
    </div>
</div>
<?php include('footer.php'); ?>