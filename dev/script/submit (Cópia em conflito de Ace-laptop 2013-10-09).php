<?php

 //print_r($_POST);exit; //   mostrar apenas variaveis e nao fazer nada!!!
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if($_POST['email']){ $email = $_POST['email']; } else { $email = "---"; }
	if($_POST['initpoint']){ $initpoint = $_POST['initpoint']; } else { $initpoint = "---"; }
	if($_POST['endpoint']){ $endpoint = $_POST['endpoint']; } else { $endpoint = "---"; }
	if($_POST['workstyle']){ $workstyle = $_POST['workstyle']; } else { $workstyle = "---"; }
	if($_POST['worktype']){ $worktype = $_POST['worktype']; } else { $worktype = "---"; }
	if($_POST['pagesnr']){ $pagesnr = $_POST['pagesnr']; } else { $pagesnr = "---"; }
	if($_POST['workmedia']){ $workmedia = $_POST['workmedia']; } else { $workmedia = "---"; }
	if($_POST['minutosnr']){ $minutosnr = $_POST['minutosnr']; } else { $minutosnr = "---"; }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$subject = 'Pedido de orçamento';
$to = 'ace.wf.home@gmail.com';

$message = '
<p> EMAL: '.$email.'</p>
<p> LÍNGUA DE PARTIDA:'.$initpoint.'<br>
LÍNGUA DE CHEGADA:'.$endpoint.'</p>
<p> TIPO DE TRABALHO:<br>TRADUÇÃO ESCRITA<br>
Estilo de tradução:'.$workstyle.'<br>
Tipo:'.$worktype.'<br>
Tamanho:'.$pagesnr.'</p>
<p>Tradução audiovisual:'.$workmedia.'<br>
Tamanho:'.$minutosnr.'</p>';
	
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//definições de email
		$from = "Gibberish <noreplay@gibberish.pt>";
		
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