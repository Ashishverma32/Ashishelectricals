<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$massage = $_POST["massage"];

 $email_from = "www.akvermahood100001@gmail.com";
 $email_subject = "New form submission";
 $email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n". 
                 "User Massage: $massage.\n";

$to = "www.akvermahood100001@gmail.com";
$headers = "From : $email_from \r\n";
$headers .="Replay-To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: index.html");


?>