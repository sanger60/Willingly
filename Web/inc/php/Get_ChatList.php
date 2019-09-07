<?php
header('Content-Type: application/json');

include_once("Config.php");

$Response = Array();

$List = $Conn_pgsql->query("SELECT * FROM public.\"ChatRoom\" where \"User1\"='$Global_UserID' or \"User2\"='$Global_UserID'")->fetchAll(PDO::FETCH_ASSOC);

$UserInfo = $Conn_pgsql->query("SELECT * FROM public.\"Users\"")->fetchAll(PDO::FETCH_ASSOC);

foreach ($List as $value)
{
	$Response["Id"] = $value["Id"];
    $Response["ReciverId"] = $value["User2"];

    foreach ($UserInfo as $value01)
    {
    	if ($value["User1"] == $value01["Id"])
        {
        	$Response["userName"] = $value01["Username"];
            $Response["userImage"] = $value01["PhotoSrc"];
        }
    }

    $UnreadMessages = $Conn_pgsql->query("SELECT Count(*) FROM public.\"Messages\" where \"ChatID\"='".$value["Id"]."' and \"Sender\"='".$value["User2"]."'")->fetchAll(PDO::FETCH_ASSOC);

    $Response["unreadCount"] = $UnreadMessages[0]["count"];

    $Messages = $Conn_pgsql->query("SELECT \"Id\",\"Text\" FROM public.\"Messages\" where \"ChatID\"='".$value["Id"]."' Order By \"Id\" DESC Limit 1")->fetchAll(PDO::FETCH_ASSOC);

    if (count($Messages) != 0)
    {
        $Response["message"] = $Messages[0]["Text"];	
    }
}

Print(json_encode(array("Data" =>$Response)));