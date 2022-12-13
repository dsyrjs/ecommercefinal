<?php
// include the class
include "../../classes/userLogin.php";
use PHPMailer\PHPMailer\PHPMailer;
// Data from Admin create Player
$username = $_POST['uname'];
$password = $_POST['pass'];
$fullname = $_POST['fullname'];
$number = $_POST['number'];
$email = $_POST['email'];
$body = $_POST['body'];
$subject = $_POST['subject'];

$account = new user_login;
if ($account->checkIfExisting($username)){
    echo "exists";
}else{
    $result = $account->register($fullname, $password, $username, $email,  $number);
    if ($result > 0){
        $body = str_replace("id_no","$result","$body");
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
    }else{
        echo "error";
    }
}
?>