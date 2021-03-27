<?php
include('../smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="mdtalhaking786@gmail.com";
	$mail->Password="123mdsr123";
	$mail->SetFrom($email);
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject="Modassir Programmer";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
	  echo "<script>
                alert('');
            </script>";
	}