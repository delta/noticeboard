<?php

define("NOTICEBOARD", "!@#$%^&*()");

include("config.inc.php");
include("includes/functions.lib.php");

$page = "";
if(isset($_GET["page"]))
	$page = $_GET["page"];
else
	$page = "home";

switch($page):

case "innovate":
	include("./innovate.php");
	break;

case "solve":
	include("./solve.php");
	break;

case "complaint":
	include("./complaint.php");
	break;

case "home":
default:
?>

<!doctype html>
<html>

</html>

<?php


endswitch;
?>
