<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];

// multiple recipients
$to  = 'fernando.mendes@webca.com.br'; // note the comma


// subject
$subject = 'Contato atraves do site - odontodeldotto.com.br';

// message
$message = '
<html>
<body>
  <p>Dados preenchidos:</p>
  <table>
    <tr>
      <td>Nome: </td>
      <td>'.$nome.'</td>
    </tr>
    <tr>
      <td>Email: </td>
      <td>'.$email.'</td>
    </tr>
    <tr>
      <td>Telefone: </td>
      <td>'.$telefone.'</td>
    </tr>
    <tr>
      <td>Mensagem: </td>
      <td>'.$mensagem.'</td>
    </tr>
  </table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Fernando Mendes <fernando.mendes@webca.com.br>' . "\r\n";
$headers .= 'From: Fernando Mendes <fernando.mendes@webca.com.br>' . "\r\n";

// Mail it
try{
	if(!mail($to, $subject, $message, $headers)){
		throw new Exception('mail failed');
	}else{
		echo 'mail sent';
	}
}catch(Exception $e){
	echo $e->getMessage() ."\n";
}

?>
