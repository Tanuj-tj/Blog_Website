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
    if (isset($_REQUEST['content'])) {
        // removes backslashes
        $auth_name = stripslashes($_REQUEST['auth_name']);
        //escapes special characters in a string
        $auth_name = mysqli_real_escape_string($con, $auth_name);
        $title    = stripslashes($_REQUEST['title']);
        $title    = mysqli_real_escape_string($con, $title);
        $featured_image = stripslashes($_REQUEST['featured_image']);
        $featured_image = mysqli_real_escape_string($con, $featured_image);
        $content = stripslashes($_REQUEST['content']);
        $content = mysqli_real_escape_string($con, $content);
        
        $query    = "INSERT into `post` (auth_name, title,content, thumbnail) 
                   VALUES ('$auth_name', '$title', '$content', '$featured_image')";

        $result   = mysqli_query($con, $query);
        if ($result) {
            header("Location: dashboard.php");
                  

        } else {
            
        }
    } else {
?>


    <div class="contact-content font1 max-width-1 m-auto">
        <div class="max-width-1 m-auto mx-1">
            <h2>Add Article</h2>
            <div class="contact-form">
            <form aciton ="index.html" name="myForm" onsubmit="return validateForm()" method="post">

                <div class="form-box">
                    <input type="text" name="auth_name" placeholder="Author Name">
                </div>
                <div class="form-box">
                    <input type="text" name="title" placeholder="Title">
                </div>
                <div class="form-box">
                 <input type="file" name="featured_image">
                 </div>
                <div class="form-box">
                    <textarea name="content" id="" cols="30" rows="10" placeholder="Content"></textarea>
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