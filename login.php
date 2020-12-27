<?php
include('header.php');
?>

<h1 class="main-title">NotesApp</h1>
<div class="container">
    <div class="flex-container">
        <h3>Create notes and save them in your profile.</h3>
        <img src="https://cdn.pixabay.com/photo/2018/12/24/07/05/desktop-background-3892369_960_720.jpg" alt="" class="main-img">
    </div>
    <div class="flex-container">
        <div class="content">
            <h2 class="card-title">Login</h2>
        </div>
        <div class="form-container">
            <?php
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if (strpos($url, 'login=error') == true) {
                    echo '<div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display=' . "'none'" . ';">&times;</span>
                            <h3>Username and/or password is invalid.</h3>
                        </div>';
                } else {
                    echo '<div></div>';
                }
            ?>
            <form action="models/login.php" method="POST">
                <input type="text" name="username" placeholder="Username" require autofocus>
                <input type="password" name="password" placeholder="Password" require>
                <button type="submit" name='login' class="btn">Login</button>
            </form>
            <p class="form-toggle">If you don't have an account, <a href="register.php">register here</a></p>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>