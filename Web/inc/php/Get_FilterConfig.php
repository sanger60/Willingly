<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$Response = Array();

$Catagory = $Conn_pgsql->query("SELECT * FROM public.\"Catagory\"")->fetchAll(PDO::FETCH_ASSOC);

$Prce = $Conn_pgsql->query("SELECT MAX (\"Price\"),MIN (\"Price\") FROM public.\"Freelancer_Advertisement\"")->fetchAll(PDO::FETCH_ASSOC);

Print(json_encode(array("Catagory" =>$Catagory,"Price"=>$Prce)));