<?php
header('Content-Type: application/json');

$DontUseChecker = true;

include_once("Config.php");

$Code = $_POST["Code"];

$CheckHaveUserEmail = $Conn_pgsql->query("SELECT * FROM public.\"UserActivationCode\" Where \"Code\"='$Code' LIMIT 1")->fetchAll(PDO::FETCH_ASSOC)[0]["count"];
if (count($CheckHaveUserEmail) == 0)
{
	Print(json_encode(["Status"=>false,"Message"=>"Yanlis Aktivasyon Kodu"]));
    die();
}

$data11 = $Conn_pgsql->prepare("UPDATE public.\"Users\" SET \"EmailVerification\"='t' Where \"Id\"='".$CheckHaveUserEmail[0]["UserId"]."'");
$data11->execute();	

print(json_encode(array(
                "Status" => True,
                "Message" => "Kullanici Aktive Edildi"
                )));