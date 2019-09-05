<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$QueryStep1 = "";
$QueryStep2 = "";

CreateInsertQuery($_POST["Name"],true);
CreateInsertQuery($_POST["Surname"]);
CreateInsertQuery($_POST["UserName"]);
CreateInsertQuery($_POST["Email"]);
CreateInsertQuery($_POST["Password"]);

$data08 = $Conn_pgsql->prepare("INSERT INTO public.\"Users\" ($QueryStep1) VALUES ($QueryStep2)");
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
        
	    $QueryStep1 .= " \"$Text\"";
        $QueryStep1 .= " '$Text'";
    }
}