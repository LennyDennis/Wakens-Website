<?php
if (isset($_POST['submit'])) {

    $to = 'wakenevents@gmail.com';
    //get fields from the form
    $from = $_POST['email'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: ' . $from;

    $fullmessage = 'Name: ' . $fullname . "\r\n" . 'Email: ' . $from . "\r\n" . 'Phone: ' . $phone . "\r\n\n" . 'The mail is as follows: ' . "\r\n" . $message;
    //check whether the email is valid
    if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
        header('Location: emailerror.php');
        exit();
    } else {
        mail($to, $subject, $fullmessage, $headers);
        header('Location: emailsuccess.php');
    }
}