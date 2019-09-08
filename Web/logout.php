<?php
include_once("inc/php/Config.php");

if ($Global_IsLogin == true){
	session_destroy();
    header("Location: ".GetFullUrl("Full")."/index.php");
}else{
    header("Location: ".GetFullUrl("Full")."/index.php");
}
