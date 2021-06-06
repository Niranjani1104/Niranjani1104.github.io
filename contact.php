<?php
//variable setting
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//check input fields
/*if(empty($name) || empty($email) ||empty($message))
{
    echo "Please fill all the fields";
}
else
{
    mail("niranjanipurushothaman11@gmail.com", "Email form", $message, "From: $name < $email>");
    echo "<script type='text/javascript'>alert('Your message sent successfully');
        window.history.log(-1);
    </script>";
}*/
$email_from = 'niranjanipurushothaman11@gamil.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Message: $message.\n";
$to = "niranjanipurushothaman11@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


?>