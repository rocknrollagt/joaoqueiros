<?php 

 $to = "design@borange.pt"; 

 $assunto = $_REQUEST['assunto'] ; 

 $email = $_REQUEST['email'] ; 

 $telefone = $_REQUEST['telefone'] ; 

 $message = $_REQUEST['mensagem'] ; 

 $subject = "João Queirós | Graphic Design - " . $_REQUEST['nome']; 

 $headers = "From: $email"; 

 $sent = mail($to, $subject, $message, $headers) ; 

 if($sent) 

 {print "Your email was sent successfully!"; }

 else 

 {print "We encountered an error while sending your e-mail"; }

 ?> 