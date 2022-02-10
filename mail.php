<?php
//get data from form  
if
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$message= $_POST['message'];
$number = $_POST['mobile'];

$to = "deeptidinkar333@gmail.com";

$subject = "Mail From tarun";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile number =". $number;

$headers = "From:tarunlalkumar@gmail.com"."\r\n".
"CC:somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>