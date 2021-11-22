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

<nav class="navigation max-width-1 m-auto">
        <div class="nav-left">
            <a href="/">
                <span><img src="img/filename.jpg" width="65px" alt=""></span>
            </a>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
         <div class="nav-right">
            <form action="#" method="get">
                <input class="form-input" type="text" name="query" placeholder="Article Search">
                <button class="btn">Search</button>
                <button class="btn-s"><a class = "loginsignupbtn" href = "registration.html">Sign Up</a></button>
                <button class="btn-s"><a class = "loginsignupbtn" href = "login.html">Login</a></button>
            </form>

        </div>

    </nav>

    <div class="max-width-1 m-auto">
        <hr>
    </div>

    <div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
        <div class="contact-form">
        <form aciton ="index.html" name="myForm" onsubmit="return validateForm()" method="post">
        <br>
            <h2>Sign Up</h2>
        <br>
            
                <div class="form-box">
                  <p> Name:</p> <input type="text" name="fname" placeholder="Enter Your Name" required><b> <span class="formerror"> </span></b>
                </div>
                <div class="form-box">
                   <p>Phone:</p> <input type="text" placeholder="Enter Your Phone Number" name="fphone" required><b><span class="formerror"> </span></b>
                </div>
                <div class="form-box">
                    <p>Email:</p> <input type="text" placeholder="Enter Your Email Id" name="femail" required><b><span class="formerror"> </span></b>
                </div>
                <div class="form-box" id="pass">
                    <p>Password:</p> <input type="password" name="fpass" required><b><span class="formerror"></span></b>
                </div>

                <div class="form-box" id="cpass">
                    <p>Confirm Password:</p> <input type="password" name="fcpass" required><b><span class="formerror"></span></b>
                </div>
                <br>
                 <button class = "btn-s">Sign Up</button>
                <!-- <input class="btn" type="submit" value="Submit"> -->
              
        
                <br>
            </form>
            </div>
        </div>

    </div> 

    <div class="footer" style = "margin-top:100px;">
        <p>Copyright &copy; <a href="https://www.linkedin.com/in/tanuj-shrivastava/">Tanuj Shrivastava</a> </p>
       
    </div>
</body>

</html>