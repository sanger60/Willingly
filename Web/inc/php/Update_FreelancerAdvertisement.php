<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$QueryStep1 = "";

CreateInsertQuery($_POST["Tittle"],true);
CreateInsertQuery($_POST["Explanation"]);
CreateInsertQuery($_POST["Price"]); 
CreateInsertQuery($_POST["DonationPrice"]);
CreateInsertQuery($_POST["AdvertisementSkills"]);
CreateInsertQuery($_POST["CatagoryId"]);
CreateInsertQuery($_POST["ADate"]);

$data08 = $Conn_pgsql->prepare("UPDATE public.\"Freelancer_Advertisement\" SET $QueryStep1 where \"UserId\"='$Global_UserID' and \"Id\"='".$_POST["Id"]."'");
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