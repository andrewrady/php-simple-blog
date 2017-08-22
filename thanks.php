<?php 

require_once 'inc/bootstrap.php';
require_once 'inc/header.php';


if($_SERVER["REQUEST_METHOD"] == 'POST') {
	//add validation

	$email = request()->get('email');
	$name = request()->get('name');
	$msg = request()->get('msg');

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'bornluck13@gmail.com';                 // SMTP username
	$mail->Password = 'inwha1270';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom($email, 'Mailer');
	$mail->addAddress('andrew.arsoftware@gmail.com', 'Cari Jewett');     // Add a recipient
	$mail->addReplyTo($email);

	$mail->isHTML(false);                                  // Set email format to HTML

	$mail->Subject = 'Craft Cari Website Form ' . $name;
	$mail->Body    = $msg;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}
}

?>
<div class="container">
	<h1>Thanks for sending me an email!</h1>
	<p>I will get back to you shortly!</p>
</div>

<?php 

require_once '/inc/footer.php';

?>
