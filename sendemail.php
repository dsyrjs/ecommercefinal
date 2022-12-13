<?php
$body = $_POST["body"];
$email = $_POST["email"];
$subject = $_POST["subject"];
use PHPMailer\PHPMailer\PHPMailer;
$body = $body;
        $name = "Clothing E-commerce"; 
	    $subject = $subject;
		$body = $body;
		$email = $email;
		$from = "Jayraldalbos101@gmail.com";  // you mail
		$password = "duxfafjlfoquslif";  // your mail password

				// Ignore from here

				require_once "../phpmailer/PHPMailer.php";
				require_once "../phpmailer/SMTP.php";
				require_once "../phpmailer/Exception.php";
				$mail = new PHPMailer();

				// To Here

				//SMTP Settings
				$mail->isSMTP();
				// $mail->SMTPDebug = 3;  Keep It commented this is used for debugging                          
				$mail->Host = "smtp.gmail.com"; // smtp address of your email
				$mail->SMTPAuth = true;
				$mail->Username = $from;
				$mail->Password = $password;
				$mail->Port = 587;  // port
				$mail->SMTPSecure = "tls";  // tls or ssl
				$mail->smtpConnect([
				'ssl' => [
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
					]
				]);

				//Email Settings
				$mail->isHTML(true);
				$mail->setFrom($from, $name);
				$mail->addAddress($email); 
				
				$mail->Subject = ("$subject");
				$mail->Body = $body;
				$mail->send();
                echo "success";
?>