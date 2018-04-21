<?php  

$date = date("d/m/Y h:i");
$ip = getenv("REMOTE_ADDR");
$navegador = $_SERVER['HTTP_USER_AGENT']; 
$nomeremetente = $_POST["nomeremetente"]; 
$emailremetente = $_POST["emailremetente"]; 
$email = 'youremail@domain.com'; // Insert the email that will receive
$telefone = $_POST["telefone"];
$assunto = $_POST["assunto"]; 
$mensagem = $_POST["mensagem"]; 

$MailRecipiente = $email;     
$MailAssunto    = $assunto; 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: $email\r\n"; 
$headers .= "Return-Path: $email\r\n"; 
                 
$msg = ' 
<i>Enviado por:</i> <br/><br/>
<b>Nome:</b> '.$nomeremetente.'<br/> 
<b>Email:</b> '.$emailremetente.'<br/> 
<b>Telefone:</b> '.$telefone.'<br/>
<b>Assunto:</b> '.$assunto.'<br/><br/> 
<b>Mensagem:</b> '.$mensagem.'<br/><br/> 
<b>IP do Visitante:</b> '.$ip.'<br/> 
<b>Navegador do Visitante:</b> '.$navegador.'<br/> 
<b>Data e Hora:</b> '.$date.'<br/> 
                         '; 
mail($MailRecipiente,$MailAssunto,$msg,$headers);

// AQUI SE COLOCA A COPIA CASO QUEIRA QUE O FORMULARIO ENVIE (DUPLIQUE QUANTAS VEZES QUISER)
mail('youremail@domain.com', $MailAssunto,$msg,$headers);
mail('youremail@domain.com', $MailAssunto,$msg,$headers);

//AUTO RESPOSTA 
$headers_ = "MIME-Version: 1.0\r\n"; 
$headers_ .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers_ .= "From:  $email\r\n"; 
$site = "www.site.com"; 
$titulo = "Form do site"; 
$mensagem = " 
<br/> 
Hello $nomeremetente!<br/> 

Thanks for getting touch.<br/> 
We'll response really soon.<br/> 
Regards<br/>"; 

mail($emailremetente,$titulo,$mensagem,$headers_); 
echo "<script>location.href='sucesso.php'</script>"; // Landing page

?>
