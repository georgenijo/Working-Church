<?
$name  = $_REQUEST["name"];
$email = $_REQUEST["email"];
$mobile   = $_REQUEST["mobile"];
$msg   = $_REQUEST["msg"];
$to    = "StBasilsBoston@gmail.com"; /* <= Change this Email ID to yours */
if (isset($email) && isset($name) && isset($msg)) {
    $subject = "$name sent you a message via StBasilsBoston website"; /* <= Change the Subject If you want */
		$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= "From: ".$name." <".$email.">\r\n"."Reply-To: ".$email."\r\n" ;
$msg     = "From: $name<br/> Email: $email <br/> Mobile: $mobile <br/>Message: $msg";
	
   $mail =  mail($to, $subject, $msg, $headers);
  if($mail)
	{
		echo 'success';
	}

else
	{
		echo 'failed';
	}
}

?>