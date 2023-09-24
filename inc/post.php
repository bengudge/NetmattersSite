<?php
$errors = [];
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // Validate name
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $error = "";
    if (!$name || trim($name) === '') {
        $error = 'Your name';
        array_push($errors, $error);
    }

    // Validate company name
    $company_name = filter_input(INPUT_POST, 'company-name', FILTER_SANITIZE_STRING);
    $inputs['company-name'] = $company_name;
    
    // Validate email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $error = "";
    if ($email) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!$email) {
            $error = 'A valid email';
            array_push($errors, $error);
        }
    } else {
        $error = 'Your email';
        array_push($errors, $error);
    }

    $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
    $error = "";
    if (!$telephone || trim($telephone) === '') {
        $error = 'Your telephone number';
        array_push($errors, $error);
    } 

    // Validate subject
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $error = "";
    if (!$subject || trim($subject) === '') {
        $error = 'Subject';
        array_push($errors, $error);
    }

    // Validate message
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $error = "";
    if (!$message || trim($message) === '') {
        $error = 'Message';
        array_push($errors, $error);
    }

    //var_dump($errors);
    if($errors) {
        formatErrors($errors);
    }
}

function formatErrors($errs) {
    $allErrors = "";
    foreach($errs as $item) {
        $allErrors .= $item . "\\n";
    }
    echo "<script>alert('Please correct the following field(s):\\n{$allErrors}');</script>";
}


if (isset($_POST["name"], $_POST["email"], $_POST["telephone"], $_POST["subject"], $_POST["message"]) 
        && empty($error)) {
    require "insert.php";
}