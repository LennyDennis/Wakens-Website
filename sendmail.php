<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // data sent in header are in JSON format
    header('Content-Type: application/json');
    // takes the value from variables and Post the data

    $to = "info@hanawell.net";
    $name = strip_tags(trim($_POST['fullname']));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $email = $_POST['email'];
    $phone = trim($_POST['full_number']);
    $company = trim($_POST['company']);
    $subject = trim($_POST['subject']);
    $postmessage = trim($_POST['message']);

    // Email Template
    $message = "<b>Name : </b>" . $name . "<br>";
    $message .= "<b>Contact Number : </b>" . $phone . "<br>";
    $message .= "<b>Email Address : </b>" . $email . "<br>";
    $message .= "<b>Company : </b>" . $company . "<br></br>";
    $message .= "<b>Message :</b> </br>" . $postmessage . "<br>";

    $header = "From:" + $email + " \r\n";
    $headers = "Reply-To: ".$email."\r\n" ;
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $retval = mail($to, $subject, $message, $header);
    // message Notification
    if ($retval == true) {
        echo json_encode(array(
            'success' => true,
            'message' => 'Message sent successfully'
        ));
        header('Location: emailsuccess.php');
    } else {
        echo json_encode(array(
            'error' => true,
            'message' => 'Error sending message'
        ));
        header('Location: emailerror.php');
    }
}