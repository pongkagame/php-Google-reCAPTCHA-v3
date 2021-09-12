<?php
    if(isset($_POST['submit'])){
        //Variable Input Form
        $name = $_POST['my-name'];
        $email = $_POST['my-email'];
        $message = $_POST['my-message'];

        //Initialize data verify CAPTCHA
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        
        $data = [
            'secret' => 'SECRET_KEY',
            'response' => $_POST['token']
        ];
    
        $get_response = json_decode(file_get_contents($url . '?secret='. $data['secret'] .'&response=' . $data['response']), true);
        //Handle response CAPTCHA 
        if ($get_response['success'] == true ){
            session_start();
            $_SESSION['APP'] = $_POST['my-name'];
            echo "<script>
            alert('Success Response');
            window.location.href='index.php';
            </script>";
        } else {
            session_start();
            $_SESSION['ERROR'] = $get_response['error-codes'];
            echo "<script>
            alert('Error Response');
            window.location.href='index.php';
            </script>"; 
        }
    }      