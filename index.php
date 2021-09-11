<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form by Pongkagame</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</head>
<body>
    <div class="container">
        <div class="title">
            <a href="https://pongxkagame.blogspot.com"><h3>Example Google reCAPTHCA v3</h3></a>
            <?php if (isset($_SESSION['APP'])): ?>
                <h4 style="color:blue;">Sending success to <?php echo $_SESSION['APP']; ?></h4>
            <?php elseif (isset($_SESSION['ERROR'])): ?>
                <h4 style="color:red;">Fill the form again! <?php print_r($_SESSION['ERROR']); ?></h4>
            <?php endif; ?>
        </div>
        <form id="my-form" action="action.php" method="POST">
            <div class="form-item">
            <label for="myName">Name</label><br>
            <input type="text" name="my-name"/>
            </div>
            <div class="form-item">
            <label for="myEmail">Email</label><br>
            <input type="email" name="my-email"/>
            </div>
            <div class="form-item">
            <label for="myMessage">Message</label><br>
            <textarea name="my-message" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="hidden" name="token" id="token"/><br>
            <div class="g-recaptcha" id="my-captcha"></div>
            <button name="submit" type="submit" data-sitekey="SITE_KEY" id="my-submit">Send</button>
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>