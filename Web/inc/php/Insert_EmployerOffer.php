<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$QueryStep1 = "";
$QueryStep2 = "";

CreateInsertQuery($_POST["UserId"],true,"UserId"); 
CreateInsertQuery($_POST["EmployerId"],false,"EmployerId");
CreateInsertQuery($_POST["FreelancerId"],false,"FreelancerId"); 
CreateInsertQuery($_POST["Price"],false,"Price"); 
CreateInsertQuery($_POST["Description"],false,"Description"); 
//var_dump("INSERT INTO public.\"Employer_Advertisement\" ($QueryStep1,\"UserId\") VALUES ($QueryStep2,'$Global_UserID')");

$data08 = $Conn_pgsql->prepare("INSERT INTO public.\"Employer_Advertisement\" ($QueryStep1,\"Status\",\"State\") VALUES ($QueryStep2,'t','0')");
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