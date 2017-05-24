<?php


// ADD MESSAGE FUNCTION
function addMessage($message) {
  $_SESSION['message'] = $message;
}

// REDIRECT FUNCTION
function redirect($url)
{
    header('Location: ' . $url);
    die();
}


// SHOW MESSAGE FUNCTION
function showMessage() {
    $message = '';
    if (!empty($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    }
    return $message;
}



























