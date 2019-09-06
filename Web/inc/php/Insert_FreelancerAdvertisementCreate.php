<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$QueryStep1 = "";
$QueryStep2 = "";

CreateInsertQuery($_POST["Tittle"],true,"Tittle");
CreateInsertQuery($_POST["Explanation"],false,"Explanation");
CreateInsertQuery($_POST["Price"],false,"Price"); 
CreateInsertQuery($_POST["DonationPrice"],false,"DonationPrice");
CreateInsertQuery($_POST["AdvertisementSkills"],false,"AdvertisementSkills"); 
CreateInsertQuery($_POST["CatagoryId"],false,"CatagoryId");
CreateInsertQuery($_POST["ADate"],false,"ADate");

$data08 = $Conn_pgsql->prepare("INSERT INTO public.\"Freelancer_Advertisement\" ($QueryStep1,\"UserId\") VALUES ($QueryStep2,'$Global_UserID')");
$data08->execute();


print(json_encode(array(
                "Status" => True,
                "Message" => "Kullanici Olusturuldu"
                )));

function CreateInsertQuery($Text,$IsFirst = false,$Name){
    global $QueryStep1;
    global $QueryStep2;

    if (!is_null($Text) && isset($Text) && $Text != "")
    {
        if ($IsFirst != true)
        {
        	$QueryStep1 .= ",";
            $QueryStep2 .= ",";
        }
        
	    $QueryStep1 .= " \"$Name\"";
        $QueryStep2 .= " '$Text'";
    }
}