<?php

 //print_r($_POST);exit; //   mostrar apenas variaveis e nao fazer nada!!!
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if($_POST['initpoint']){ $nome = $_POST['initpoint']; } else { $nome = "---"; }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$subject = $nome.', aqui está o nosso catálogo de Caixa de Cartão com Tampa. | Superofi Portugal';
$to = 'ace.wf.home@gmail.com';

$message = '
<p>Estimado '.$nome.'</p>
<p>Conforme requerido, vimos por este meio enviar-lhe o nosso catálogo de Caixa de Cartão com Tampa.</p>
<p>Para consultar o catalogo basta clicar no <i>link</i> em baixo:</p>
<p>&gt;&gt; <a href="http://promocoes.superofi.pt/20130227/Catalogo_Precos/">Catálogo de Caixa de Cartão com Tampa</a></p>
<p><br>
Para qualquer esclarecimento, não hesite em nos contactar.</p>
<p>Equipa Superofi.<br>
  219 820 116<br>
  info@superofi.pt
</p>
';
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//definições de email
		$from = "Superofi Portugal <ace_wf@hotmail.com>";
		
		$xheaders = "";
		$xheaders .= "From: $from\n";
		$xheaders .= "X-Sender: <$from>\n";
		$xheaders .= "X-Mailer: PHP\n"; // mailer
		$xheaders .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
		$xheaders .= "Content-Type:text/html; charset=\"utf-8\"\n";
		
	//envio
		mail($to, $subject, $message, $xheaders,'-f ace.wf.home@gmail.com'); 
	
	//finalizar
		echo "email sended";
		//echo $html_END;
?>