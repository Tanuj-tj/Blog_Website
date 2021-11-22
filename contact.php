<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/utils.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>TechieComet | contact</title>
</head>

<body>
<?php include 'nav.php';?>
  

<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['message'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $mobile    = stripslashes($_REQUEST['mobile']);
        $mobile    = mysqli_real_escape_string($con, $mobile);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $message = stripslashes($_REQUEST['message']);
        $message = mysqli_real_escape_string($con, $message);
        
        $query    = "INSERT into `contact` (name, mobile, email, message) 
                   VALUES ('$name', '$mobile', '$email', '$message')";

        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<center><div style = 'margin:50px;' class='form'>
                  <h3>Message send successfully.</h3><br/>
                  <p class='link'><a href='contact.php'>Go Back</a></p>
                  </div></center>
                  <div style = 'margin-top:481px;'> </div>";
                  

        } else {
            echo "<div class='form'>
                  <h3>Message cannot be empty</h3><br/>
                  <p class='link'>Click here to <a href='contact.php'>Send Message</a></p>
                  </div>";
        }
    } else {
?>


    <div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
            <h2>Contact Us</h2>
            <div class="contact-form">
            <form aciton ="index.html" name="myForm" onsubmit="return validateForm()" method="post">

                <div class="form-box">
                    <input type="text" name="name" placeholder="Enter Your Name">
                </div>
                <div class="form-box">
                    <input type="text" name="mobile" placeholder="Enter Your Phone Number">
                </div>
                <div class="form-box">
                    <input type="text" name="email" placeholder="Enter Your Email Id">
                </div>
                <div class="form-box">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="How may we help you?"></textarea>
                </div>
                <div class="form-box">
                    <button class="btn">Submit</button>
                </div>
                <br>
            </form>
            </div>
        </div>

    </div>
    <?php
    }
?>
    <?php include 'footer.php';?>
</body>

</html>