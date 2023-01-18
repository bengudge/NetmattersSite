<?php

//session_start();

$inputs = [];
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Validate name
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $inputs['name'] = $name;
    if (!$name || trim($name) === '') {
        $errors['name'] = 'Please enter your name';
    }

    // Validate company name
    $company_name = filter_input(INPUT_POST, 'company-name', FILTER_SANITIZE_STRING);
    $inputs['company-name'] = $company_name;
    
    // Validate email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $inputs['email'] = $email;
    if ($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!$email) {
            $errors['email'] = 'Please enter a valid email';
            echo "<script>alert('Please enter a valid email');</script>";
        }
    } else {
        $errors['email'] = 'Please enter an email';
        echo "<script>alert('Please enter an email');</script>";
    }

    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
    $inputs['telephone'] = $telephone;
    if (!$telephone || trim($telephone) === '') {
        $errors['telephone'] = 'Please enter your telephone number';
        echo "<script>alert('Please enter your telephone number');</script>";
    } 

    // Validate subject
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $inputs['subject'] = $subject;
    if (!$subject || trim($subject) === '') {
        $errors['subject'] = 'Please enter the subject';
    }

    // Validate message
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $inputs['message'] = $message;
    if (!$message || trim($message) === '') {
        $errors['message'] = 'Please enter the message';
    }

    var_dump($inputs);

}