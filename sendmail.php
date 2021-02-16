<?php

$remail=isset($_REQUEST['email'])?$_REQUEST['email']:$_POST['email'];
//echo $remail;

if($remail!="")
{
	include("../connect.php");
	$query="SELECT * FROM tbl_student where email='$remail'";
	$res=mysqli_query($con,$query);
	if($row=mysqli_fetch_assoc($res))
	{
		
		$name=$row['name'];
		$pass=$row['password'];
		$email=$row['email'];
		//echo $tokenkey;
	}
}
$rpass=isset($_REQUEST['tokenkey'])?$_REQUEST['tokenkey']:$tokenkey;
//echo "<br/>";
//echo $rpass;
//echo "<br/>";
$host_lk=$_SERVER['HTTP_HOST'];
$link=$host_lk."/Email_Verification_using_token_key/verifyemail.php?tokenkey=".$rpass;
//echo $link


require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
//---------------before you configure this check that you have less-secure-enabled----------------
//$mail->SMTPDebug = 2;
$mail->isSMTP();      
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                             
$mail->Host = 'smtp.gmail.com'; // Set mailer to use SMTP
//$mail->Host = 'tls://smtp.gmail.com:587';                   // Specify main  	and backup SMTP servers
$mail->SMTPAuth = true;					// Enable SMTP authentication
$mail->Username = 'awnishmmg.a41@gmail.com';          // SMTP username
$mail->Password = 'awi900mmg@'; // SMTP password
$mail->SMTPSecure = 'tls';                        // Enable TLS encryption,ssl `ssl` also accepted
$mail->Port = 587;                       // TCP port to connect to 465 or 587

$mail->setFrom('awnishmmg.a41@gmail.com', 'Softpro');
$mail->addReplyTo('awnishmmg.a41@gmail.com', 'Softpro');

$mail->addAddress($remail);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Your Name is</h1>';
$bodyContent .= '<p>Your name is '.$name.' Your Password is'.$pass.'</p>';

$mail->Subject = 'Account Verification';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
	header("location:emailerror.php");
	
} else {
    echo 'Message has been sent';
		//header("location:../setpass.php");
		echo "<script>alert('Email Sent Successfully');window.location.href='../index.php';</script>";
	
}

?>
