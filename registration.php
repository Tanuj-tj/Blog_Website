<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>TechieComet | Sign Up</title>
</head>

<body>

   <?php include 'nav.php';?>


    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
         

            echo "<center><div style = 'margin:50px;' class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div></center>
                  <div style = 'margin-top:481px;'> </div>";

        } else {


            echo "<center><div style = 'margin:50px;' class='form'>
                 <h3>Required fields are missing.</h3><br/>
                 <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div></center>
                  <div style = 'margin-top:481px;'> </div>";
        }
    } else {
?>


    <div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
        <div class="contact-form">
        <form aciton ="index.html" name="myForm" onsubmit="return validateForm()" method="post">
        <br>
            <h2>Sign Up</h2>
        <br>
            
                <div class="form-box">
                  <p> UserName:</p> <input type="text" name="username" placeholder="Enter Your Name" required><b> <span class="formerror"> </span></b>
                </div>
                <div class="form-box">
                    <p>Email:</p> <input type="text" placeholder="Enter Your Email Id" name="email" required><b><span class="formerror"> </span></b>
                </div>
                <div class="form-box" id="pass">
                    <p>Password:</p> <input type="password" name="password" required><b><span class="formerror"></span></b>
                </div>
                <br>
                 <button class = "btn-s">Sign Up</button>
                <!-- <input class="btn" type="submit" value="Submit"> -->
              
        
                <br>
            </form>
            </div>
        </div>

    </div> 
    <?php
    }
?>
     <div class="footer" style = "margin-top:139px;">
        <?php include 'footer.php';?>
     <div>

</body>

</html>