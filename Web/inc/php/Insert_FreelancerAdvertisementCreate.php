<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$QueryStep1 = "";
$QueryStep2 = "";

CreateInsertQuery($_POST["Tittle"],true);
CreateInsertQuery($_POST["Explanation"]);
CreateInsertQuery($_POST["Price"]);
CreateInsertQuery($_POST["DonationPrice"]);
CreateInsertQuery($_POST["AdvertisementSkills"]);
CreateInsertQuery($_POST["CatagoryId"]);

$data08 = $Conn_pgsql->prepare("INSERT INTO public.\"Freelancer_Advertisement\" ($QueryStep1,\"UserId\") VALUES ($QueryStep2,'$Global_UserID')");
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