<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $file = $_FILES["file"]["tmp_name"];
        $file_name = $_FILES["file"]["name"];
        
        // Define your email address
        $to = "samyakmaitre@gmail.com";
        
        // Email subject and message
        $subject = "File Upload";
        $message = "A file has been uploaded: $file_name";
        
        // Send the email with the file as an attachment
        $headers = "From: samyakmaitre2003@gmail.com";
        $headers .= "\r\nReply-To: samyakmaitre2003@gmail.com";
        $headers .= "\r\nMIME-Version: 1.0";
        $headers .= "\r\nContent-Type: multipart/mixed; boundary=\"mixedpart\"";
        $message .= "\r\n\r\n--mixedpart\r\n";
        $message .= "Content-Type: application/octet-stream; name=\"$file_name\"\r\n";
        $message .= "Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $message .= chunk_split(base64_encode(file_get_contents($file)));
        
        if (mail($to, $subject, $message, $headers)) {
            echo "File uploaded and email sent successfully!";
        } else {
            echo "Email sending failed.";
        }
    } else {
        echo "File upload failed with error code: " . $_FILES["file"]["error"];
    }
} else {
    echo "Invalid request.";
}
?> -->
