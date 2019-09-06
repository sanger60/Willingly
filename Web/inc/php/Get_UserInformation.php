<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$Response = Array();

$Users = $Conn_pgsql->query("SELECT * FROM public.\"Users\" where \"Id\"='$Global_UserID'")->fetchAll(PDO::FETCH_ASSOC);

Print(json_encode(array("Data" =>$Users)));