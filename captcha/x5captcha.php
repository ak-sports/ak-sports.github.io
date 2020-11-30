<?php
include("../res/x5engine.php");
$nameList = array("vzf","4xn","ypl","4u7","ege","egz","e5y","wrg","rfw","dux");
$charList = array("D","2","S","5","R","L","E","P","G","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
