<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" /> 
<meta name="keywords" content="" />
<meta name="author" content="" />

 
<link href="css/formulario.css" rel="stylesheet" type="text/css"/>
<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="css/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

<title>Formulário de Envio com Auto Resposta</title>



</head>



<body>

               
                
                
                <div class="formulario">
                
<form action="envia.php" method="post">                	

						<div class="texto">Nome </div>
                    	<div class="campo"><span id="sprytextfield1">
                    	  <input name="nomeremetente" type="text" class="campo1" />
   	      <span class="textfieldRequiredMsg">Digite seu nome</span></span></div>

					  <div class="texto">E-mail</div>
                   	  <div class="campo"><span id="sprytextfield2">
                      <input name="emailremetente" type="text" class="campo1" />
<span class="textfieldRequiredMsg">Digite seu e-mail</span><span class="textfieldInvalidFormatMsg">Formato inválido</span></span></div>

					  <div class="texto">Telefone</div>
                    	<div class="campo"><span id="sprytextfield3">
                    	  <input name="telefone" type="text" class="campo2" id="phone" />
   	      <span class="textfieldRequiredMsg">Digite seu telefone de contato</span></span></div>

					  <div class="texto">Assunto</div>
                    	<div class="campo"><span id="sprytextfield4">
                    	  <input name="assunto" type="text" class="campo1" />
   	      <span class="textfieldRequiredMsg">Digite o assunto</span></span></div>

					  <div class="texto">Mensagem</div>
                   	    <div class="campo"><span id="sprytextarea1">
                   	      <textarea name="mensagem" cols="" rows="" class="textarea"></textarea>
        <span class="textareaRequiredMsg">Deixe sua mensagem</span></span></div>
                        
                       <p><strong></strong></p><input name="envia" type="submit" value="Enviar" />                       
                        
                    </form>
                
                
                
                
                </div><!--formulario-->
                

<script type="text/javascript" src="js/jquery-1.4.4.js" language="javascript"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.3.js" language="javascript"></script>
<script type="text/javascript" src="js/SpryValidationTextField.js" language="javascript"></script>
<script type="text/javascript" src="js/SpryValidationTextarea.js" language="javascript"></script>



<script language="javascript" type="text/javascript">
jQuery(function($){
   $("#phone").mask("(99) 9999-9999");
});

</script>


<script type="text/javascript">

	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
	var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
	var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
	var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");

</script>



</body>
</html>
