<?php

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","", $inputText);
    return $inputText;
}

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ","", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}

if(isset($_POST['registerButton'])) {
    $username = sanitizeFormUsername($_POST['username']);

    $firstName = sanitizeFormString($_POST['firstName']);

    $lastName = sanitizeFormString($_POST['lastName']);

    $email = sanitizeFormString($_POST['email']);

    $email2 = sanitizeFormString($_POST['email2']);

    $password = sanitizeFormString($_POST['password']);

    $password2  = sanitizeFormString($_POST['password2']);

}

?>
