<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$IsFist = true;

$AddQuery = "";

$page = 1;

$page = $_POST["PageId"];

if (isset($_POST["searchKey"]))
{
    if (!is_null($_POST["searchKey"]))
    {
    	if ($IsFist == false)
        {
    	    $AddQuery .= " and ";
        }else{
            $AddQuery .= "where";
        }
	    $AddQuery .= " lower(\"Tittle\") similar to '%".strtolower($_POST["searchKey"])."%'";

        $IsFist = false;
    }
}

//1 gelirse freelance 2 meetup

//$AddQuery01 = "";
//if (isset($_POST["searchtip"]))
//{
//    if ($IsFist == false)
//    {
//        $AddQuery01 .= " and ";
//    }

//    $AddQuery01 .= "\"DeviceId\"='".$_POST["searchtip"]."'";

//    $IsFist = false;
//}

$AddQuery02 = "";
if (isset($_POST["category"]))
{
    if (!is_null($_POST["category"]))
    {
    	if ($IsFist == false)
        {
    	    $AddQuery02 .= " and ";
        }else{
            $AddQuery02 .= "where";
        }
	    $AddQuery02 .= "\"CatagoryId\"='".$_POST["category"]."'";

        $IsFist = false;
    }
}

$AddQuery03 = "";
if (isset($_POST["price"]))
{   
    if (!is_null($_POST["price"]))
    {
    	list($Min, $Max) = explode("-", $_POST["price"]);

        if ($IsFist == false)
        {
    	    $AddQuery03 .= " and ";
        }else{
            $AddQuery03 .= "where";
        }
	    $AddQuery03 .= "\"Price\" >= '$Min' and \"Price\" <= '$Max'";

        $IsFist = false;
    }
}


$Response = Array();

$IlanCount = $Conn_pgsql->query("SELECT COUNT(*) FROM public.\"Freelancer_Advertisement\"  $AddQuery $AddQuery02 $AddQuery03")->fetchAll(PDO::FETCH_ASSOC)[0]["count"];

$limit = 10;
$total_results = $IlanCount;
$total_pages = ceil($total_results/$limit);
$starting_limit = ($page-1)*$limit;

$Ilan = $Conn_pgsql->query("SELECT * FROM public.\"Freelancer_Advertisement\"  $AddQuery $AddQuery02 $AddQuery03 ORDER BY \"Id\" DESC LIMIT $limit offset $starting_limit")->fetchAll(PDO::FETCH_ASSOC);

Print(json_encode(array("Data" =>$Ilan)));