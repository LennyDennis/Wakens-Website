<?php
    if(isset($_POST['submit'])){

        $to = 'lennydennis@gmail.com';
        //get fields from the form
        $from = $_POST['email'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $headers = "From: ".$from ."\r\n" ;
        $headers.= "MIME-Version: 1.0\r\n";
        $headers.= "Content-Type: text/html; charset=UTF-8\r\n";

        $fullmessage ='Name: '.$fullname."\r\n"
                        .'Email: '.$from."\r\n"
                        .'Phone: '.$phone."\r\n"
                        .'Company: '.$company."\r\n\n"
                        .'Subject: '.$subject."\r\n"
                        .'Email Body: '."\r\n".$message;

        echo $fullmessage;

        //check whether the email is valid
        if(!filter_var($from, FILTER_VALIDATE_EMAIL)){
            header('Location: ./contact.html');
            exit();
        }else{
            // mail($to,$subject,$fullmessage,$headers);
            // header('Location: thankyou.php');

            $result = mail($to,$subject,$fullmessage,$headers);
            if(!$result) {   
                echo "<script>console.log('Error' );</script>";
            } else {
                echo "<script>console.log('success' );</script>";
            }
        }

    }
?>