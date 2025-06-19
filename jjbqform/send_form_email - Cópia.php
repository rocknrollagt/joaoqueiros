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
	  
	    $message .= " Área de negócio: " . $_POST['areanegocios'] . $line . $line;
	 
	 $message .= " 3 Items a Comunicar no logo: " . $line . $_POST['items'] . $line . $line; 
	 
	 
	 
	 	 $message .= " Escolha o tipos(s) de logo que pretende ver: " . $line; 
	  $message .= " Wormark: " . $_POST['wordmark'] . $line; 
	  	  $message .= " Letterform Mark: " . $_POST['letterform'] . $line; 
		  $message .= " Logo Abstracto: " . $_POST['abstracto'] . $line; 
		   $message .= " Logo Figurativo: " . $_POST['figurativo'] . $line; 
		   		   $message .= " Emblemas: " . $_POST['emblemas'] . $line; 
				    $message .= " Mascote: " . $_POST['mascote'] . $line; 
					  $message .= " Web 2.0: " . $_POST['web2'] . $line . $line; 
	 
	 
	  $message .= " Preferências de Cor: " . $_POST['cor'] . $line; 
	  
	   $message .= " As nossas ideias e informações adicionais: " . $_POST['ideias'] . $line; 
	   
	   $message .= " Onde vai ser usado o logo: " . $_POST['ondeeusado'] . $line; 
	   
	   
	   
	    $message .= " Estilos de logo: " . $line;
		$message .= " 1 2 3 4 5 : " . $line;
	   $message .= " Feminino - Masculino: " . $_POST['1'] . $line;
	    $message .= " Moderno - Clássico: " . $_POST['2'] . $line;
		$message .= " Exótico - Comum: " . $_POST['3'] . $line;
		$message .= " Desportivo - Elegante: " . $_POST['4'] . $line;
		$message .= " Aventureiro - Seguro: " . $_POST['5'] . $line;
		$message .= " Calmo - Forte: " . $_POST['6'] . $line;
		$message .= " Subtil - Brilhante: " . $_POST['7'] . $line;
		$message .= " Cinzento - Colorido: " . $_POST['8'] . $line;
		$message .= " Simples - Complexo: " . $_POST['9'] . $line;
		/*$message .= " Rude - Definido: " . $_POST['10'] . $line;*/
		$message .= " Brincalhão - Sério: " . $_POST['11'] . $line;
		$message .= " Necessidade - Luxúria: " . $_POST['12'] . $line;
 
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
 