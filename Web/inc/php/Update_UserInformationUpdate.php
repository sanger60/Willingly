<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$QueryStep1 = "";

CreateInsertQuery($_POST["Name"],"Name",true);
CreateInsertQuery($_POST["Surname"],"Surname");
CreateInsertQuery($_POST["Age"],"Age");
CreateInsertQuery($_POST["Email"],"Email");
CreateInsertQuery($_POST["Phone"],"Phone");
CreateInsertQuery($_POST["About"],"About");
CreateInsertQuery($_POST["Password"],"Password");
CreateInsertQuery($_POST["PhotoSrc"],"PhotoSrc");

//var_dump("UPDATE public.\"Users\" SET $QueryStep1 where \"Id\"='$Global_UserID'");

$data08 = $Conn_pgsql->prepare("UPDATE public.\"Users\" SET $QueryStep1 where \"Id\"='$Global_UserID'");
$data08->execute();

print(json_encode(array(
                "Status" => True,
                "Message" => "Kullanici Olusturuldu"
                )));

function CreateInsertQuery($Text,$Name,$IsFirst = false){
    if (isset($_POST[$Name]))
    {
        if (!is_null($_POST[$Name]) && $_POST[$Name] != "")
        { 
            global $QueryStep1;

            if (!is_null($Text) && isset($Text) && $Text != "")
            {
                if ($IsFirst != true)
                {
        	        $QueryStep1 .= ",";
                }
        
	            $QueryStep1 .= "\"$Name\"='$Text'";
            }
        }
    }
}