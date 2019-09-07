<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$QueryStep1 = "";
if (isset($_POST["Name"])){
    if (!is_null($_POST["Name"]) && $_POST["Name"] != "")
    {
        CreateInsertQuery($_POST["Name"],"Name",true);
    }
}
if (isset($_POST["Surname"])){
    if (!is_null($_POST["Surname"]) && $_POST["Surname"] != "")
    {
        CreateInsertQuery($_POST["Surname"],"Surname");
    }
}
if (isset($_POST["Age"])){
    if (!is_null($_POST["Age"]) && $_POST["Age"] != "")
    {
        CreateInsertQuery($_POST["Age"],"Age");
    }
}
if (isset($_POST["Email"])){
    if (!is_null($_POST["Email"]) && $_POST["Email"] != "")
    {
        CreateInsertQuery($_POST["Email"],"Email");
    }
}
if (isset($_POST["Phone"])){
    if (!is_null($_POST["Phone"]) && $_POST["Phone"] != "")
    {
        CreateInsertQuery($_POST["Phone"],"Phone");
    }
}
if (isset($_POST["About"])){
    if (!is_null($_POST["About"]) && $_POST["About"] != "")
    {
        CreateInsertQuery($_POST["About"],"About");
    }
}
if (isset($_POST["Password"])){
    if (!is_null($_POST["Password"]) && $_POST["Password"] != "")
    {
        CreateInsertQuery($_POST["Password"],"Password");
    }
}
if (isset($_POST["Skills"])){
    if (!is_null($_POST["Skills"]) && $_POST["Skills"] != "")
    {
        CreateInsertQuery($_POST["Skills"],"Skills");
    }
}
if (isset($_POST["PhotoSrc"])){
    if (!is_null($_POST["PhotoSrc"]) && $_POST["PhotoSrc"] != "")
    {
        CreateInsertQuery($_POST["PhotoSrc"],"PhotoSrc");
    }
}

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