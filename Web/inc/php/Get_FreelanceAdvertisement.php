<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$IsFist = true;

$AddQuery = "";
if (isset($_POST["searchKey"]))
{
    if ($IsFist == false)
    {
    	$AddQuery .= " and ";
    }
	$AddQuery .= "\"Tittle\" LIKE '%".$_POST["searchKey"]."%'";

    $IsFist = false;
}

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
    if ($IsFist == false)
    {
    	$AddQuery02 .= " and ";
    }
	$AddQuery02 .= "\"CatagoryId\"='".$_POST["searchtip"]."'";

    $IsFist = false;
}

$AddQuery03 = "";
if (isset($_POST["price"]))
{
    list($Min, $Max) = explode(",", $_POST["price"]);

    if ($IsFist == false)
    {
    	$AddQuery .= " and ";
    }
	$AddQuery03 .= "\"Price\" > '$Min' and \"Price\" < '$Max'";

    $IsFist = false;
}


$Response = Array();

$Ilan = $Conn_pgsql->query("SELECT * FROM public.\"Freelancer_Advertisement\" where $AddQuery $AddQuery02 $AddQuery03")->fetchAll(PDO::FETCH_ASSOC);

Print(json_encode(array("Catagory" =>$Catagory,"Price"=>$Prce)));