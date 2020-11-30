<?php
include("../res/x5engine.php");
$nameList = array("7c6","2e6","g58","fke","y7s","w84","yn6","3k3","gtf","zf5");
$charList = array("3","7","H","J","3","8","D","8","Z","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
