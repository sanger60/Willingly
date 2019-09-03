<?php
$DontUseChecker = True;
require_once("config.php");

if($_GET){}else{print(json_encode(array('Status'=>'Error','Response'=>'ERR0:Wrong Request Method')));http_response_code(400);die();}

$Temp_username = $_GET["username"];
$Temp_pass = $_GET["password"];

$res = $Conn_pgsql->query("SELECT * FROM public.\"Users\" Where \"Email\"='$Temp_username' AND \"Password\"='$Temp_pass'")->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
		
    //$UserIdQuery = $Conn_pgsql -> query("Select * from Panel_Users where UserName= '".$Temp_username."' and Password= '".$Temp_pass."' and Status='Active'")->fetchAll();
		
    //foreach ($UserIdQuery as $item)
    $_SESSION['UserID'] =  $res[0]["Id"];
			
    print(json_encode(array('Status'=>'Successful')));
}else{
    print(json_encode(array('Status'=>'Error')));
}   