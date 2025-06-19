<?php 

if( $_POST )
{
	 $to = "joa_oj_jj@hotmail.com"; 
	 $line = "\r\n\r\n";
	 

	  $message .= " DADOS CLIENTE: " . $line . $line;

$message .= " Nome Completo: " . $_POST['nomecompleto'] . $line;
$message .= " E-mail: " . $_POST['email'] . $line ;
$message .= " Telefone: " . $_POST['telefone'] . $line ;
$message .= " Observações: " . $_POST['observacoes'] . $line;


	  $message .= " BRIEF LOGO: " . $line . $line;
	 
	 
	 $message .= " Nome da Empresa: " . $_POST['nome'] . $line . $line;
	 
	  $message .= " Slogan da Empresa: " . $_POST['slogan'] . $line . $line;
	  

	 $subject = " Logo Design Brief - Formulário: " . $_POST['nome']; 
	 $headers = "From: ".$_POST['email']; 
	 $sent = mail($to, $subject, $message, $headers) ; 
	 if($sent) 
		header("Location: ".$_SERVER["HTTP_REFERER"]."?sucesso=email");
	 else 
		header("Location: ".$_SERVER["HTTP_REFERER"]."?erro=email");
} 
 exit;
?> 
 