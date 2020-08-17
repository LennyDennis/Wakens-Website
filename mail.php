<?php
$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Get the submitted form data
    $postData = $_POST;
    $to = "lennydennis@gmail.com";
    $from = $_POST['email'];
    $name = strip_tags(trim($_POST['fullname']));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $phone = trim($_POST['full_number']);
    $company = trim($_POST['company']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    // Check whether submitted data is not empty
    if(!empty($to) && !empty($from) && !empty($name) && !empty($phone) && !empty($company) && !empty($subject) && !empty($postmessage)){
        
        // Validate email
        if(filter_var($from, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
        }else{
            $uploadStatus = 1;
            
            // Upload attachment file
            if(!empty($_FILES["attachment"]["name"])){
                
                // File path config
                $targetDir = "uploads/";
                $fileName = basename($_FILES["attachment"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }
            
            if($uploadStatus == 1){

                $htmlContent = '<p><b>Name:</b> '.$name.'</p>
                <p><b>Email:</b> '.$from.'</p>
                <p><b>Phone:</b> '.$phone.'</p>
                <p><b>Email:</b> '.$email.'</p>
                <p><b>Subject:</b> '.$subject.'</p>
                <p><b>Message:</b><br/>'.$message.'</p>';

                $headers = "From: $from  \r\n";
                $headers .= "Reply-To: $from \r\n";
                $headers .= "MIME-Version: 1.0\r\n";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){
                    
                    // Boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // headers for attachment 
                    $headers .= "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                    
                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    
                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $from;
                    
                    // Send email
                    $mail = mail($to, $subject, $message, $headers, $returnpath);
                    
                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type headers for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($to, $subject, $htmlContent, $headers); 

                }
                
                // If mail sent
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    
                    $postData = '';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
}
