<?php
  if(isset($_POST["submitButton"])){
    echo "Form was submitted";
  }  
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Samflix+</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>
    <body>
        <div class="signInContainer">

            <div class="column">
                
                <div class="header">
                    <img src="assets/images/Logo.png" title="Logo" alt="Site logo">
                    <h3>Sign In</h3>
                    <span>to continue to Samflix+</span>
                </div>
                
                <form method="POST">

                    <input type="email" name="email" placeholder="Email" required>
                    
                    <input type="password" name="password" placeholder="Password" required>
                    
                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="register.php" class="signInMessage">Need an account? Sign Up here!</a>


            </div>
        </div>
    </body>
</html>