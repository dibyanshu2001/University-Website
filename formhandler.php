<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$branch=$_POST['branch'];
$number=$_POST['contact'];
$message=$_POST['message'];

$email_from='info@divyanshujain.000webhostapp.com';
$email_subject='New Form Submission';
$email_body="User_name: $name.\n".
            "User_Email: $visitor_email\n."
            "User_branch: $branch\n."
            "User_number: $number\n."
            "User_message: $message\n.";
$to='divyanshujain275@gmail.com';
$headers= "from: $email_from \r\n.";
$headers .="Reply-to $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
$header("location : contact.html");
?>