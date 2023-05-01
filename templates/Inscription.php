<?php 
    
    $title = "bde-site-Inscription"; 
    $css = "static/style1.css";
?>

<?php ob_start(); ?>

    <div class="wrapper">
        <div class="registration_form">
            <div class="title">
                Registration Form
            </div>
        
            <form action = "src/controllers/Inscription/scriptInscription.php" method = "POST">

                <div class="form_wrap">

                    <div class="input_grp">
                        <div class="input_wrap">
                            <label for="surname">First Name</label>
                            <input type="text" id="fname" name ="surname" required>
                        </div>
                        <div class="input_wrap">
                            <label for="name">Last Name</label>
                            <input type="text" id="lname" name ="name" required>
                        </div>
                    </div>

                    <div class="input_wrap">
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name ="email" required>
                    </div>

                    <div class="input_wrap">
                        <label for="city">Location</label>
                        <input type="text" id="city" name ="location" required>
                    </div>
                    
                    <div class="input_wrap">
                        <label for="country">Password</label>
                        <input type="password" id="country" name ="password" required>
                    </div>

                    <div class="input_wrap">
                        
                            <label for="accept_conditions"><input type="checkbox" id="accept_conditions">  J'accepte les conditions d'utilisation et les cookies.</label>
                      </div>
                    <div class="radio"></div>
                        
                    <div class="input_wrap">
                        <!--input type="submit" value="Register Now" class="submit_btn"-->
                        <button class="submit_btn" type = "submit">Register Now</button>
                    </div>

                    <p class="link">Already a user ?<br>
                        <a href="index.php">Sign in </a> here</a><br>
                        <a href="index.php?action=legal">Legal terms</a> 
                    </p>
                
                </div>

            </form>
        </div>
    </div>

    <!--div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2>Legal mentions and cookies</h2>
          <p></p>
          <form>
            <p>Nous utilisons des cookies pour vous garantir la meilleure expérience sur notre site. En cliquant sur "Accept All" , vous acceptez les conditions d'utilisation ainsi que les cookies.</p>
            <input type="submit" value="Accept all" class="submi">
            <input type="button" value="Reject all" onclick="closeModal()" class="submi">
          </form>
        </div>
      </div-->

    <script src="/dynamic/form.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
