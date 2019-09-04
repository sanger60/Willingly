<?php
$DontUseChecker = True;
require_once("config.php");

if($_GET){}else{print(json_encode(array('Status'=>'Error','Response'=>'ERR0:Wrong Request Method')));http_response_code(400);die();}

$Temp_username = $_GET["email"];
$Temp_pass = $_GET["password"];

$res = $Conn_pgsql->query("SELECT * FROM public.\"Users\" Where \"Email\"='$Temp_username' AND \"Password\"='$Temp_pass'")->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {	
    $_SESSION['UserID'] =  $res[0]["Id"];

    print(json_encode(array('Status'=>true,"SessionID"=>session_id())));
}else{
    print(json_encode(array('Status'=>false)));
}   