<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['mobilenumber'];
$message= $_POST['message'];
$to = "chigurlanarayana007@gmail.com";
$subject = "Mail from Narayana Chigurla";
$txt ="Name: ". $name . 
"\r\n Email: " . $email. 
"\r\n Mobile Number :" . $number. 
"\r\n Message :" . $message ;
$headers = "From:chigurlanarayana007@gmail.com " . "\r\n" .
"CC: chigurlanarayana007@gmail.com ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
   
}

//  sales@loftylabs.in
//  narenmuvva@gmail.com
//redirect

header("location:thankyou.html");

// this is for message succesfully sent msg in contact page
//  echo("Your message has been sent. Thank you!");
?>


<!--$file = $_POST['file'];-->
 <!--."\r\n file: " . $file;-->