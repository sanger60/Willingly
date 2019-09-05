<?php
header('Content-Type: application/json');

include_once("Config.php");

$Response = Array();

$List = $Conn_pgsql->query("SELECT * FROM public.\"ChatRoom\" where \"User1\"='$Global_UserID' or \"User2\"='$Global_UserID'")->fetchAll(PDO::FETCH_ASSOC);

Print(json_encode(array("Data" =>$List)));