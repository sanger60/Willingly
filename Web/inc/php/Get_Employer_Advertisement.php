<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$IsFist = true;

$AddQuery = "";

$page = 1;

$page = $_POST["PageId"];

$AddQuery04 = "";

if (isset($_POST["AdvertisementId"]))
{
    if (!is_null($_POST["AdvertisementId"]) && $_POST["AdvertisementId"] != "")
    {
    	if ($IsFist == false)
        {
    	    $AddQuery04 .= " and ";
        }else{
            $AddQuery04 .= "where";
        }
	    $AddQuery04 .= "\"Id\" = '".$_POST["AdvertisementId"]."'";

        $IsFist = false;
    }
}

if (isset($_POST["searchKey"]))
{
    if (!is_null($_POST["searchKey"]) && $_POST["searchKey"] != "")
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
    if (!is_null($_POST["category"]) && $_POST["category"] != "")
    {
        $Catagorys = explode(",", $_POST["category"]);

        $First = false;

        for ($i = 0; $i < count($Catagorys); $i++)
        {
            if (!is_null($Catagorys[$i]) && isset($Catagorys[$i]) && $Catagorys[$i] !="")
            {
                if ($First == false)
                {
                	if ($IsFist == false) {
    	                $AddQuery02 .= " and ";
                    }else{
                        $AddQuery02 .= "where";
                    }

                    $AddQuery02 .= "(";

                    $IsFist = false;
                    $First = true;
                }
                    
            	$AddQuery02 .= " \"CatagoryId\"='".$Catagorys[$i]."'";

        	    if (strval($i) != strval(count($Catagorys)-1))
                {
            	    $AddQuery02 .= " or";
                }   
            }   
        }

        $AddQuery02 .= ")";
    }
}


$AddQuery03 = "";
if (isset($_POST["price"]))
{   
    if (!is_null($_POST["price"]) && $_POST["price"] != "")
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

$AddQuery05 = "";

if ($IsFist == false)
{
    $AddQuery05 .= " and ";
}else{
    $AddQuery05 .= "where";
}

$AddQuery05 .= "\"Status\"='t'";


//var_dump($AddQuery.$AddQuery02.$AddQuery03);    

$Users = $Conn_pgsql->query("SELECT * FROM public.\"Users\"")->fetchAll(PDO::FETCH_ASSOC);

$Response = Array();

$IlanCount = $Conn_pgsql->query("SELECT COUNT(*) FROM public.\"Employer_Advertisement\"  $AddQuery $AddQuery02 $AddQuery03 $AddQuery04 $AddQuery05")->fetchAll(PDO::FETCH_ASSOC)[0]["count"];

$limit = 10;
$total_results = $IlanCount;
$total_pages = ceil($total_results/$limit);
$starting_limit = ($page-1)*$limit;

$Ilan = $Conn_pgsql->query("SELECT * FROM public.\"Employer_Advertisement\" $AddQuery $AddQuery02 $AddQuery03 $AddQuery04 $AddQuery05 ORDER BY \"Id\" DESC LIMIT $limit offset $starting_limit")->fetchAll(PDO::FETCH_ASSOC);

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