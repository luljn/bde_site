<?php 
    
    $title = "bde-site-Connection"; 
    $css = "static/style.css";
?>

<?php ob_start(); ?>

    <div class="main">

        <div class="navbar">
            <div class="icon">
                <h2 class="logo">CESI BDE</h2>
            </div>

            <div class="navbar">
                <ul>
                    <li><a href="index.php">LOGIN</a></li>
                    <li><a href="index.php?action=accueil">HOME</a></li>
                    <li><a href="index.php?action=about">ABOUT US</a></li>
                    <li><a href="index.php?action=boutique">BOUTIQUE</a></li>
                    <li><a href="index.php?action=events">EVENTS AND ACTIVITIES</a></li>
                    <li><a href="index.php?action=contact">CONTACT</a></li>
                    <li><a href="index.php?action=idea-box">IDEA BOX</a></li>
                </ul>
            </div>
        </div> 

        <div class="content">
            <h1>CESI <br><span>BDE</span> <br></h1>
            <p class="par">We are the students representatives.  <br> We form the bridge between the student and the administration.
               <br> We are because you are.
            </p>

                <div class="form">
                    <form action = "templates/Connected/scriptConnection.php" method = "POST">

                        <h2>Login Here</h2>
                        <input type="email" name="email" placeholder="Enter Email Here" required>
                        <input type="password" name="password" placeholder="Enter Password Here" required>
                        <button class="btnn" type = "submit">Login</button>

                        <p class="link">Don't have an account ?<br>
                        <a href="index.php?action=inscription">Sign up </a> here</a></p>

                        <!--p class="link">Are you an administrator ?<br>
                        <a href="index.php?action=adminConnection">Identify yourself </a> here</a></p-->
                        
                    </form>

                </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
