<?php
header('Content-Type: application/json');

include_once("Config.php");

$Response = Array();

$AddQuery="";
$IsFist = true;

if (isset($_POST["ChatRoomID"]))
{
    if (!is_null($_POST["ChatRoomID"]) && $_POST["ChatRoomID"] != "")
    {
    	if ($IsFist == false)
        {
    	    $AddQuery .= " and ";
        }else{
            $AddQuery .= "where";
        }
	    $AddQuery .= "\"ChatID\"='".$_POST["ChatRoomID"]."'";

        $IsFist = false;
    }
}

//var_dump($AddQuery);

$Response = array();

$data08 = $Conn_pgsql->prepare("UPDATE public.\"Messages\" SET \"IsRead\"='t' where \"ChatID\"='".$_POST["ChatRoomID"]."' and \"Reciver\"='$Global_UserID'");
$data08->execute();

$List = $Conn_pgsql->query("SELECT * FROM public.\"Messages\" $AddQuery")->fetchAll(PDO::FETCH_ASSOC);

Print(json_encode(array("Data" =>$List)));