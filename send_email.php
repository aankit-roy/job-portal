
<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $to = "aankit.roy54321@gmail.com";
    $subject = "New contact form submission";
    // $message = "Name: " . $name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;

    $headers= "From:"  .$name . "<" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/plain; charset= utf-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo "email sent  Successfully";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }

} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}




?>