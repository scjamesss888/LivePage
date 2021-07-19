if( empty ($errors)){
 $to = $myemail;
 $email_subject = "Feedback Form Submission: $name";
 $email_body = "Hello $name \n"
 " Thank you for your feed back \n";
 $headers = "From - Colten_Spencer@ URL";
 mail($to,$email_subject,$email_body,$headers);
 
 header('Location: Feedback.html');
 }