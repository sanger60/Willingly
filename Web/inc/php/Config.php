<?php
flush();
session_start();

date_default_timezone_set('Europe/Istanbul');

$ThisDate = date("d.m.y");

try {
    $Conn_pgsql = new PDO("pgsql:host=127.0.0.1;port=5432;dbname=Willingly;user=WillinglyUser;password=ok");
	$Conn_pgsql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $Conn_pgsql->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}
catch (Exception $e) {
	echo "DbConnectionError :".$e;
	die();
}

if (isset($_SESSION['UserID'])) {
		$Global_IsLogin = True;
		$data04 = $Conn_pgsql->query("Select * from Public.\"Users\" Where \"Id\"='".$_SESSION['UserID']."'")->fetchAll(PDO::FETCH_ASSOC);
		if (count($data04) > 0) {
			foreach ($data04 as $item04){
				$Global_UserID = $_SESSION['Id'];
				$Global_Email = $item04['Email'];
				$Global_Password = $item04['Password'];
                $Global_Name = $item04['Name'];
                $Global_Balance = $item04['Balance'];
			}
		}else{
			$Global_IsLogin = False;
			if(GetFullUrl("OnlyCurretFile") != "/signin.php" && $DontUseChecker != True){
				header("Location: ".GetFullUrl("Full")."/signin.php");
			}
		}
} else {
	$Global_IsLogin = False;

	if(GetFullUrl("OnlyCurretFile") != "/signin.php" && $DontUseChecker != True){
		header("Location: ".GetFullUrl("Full")."/signin.php");
	}
}
function GetIP(){
	if (getenv("HTTP_CLIENT_IP")) {
		$ip = getenv("HTTP_CLIENT_IP");
	} elseif (getenv("HTTP_X_FORWARDED_FOR")) {
		$ip = getenv("HTTP_X_FORWARDED_FOR");
		if (strstr($ip, ',')) {
			$tmp = explode(',', $ip);
			$ip  = trim($tmp[0]);
		}
	} else {
		$ip = getenv("REMOTE_ADDR");
	}
	return $ip;
}
function RandomString($n) { 
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    return $randomString; 
} 
Function GetFullUrl($ReqType = Null){
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 
                "https" : "http") . "://" . $_SERVER['HTTP_HOST']; 
				if($ReqType == "OnlyCurretFile"){
					$link = $_SERVER['REQUEST_URI'];
				}
  
	return $link; 
}