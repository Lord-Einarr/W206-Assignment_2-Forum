<?php
    include 'partials/header.php';
    include 'partials/navigation.php';

    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if (strpos($url, 'error=empty') !== false) {
        echo "Please fill out all feilds!";
    }
    elseif (strpos($url, 'error=email') !== false) {
        echo "This email is already registered!";
    }
    elseif (strpos($url, 'error=username') !== false) {
        echo "This username is already registered!";
    }

    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $confirmEmail = $_POST ['confirmEmail'];
        $password = $_POST['password'];
        $confirmPassword = $_POST ['confirmPassword'];
     
        if (empty($username)) {
            header("Location: register.php?error=empty");
            exit();
        }
        if (empty($firstname)) {
            header("Location: register.php?error=empty");
            exit();
        }
        if (empty($lastname)) {
            header("Location: register.php?error=empty");
            exit();
        }
        if (empty($email)) {
            header("Location: register.php?error=empty");
            exit();
        }
        if (empty($confirmEmail)) {
            header("Location: register.php?error=empty");
            exit();
        }
        if (empty($password)) {
            header("Location: register.php?error=empty");
            exit();
        }
        if (empty($confirmPassword)) {
            header("Location: register.php?error=empty");
            exit();
        }
        else {

            $sql = "SELECT email FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $emailcheck = mysqli_num_rows($result);
            if ($emailcheck > 0) {
                header("Location: register.php?error=email");
                exit();
            }

            $sql = "SELECT username FROM users WHERE username='$username'";
            $result = mysqli_query($conn, $sql);
            $emailcheck = mysqli_num_rows($result);
            if ($emailcheck > 0) {
                header("Location: register.php?error=username");
                exit();
            }
            

            if ($_POST['email'] != $_POST['confirmEmail']) {
                    header("Location: register.php?error=email");
                    exit();
            } 
           
            if ($_POST['password'] != $_POST['confirmPassword']) {
                header("Location: register.php?error=password");
                exit();
            } 
            else{
                $encryption = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (username, firstname, lastname, email, password)
                VALUES ('$username', '$firstname', '$lastname', '$email', '$encryption')";
                $result = mysqli_query($conn, $sql);

                header("Location: index.php");

            }
        }
    }


    include 'views/register.view.php';
    include 'partials/footer.php;'
?>