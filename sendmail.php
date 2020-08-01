// if ($_SERVER["REQUEST_METHOD"] == "POST") {

// $to = 'info@hanawell.net';
// //get fields from the form
// $from = $_POST['email'];

// // $from = filter_var(trim($_POST['email']),FILTER_SANITIZE_EMAIL);
// $fullname = strip_tags(trim($_POST['fullname']));
// $fullname = str_replace(array("\r", "\n"), array(" ", " "), $fullname);

// $phone = trim($_POST['full_number']);
// $company = trim($_POST['company']);
// $subject = trim($_POST['subject']);
// $message = trim($_POST['message']);

// $headers = "From: " . $from . "\r\n";
// // $headers = "Reply-To: ".$to."\r\n" ;
// // $headers.= "MIME-Version: 1.0\r\n";
// // $headers.= "Content-Type: text/html\r\n";

// $fullmessage = 'Name: ' . $fullname . "\r\n"
// . 'Email: ' . $from . "\r\n"
// . 'Phone: ' . $phone . "\r\n"
// . 'Company: ' . $company . "\r\n\n"
// . 'Subject: ' . $subject . "\r\n"
// . 'Email Body: ' . "\r\n" . $message;


// $result = mail($to, $subject, $fullmessage, $headers);
// if ($result) {


// header('Location: emailsuccess.php');
// } else {


// http_response_code(500);
// header('Location: emailerror.php');
// }
// }
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // data sent in header are in JSON format
    header('Content-Type: application/json');
    // takes the value from variables and Post the data

    $to = "lennydennis@gmail.com";
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
?>