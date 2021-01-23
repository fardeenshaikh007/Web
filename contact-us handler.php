<?php
  $name = $_POST["name"];
  $Visitor_email = $_POST["email"];
  $message = $_POST["message"];

  $email_from ="Fardeenshaikh";
  $email_subject ="New Form Submission";

  $email_body = "User Name $name\n".
                 "User Email: $Visitor_email\n".
                 "User Message : $message\n";



  $to ="fardeenshaikh996@gmail.com";
  $headers = "from: $email_from\r\n";
  $headers = "Reply-to: $Visitor_email\r\n";
  $headers = "Message: $message\r\n";
  mail($to,$email_subject,$email_body,$headers);

  header("Location: contact-us.html");

  



?>