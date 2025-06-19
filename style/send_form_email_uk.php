<?php 
/*
 $to = "design@borange.pt"; 

 $assunto = $_REQUEST['subject'] ;  //n usado

 $email = $_REQUEST['email'] ;

 //$telefone = $_REQUEST['telefone'] ; 

 $message = $_REQUEST['mensagem'] ; 

 $subject = "João Queirós | Graphic Design - " . $_REQUEST['name']; 

 $headers = "From: $email"; 

 //$sent = mail($to, $subject, $message, $headers) ; 
 $sent = mail("design@borange.pt", "teste", "teste", "From: a.s.cardoso1998@gmail.com") ; 

    if($sent){
        print "Your email was sent successfully!"; 
    } else {
        print "We encountered an error while sending your e-mail"; 
*/
//a.s.cardoso1998@gmail.com
/*
$to = 'a.s.cardoso1998@gmail.com';
$subject = 'teste email';
$message = 'teste email';
$headers = 'From: teste <teste@gmail.com> \r\n';
$sent = mail($to, $subject, $message, $headers);
if($sent){
    print "Your email was sent successfully!"; 
} else {
    var_dump($sent);
    //print "We encountered an error while sending your e-mail"; 
}*/ 

//echo 'PHP version: ' . phpversion();   ->     5.6.40
$to = "a.s.cardoso1998@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "someonelse@example.com";
$headers = "From:" . $from;
$send = mail($to,$subject,$message,$headers);
$errorMessage = error_get_last()['message'];
echo $errorMessage;
 ?> 