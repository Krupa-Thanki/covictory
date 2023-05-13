<?php
//get data from form 
$from = $_POST['unm']; 
$email= $_POST['email'];
$message= $_POST['msg'];
$to = "thankikrupa6@gmail.com";
$subject = "Mail From website";
$txt ="Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@Covictory.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!= null){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:returnemail.php");
?>