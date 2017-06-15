<?php
include ("conexao.php");
header('Content-Type: text/html; charset=UTF-8');

//Seleciona a base de dados

$email ="" ;
$password = "";
$nome_user = "";
$tipo= "";

$nome_user='';

if(!empty($_POST)){
	$password1 = ($_POST['password']);
    $email = $_POST['email'];
    $password = md5($password1);
    $nome_user= $_POST['nome_user'];
    $tipo = $_POST['tipo'];


    $sql = "INSERT INTO login (email, password, nome_user, tipo) VALUES ('$email','$password','$nome_user','$tipo')";
//$retval = mysqli_query( $sql, $conn );

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registo efetuado com sucesso!');top.location.href='registo_view.php';</script>";
        echo "<br/> style='text-align:center;'  <a href='registo_view.php'>Voltar ao ínicio</a>";
		
		require 'PHPMailer-master/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 2;                               // Enable verbo1se debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'teenpower4@gmail.com';                 // SMTP username
		$mail->Password = 'turmacis';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		$mail->setFrom('teenpower4@gmail.com', 'TeenPower');
		$mail->addAddress($email);     // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Registo do website TeenPower';
		$mail->Body    = '<tr><p> Ola '.$nome_user.'! </p></tr>
						<tr><p>  Muito obrigado pelo interesse em participar na comunidade TeenPower, </p></tr>
						<tr><p>  Os dados de autentificação que irá utilizar para entrar no website TeenPower serão o seu email e a sua password,</p></tr>
						<tr><p>  Os seus dados de autentificação:</p></tr>
						<tr> <p> &nbsp &nbsp O seu email é :<strong> '.$email.'</strong></tr></p>
						<tr> <p> &nbsp &nbsp A sua password é :<strong> '.$password1.'</strong>  </tr></p>
						<tr><p>  Esperamos que goste e usufra das utilidades do nosso Website! </p></tr>
						<tr><p>  Atenciosamente, </p></tr>
						<tr><p>  Administração do TeenPower </p></tr>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->CharSet = 'UTF-8';
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Mensagem enviada com sucesso';
		}
		
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}else{
    require('registo_view.php');
}
mysqli_close($conn);
//echo "<script>alert('Registo efetuado com sucesso!');top.location.href='logA.html';</script>";
//echo "<br/> style='text-align:center;'  <a href='logA.html'>Voltar ao ínicio</a>";


?>
