<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$to = 'enquiries@hanawell.net';
//get fields from the form
$from = $_POST['email'];

// $from = filter_var(trim($_POST['email']),FILTER_SANITIZE_EMAIL);
$fullname = strip_tags(trim($_POST['fullname']));
$fullname = str_replace(array("\r","\n"),array(" "," "),$fullname);
$phone = trim($_POST['phone']);
$company = trim($_POST['company']);
$subject = trim($_POST['subject']);
$message = trim($_POST['message']);

$headers = "From: ".$from."\r\n" ;
// $headers = "Reply-To: ".$to."\r\n" ;
// $headers.= "MIME-Version: 1.0\r\n";
// $headers.= "Content-Type: text/html\r\n";

$fullmessage = 'Name: '.$fullname."\r\n"
.'Email: '.$from."\r\n"
.'Phone: '.$phone."\r\n"
.'Company: '.$company."\r\n\n"
.'Subject: '.$subject."\r\n"
.'Email Body: '."\r\n".$message;

$result = mail($to,$subject,$fullmessage,$headers);
if($result) {
header('Location: emailsuccess.php');
} else {
http_response_code(500);
header('Location: emailerror.php');
}

}
?>