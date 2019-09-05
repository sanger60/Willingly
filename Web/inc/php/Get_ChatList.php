<?php
header('Content-Type: application/json');

include_once("Config.php");

$Response = Array();

$List = $Conn_pgsql->query("SELECT * FROM public.\"ChatRoom\" where \"Sender\"='$Global_UserID'")->fetchAll(PDO::FETCH_ASSOC);

Print(json_encode(array("Data" =>$List)));