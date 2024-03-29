<?php
require_once("../../getstarted/connect.php");
date_default_timezone_set('Asia/Calcutta');
if (isset($_POST['submit'])) {
	require 'phpmailer/PHPMailerAutoload.php';
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$date = date("d/M/Y D");
	$time = date("h:i A");

	$query = mysqli_query($db, "insert into message(name,email,message,senddate,sendtime) values('$name','$email','$message','$date','$time')");
	// if ($query) {
	$mail = new PHPMailer;

	// $mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = '';                 // SMTP username
	$mail->Password = '';                           // SMTP password
	// username and password removed for the security reasons
	//but you can use your gmail id and password
	// you just need to turn on less secure apps (https://myaccount.google.com/lesssecureapps)
	//and enable display unlock captcha (https://accounts.google.com/b/0/DisplayUnlockCaptcha)
	// after that you are good to go
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom($email, $name);
	$mail->addAddress('sanchitgupta0144@gmail.com');     // Add a recipient
	// $mail->addAddress('rishabh469mehta@gmail.com');
	$mail->addReplyTo($email, $name);
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'Message from: ' . $name;
	$mail->Body = "
    <table width='100%' style='background-image: linear-gradient(to left, #83358a, #9e349b, #bb30ab, #d927b8, #f90dc4);'
		border='0' cellpadding='0' cellspacing='0'>
		<tr>
			<td>
				<table bgcolor='#ffffff' style='width: 100%;
			max-width: 600px;' align='center' cellpadding='0' cellspacing='0' border='0'>
					<tr>
						<td
							style='padding: 40px 30px 20px 30px;background-image: radial-gradient(circle, #f30eef, #ef0ef0, #ea0ff2, #e610f3, #e111f4, #db12f3, #d612f2, #d013f1, #c813ed, #c013e9, #b912e4, #b112e0);'>
							<table width='70' align='left' border='0' cellpadding='0' cellspacing='0'>
								<tr>
									<td height='70' style='padding: 0 20px 20px 0;'>
										<img style='height:auto;'
											src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/icon.gif'
											width='70' height='70' border='0' alt='' />
									</td>
								</tr>
							</table>
							<table align='left' border='0' cellpadding='0' cellspacing='0'
								style='width: 100%; max-width: 425px;'>
								<tr>
									<td height='70'>
										<table width='100%' border='0' cellspacing='0' cellpadding='0'>
											<tr>
												<td style='padding: 0 0 0 3px;font-size: 15px;
			color: #ffffff;
			font-family: sans-serif;
			letter-spacing: 5px;'>
													To
												</td>
											</tr>
											<tr>
												<td style='padding: 5px 0 0 0;color: #153643;
			font-family: sans-serif;font-size: 33px;
			line-height: 38px;
			font-weight: bold;'>
													eduSpace Team
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style='padding: 30px 30px 30px 30px;border-bottom: 1px solid #f2eeed;'>
							<table width='100%' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td style='color: #153643;
			font-family: sans-serif;padding: 0 0 15px 0;
			font-size: 24px;
			line-height: 28px;
			font-weight: bold;'>
										Dear eduSpace Team,
									</td>
								</tr>
								<tr>
									<td style='font-size: 16px;
			line-height: 22px;color: #153643;
			font-family: sans-serif;'>
										 $message
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td style='padding: 30px 30px 30px 30px;border-bottom: 1px solid #f2eeed;'>
							<table align='right' border='0' cellpadding='0' cellspacing='0'
								style='width: 100%; max-width: 380px;'>
								<tr>
									<td style='text-align:right;font-size: 16px;
			line-height: 22px;color: #153643;
			font-family: sans-serif;'>
										<b>From: </b> $name<br>
										<b>Email: </b> $email<br>
										<b>Date: </b> $date<br> 
										<b>Time: </b> $time<br> 
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td
							style='padding: 20px 30px 15px 30px;background-image: radial-gradient(circle, #f30eef, #ef0ef0, #ea0ff2, #e610f3, #e111f4, #db12f3, #d612f2, #d013f1, #c813ed, #c013e9, #b912e4, #b112e0);'>
							<table width='100%' border='0' cellspacing='0' cellpadding='0'>
								<tr>
									<td align='center' style='font-family: sans-serif;font-size: 14px;color: #ffffff;'>
										&copy; eduSpace, India 2020<br />
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
    
	";
	$mail->AltBody = 'Name: ' . $name . '\r\nEmail: ' . $email . '\r\nMessage: ' . $message;
	// $mail->Body    = '<h1 style="align:center;">Name: ' . $_POST['name'] . '<br>Email: ' . $_POST['email'] . '<br>Message: ' . $_POST['message'] . '</h1>';
}
if (!$mail->send()) {
	echo '<script>document.location.href = "contact1.php?code=fail"</script>';
} else {
	echo '<script>document.location.href = "contact1.php?code=success";</script>';
}
// } else {
// 	echo '<script>document.location.href = "contact1.php?code=error"</script>';
// }
