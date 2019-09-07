<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$IsFist = true;

$AddQuery = "";

$page = 1;

$page = $_POST["PageId"];

if (isset($_POST["EmployerId"]))
{
    if (!is_null($_POST["EmployerId"]) && $_POST["EmployerId"] != "")
    {
    	if ($IsFist == false)
        {
    	    $AddQuery .= " and ";
        }else{
            $AddQuery .= "where";
        }
	    $AddQuery .= "\"EmployerId\" = '".$_POST["EmployerId"]."'";

        $IsFist = false;
    }
}

$Users = $Conn_pgsql->query("SELECT * FROM public.\"Users\"")->fetchAll(PDO::FETCH_ASSOC);

//var_dump($AddQuery.$AddQuery02.$AddQuery03);    

$Response = Array();

$IlanCount = $Conn_pgsql->query("SELECT COUNT(*) FROM public.\"Orders_Employer\"  $AddQuery")->fetchAll(PDO::FETCH_ASSOC)[0]["count"];

$limit = 10;
$total_results = $IlanCount;
$total_pages = ceil($total_results/$limit);
$starting_limit = ($page-1)*$limit;

$Ilan = $Conn_pgsql->query("SELECT * FROM public.\"Orders_Employer\" $AddQuery ORDER BY \"Id\" DESC LIMIT $limit offset $starting_limit")->fetchAll(PDO::FETCH_ASSOC);

foreach ($Ilan as $value)
{
    $ArrayT = array();

    $ArrayT["AdvertisementInfo"] = $value;

    foreach ($Users as $value01)
    {
    	if ($value["UserId"] == $value01["Id"])
        {
            $ArrayT["UserInfo"] = $value01;
        }
    }	
    array_push($Response,$ArrayT);
}

Print(json_encode(array("Data" =>$Response)));