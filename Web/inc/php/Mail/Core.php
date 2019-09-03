<?php
class Core{
    Private $Debug = False;

    Private $Host = "smtp.seznam.cz";
    Private $Port = 587; // or 465
    Private $SMTPSecure = ""; // ssl or tls
    Private $Auth = true;
    Private $Username = "willinglydestek@gmail.com";
    private $SenderEmail = "willingly@mail.com.tr";
    Private $Password = "Peacher01";
    Private $SenderName = "Willingly";

    public function __construct($MailTo,$Subject,$Body) { 
        if($this->Debug == true){
            echo !extension_loaded('openssl')?"Open SSL Not Available<br>":"Open SSL Available<br>";
        }
        require("phpMailerLib/class.phpmailer.php");
        $mail = new PHPMailer();
        try
        {
            $mail->IsSMTP();
            $mail->SMTPDebug = 1;
            $mail->SMTPAuth = $this->Auth;
            $mail->SMTPSecure = $this->SMTPSecure; 
            $mail->Host = $this->Host;
            $mail->Port = $this->Port; 
            $mail->IsHTML(true);
            $mail->Username = $this->Username;
            $mail->Password = $this->Password;
            $mail->SetFrom($this->SenderEmail, $this->SenderName);

            $mail->AddAddress($MailTo); 
            $mail->Subject = $Subject;

            $mail->Body = $Body;

            if(!$mail->Send()){
	            print(json_encode(array("Status"=>False,"Message"=>$mail->ErrorInfo)));
            } else {
	            print(json_encode(array("Status"=>True,"Message"=>"Report Has been Sended")));  
            }
        }catch (Exception $exception){
            print(json_encode(array("Status"=>False,"Message"=>$mail->ErrorInfo)));
        }
    }
}
//$MailLib = new Core("yunussobaci@icloud.com","This Is Test Mail","Bu php Mail Test Mail");