<?php include('header.php'); ?>
<h1 class="main-title">NotesApp</h1>
<div class="container">
    <div class="flex-container">
        <h3>Create notes and save them in your profile.</h3>
        <img src="https://cdn.pixabay.com/photo/2018/12/24/07/05/desktop-background-3892369_960_720.jpg" alt="" class="main-img">
    </div>
    <div class="flex-container">
        <div class="content">
            <h2 class="card-title">Register</h2>
        </div>
        <div class="form-container">
            <?php 
                $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                
                if(strpos($url, 'register=password') == true) {
                    echo '<div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='."'none'".';">&times;</span>
                            <p>Passwords must match.</p>
                        </div>';
                } elseif (strpos($url, 'register=username') == true) {
                    echo '<div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='."'none'".';">&times;</span>
                            <p>Username already taken.</p>
                        </div>';
                } elseif (strpos($url, 'register=empty') == true) {
                    echo '<div class="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='."'none'".';">&times;</span>
                            <p>There are empty fields.</p>
                        </div>';
                } else {
                    echo '<div></div>';
                }
            ?>
            
            <form action="models/register.php" method="POST">
                <input type="text" name="username" placeholder="Username" require autofocus>
                <input type="email" name="email" placeholder="Email" require>
                <input type="password" name="password" placeholder="Password" require>
                <input type="password" name="confirmation" placeholder="Confirm password" require>
                <button type="submit" name="register" class="btn">Register</button>
            </form>
            <p class="form-toggle">If you already have an account, <a href="login.php">login here</a></p>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>