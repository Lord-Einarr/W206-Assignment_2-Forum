<?php
    include 'partials/header.php';
    include 'partials/navigation.php';

$error = false;
if(isset($_POST['btn-register'])){
    //clean user input to prevent sql injection
    $username = $_POST['username'];
    $username = strip_tags($username);
    $username = htmlspecialchars($username);

    $email = $_POST['email'];
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $password = $_POST['password'];
    $password = strip_tags($password);
    $password = htmlspecialchars($password);

    //validate
    if(empty($username)){
        $error = true;
        $errorUsername = 'Please input username';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = true;
        $errorEmail = 'Please a valid input email';
    }

    if(empty($password)){
        $error = true;
        $errorPassword = 'Please password';
    }elseif(strlen($password) < 6){
        $error = true;
        $errorPassword = 'Password must at least 6 characters';
    }

    //encrypt password with md5
    $password = md5($password);

    //insert data if no error
    if(!$error){
        $sql = "insert into tbl_users(username, email ,password)
                values('$username', '$email', '$password')";
        if(mysqli_query($conn, $sql)){
            $successMsg = 'Register successfully. <a href="index.php">click here to login</a>';
        }else{
            echo 'Error '.mysqli_error($conn);
        }
    }

}
require 'views/register.view.php';
require 'partials/footer.php';

?>

