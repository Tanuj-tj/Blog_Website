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
                <button class="btn-s"><a class = "loginsignupbtn" href = "signin.html">Login</a></button>
            </form>

        </div>

    </nav>
    <div class="max-width-1 m-auto">
        <hr>
    </div>
    
    <div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
        <form aciton ="index.html" name="myForm" method="post">
           <br> <h2>Login</h2><br>
            <div class="contact-form">
                <div class="form-box">
                   <p> Email: <p> <input type="text" placeholder="Enter Your Email Id" required><b><span class="formerror"> </span></b>
                </div>
                <div class="form-box" id="pass">
                    <p> Password: </p> <input type="password" name="fpass" required><b><span class="formerror"</span></b>
                </div>
                 <br>
                <button class = "btn-s">Login</button>
                <!-- <input class="btn" type="submit" value="Submit"> -->
              
        
                <br>
            </form>
            </div>
        </div>

    </div>

    <div class="footer" style = "margin-top:235px;">
        <p>Copyright &copy; <a href="https://www.linkedin.com/in/tanuj-shrivastava/">Tanuj Shrivastava</a> </p>
       
    </div>
</body>

</html>