<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$QueryStep1 = "";

CreateInsertQuery($_POST["Name"],true);
CreateInsertQuery($_POST["Surname"]);
CreateInsertQuery($_POST["Age"]);
CreateInsertQuery($_POST["Email"]);
CreateInsertQuery($_POST["Phone"]);
CreateInsertQuery($_POST["Adress"]);
CreateInsertQuery($_POST["Password"]);
CreateInsertQuery($_POST["PhotoSrc"]);

$data08 = $Conn_pgsql->prepare("UPDATE public.\"Users\" SET $QueryStep1 where \"Id\"='$Global_UserID'");
$data08->execute();

print(json_encode(array(
                "Status" => True,
                "Message" => "Kullanici Olusturuldu"
                )));

function CreateInsertQuery($Text,$IsFirst){
    if (!is_null($Text) && isset($Text) && $Text != "")
    {
        if ($IsFirst != true)
        {
        	$QueryStep1 .= ",";
        }
        
	    $QueryStep1 .= "\"$Text\"='$Text'";
    }
}