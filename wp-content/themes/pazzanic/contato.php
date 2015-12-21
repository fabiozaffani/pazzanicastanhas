<?php
/*
Template Name: Pazzani Castanhas Contact Form
*/

global $General;

get_header(); ?>

	<div id="main">
		<?php if (function_exists('breadcrumb')) breadcrumb(); ?>

  <?php

  if (isset($_POST['Enviado'])){
      $Nome = $_POST['Nome'];
      $Email = $_POST['Email'];
	  $Telefone = $_POST['Telefone'];
      $Mensagem = $_POST['Mensagem'];
      $ErrorMessage = '';

        // Verificando/validando o nome do usuario
       if(trim($Nome) === '') {
         $ErrorMessage .= 'Digite seu Nome.<br/>';
         $hasError = true;
        } else {
         $name = trim($Nome);
        }

      // Verificando/validando email do usuario
       if(trim($Email) === '')  {
         $ErrorMessage .= 'Digite seu E-mail.<br/>';
         $hasError = true;
        } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+.[A-Z]{2,5}$", trim($Email))) {
         $ErrorMessage .= 'Digite um email v&aacute;lido.';
         $hasError = true;
        } else {
         $email = trim($Email);
        }

       //Verificando/validando se ha comentarios
       if(trim($Mensagem) === '') {
         $ErrorMessage .= 'Digite uma mensagem<br/>';
         $hasError = true;
        } else {
           if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($Mensagem));
           } else {
            $comments = trim($Mensagem);
          }
       }

       //Se nao houver erros enviar o email
       if(!isset($hasError)) {
			$fromEmail = $Email;
			$fromEmailName = $Nome;
			$toEmailName = "Contato Pazzani Castanhas";
			$toEmail = "vendas@amazonbrazilnuts.com.br";

			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
			$headers .= 'To: '.$toEmailName.' <'.$toEmail.'>' . "\r\n";
			$headers .= 'From: '.$fromEmailName.' <'.$fromEmail.'>' . "\r\n";
			$headers .= 'Cc: fabiozaffani@gmail.com' . "\r\n";

			$subject = "Contato do Site Pazzani Castanhas";
			$message = '<h2>Mensagem do Site Pazzani Castanhas</h2>
                    <table cellpadding="5" cellspacing="0" align="left" width="600">
                      <tr>
                        <td>Nome: </td><td>' . $name . '</td>
                      </tr>
                      <tr>
                        <td>Email: </td><td>' . $email . '</td>
                      </tr>
					  <tr>
					  	<td>Telefone de Contato: </td><td>' . $Telefone . '</td>
					  </tr>
                      <tr>
                        <td>Mensagem: </td><td>' . $comments .'</td>
                       <tr/>
                     </table>';

			mail($toEmail,'=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);

			$emailSent = true;
       }
  }
     //Se o email foi enviado enviar uma mensagem de agradecimento
    if(isset($emailSent) && $emailSent == true) {
  ?>
    <h1>Sucesso!</h1>
      <p>Obrigado, <?php echo $name; ?>. Seu email foi enviado com sucesso e entraremos em contato o mais rápido possível.</p>
  <?php
    // Caso haja erros...
    } else {
  ?>
    <h1>Fale Conosco</h1>
      <form id="FaleConoscoPagina" method="post" action="<?php bloginfo('url');?>/contato.html" class="round">
            <p>Voc&ecirc; pode entrar em contato conosco através do telefone <strong>(11) 3023-6813 </strong>, pelo e-mail <strong>vendas@amazonbrazilnuts.com.br</strong> ou pelo formulário abaixo:</p>
            <small>* campos obrigatórios</small>
		    <p class="message"><?php echo $ErrorMessage; ?></p>
            <ul class="formList clearfix">
              <li>
                <label for="FaleConoscoPaginaNome">Nome*</label>
                <input type="text" name="Nome" id="FaleConoscoPaginaNome" value="<?php if(isset($Nome)){ echo $Nome;}; ?>" class="required round" />
              </li>
              <li>
                <label for="FaleConoscoPaginaEmail">Email*</label>
                <input type="text" name="Email" id="FaleConoscoPaginaEmail" value="<?php if(isset($Email)){ echo $Email;}; ?>" class="required round" />
              </li>
              <li>
              	<label for="FaleConoscoPaginaTelefone">Telefone para Contato</label>
                <input type="text" name="Telefone" id="FaleConoscoPaginaTelefone" value="<?php if(isset($Telefone)){ echo $Telefone;};?>" class="required round" />
              </li>
              <li>
                <label for="FaleConoscoPaginaMensagem">Mensagem*</label>
                <textarea name="Mensagem" id="FaleConoscoPaginaMensagem" rows="10" cols="40" class="required round"><?php if(isset($Mensagem)){ echo $Mensagem;}; ?></textarea>
              </li>
              <input type="hidden" id="FaleConoscoPaginaEnviado" name="Enviado" value="true" />
            </ul>
            <input type="submit" class="InputSubmit" value="Enviar Mensagem" name="Enviar" id="" class="round" />
        </form>
  <?php } ?>
</div> <!-- Fim do #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
