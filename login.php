<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>TechieComet | Login</title>
</head>

<body>

   <?php include 'nav.php';?>


    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {

                  
            echo "<center><div style = 'margin:50px;' class='form'>
                <h3>Incorrect Username/password.</h3><br/>
                <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                </div></center>
                <div style = 'margin-top:481px;'> </div>";
        }
    } else {
?>  
    <div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
        <form aciton ="" name="myForm" method="post">
           <br> <h2>Login</h2><br>
            <div class="contact-form">
                <div class="form-box">
                   <p> UserName: <p> <input type="text" placeholder="Enter Your Usename" name="username" required><b><span class="formerror"> </span></b>
                </div>
                <div class="form-box" id="pass">
                    <p> Password: </p> <input type="password" name="password" required><b><span class="formerror"></span></b>
                </div>
                 <br>
                <button class = "btn-s">Login</button>
                <!-- <input class="btn" type="submit" value="Submit"> -->
              
        
                <br>
            </form>
            </div>
        </div>

    </div>
    <?php
    }
?>

 <div class="footer" style = "margin-top:228px;">
    <?php include 'footer.php';?>
 <div>

</body>

</html>