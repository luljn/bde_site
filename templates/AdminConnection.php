<?php 
    
    $title = "bde-site-Connection-Administrateur"; 
    $css = "static/style.css";
?>

<?php ob_start(); ?>

    <div class="main">

        <div class="content">
            <h1>CESI <br><span>BDE</span> <br></h1>
            <p class="par">We are the students representatives.  <br> We form the bridge between the student and the administration.
               <br> Connection to Administration Space.</p>

                <div class="form">
                    <form action = "src/controllers/Connection/scriptAdminConnection.php" method = "POST">

                        <h2>Identify yourself Here</h2>
                        <input type="email" name="email" placeholder="Enter Email Here">
                        <input type="password" name="password" placeholder="Enter Password Here">
                        <button class="btnn" type = "submit">Login</button>

                        <p class="link">You are not an administrator ?<br>
                        <a href="index.php">Log in </a> here</a></p>
                        
                    </form>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
