<?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted form data
    $postData = $_POST;
    $to = "info@hanawell.net";
    $from = $_POST['email'];
    $name = strip_tags(trim($_POST['fullname']));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $phone = trim($_POST['full_number']);
    $company = trim($_POST['company']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // Check whether submitted data is not empty
    if (!empty($to) && !empty($from) && !empty($name) && !empty($phone) && !empty($company) && !empty($subject) && !empty($message)) {

        // Validate email
        if (filter_var($from, FILTER_VALIDATE_EMAIL) === false) {
            $statusMsg = 'Please enter your valid email.';
            header('Location: emailerror.php');
        } else {
            $uploadStatus = 1;

            // Upload attachment file
            if (!empty($_FILES["attachment"]["name"])) {

                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);



                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if (in_array($fileType, $allowTypes)) {
                    // Upload file to the server
                    if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)) {
                        $uploadedFile = $targetFilePath;
                    } else {
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                        header('Location: emailerror.php');
                    }
                } else {
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                    header('Location: emailerror.php');
                }
            }

            if ($uploadStatus == 1) {

                $sendMessage = "<b>Name : </b>" . $name . "<br>";
                $sendMessage .= "<b>Contact Number : </b>" . $phone . "<br>";
                $sendMessage .= "<b>Email Address : </b>" . $from . "<br>";
                $sendMessage .= "<b>Company : </b>" . $company . "<br></br>";
                $sendMessage .= "<b>Message :</b> </br>" . $message . "<br>";

                $headers = "From: queries@hanawell.net \r\n";
                $headers .= "Reply-To: $from \r\n";
                $headers .= "MIME-Version: 1.0\r\n";



                if (!empty($uploadedFile) && file_exists($uploadedFile)) {


                    // Boundary 
                    $semi_rand = md5(time());
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

                    // headers for attachment 
                    $headers .= "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                        "Content-Transfer-Encoding: 7bit\n\n" . $sendMessage . "\n\n";

                    // Preparing attachment
                    if (is_file($uploadedFile)) {
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile, "rb");
                        $data =  @fread($fp, filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        // $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        // "Content-Description: ".basename($uploadedFile)."\n" .
                        // "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        // "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";

                        $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"" . basename($uploadedFile) . "\"\n" .
                            "Content-Disposition: attachment;\n" . " filename=\"" . basename($uploadedFile) . "\"\n" .
                            "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    $message .= "--{$mime_boundary}\n";

                    $returnpath = "-f" . $from;
                    // Send email
                    $mail = mail($to, $subject, $message, $headers, $returnpath);
                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                } else {
                    // Set content-type headers for sending HTML email
                    $headers .= "Content-type: text/html\r\n";
                    // Send email
                    $mail = mail($to, $subject, $sendMessage, $headers);
                }
                // If mail sent
                if ($mail) {
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    header('Location: emailsuccess.php');
                    $postData = '';
                } else {
                    $statusMsg = 'Your contact request submission failed, please try again.';
                    header('Location: emailerror.php');
                }
            }
        }
    } else {
        $statusMsg = 'Please fill all the fields.';
        header('Location: emailerror.php');
    }
}