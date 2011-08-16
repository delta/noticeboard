<?php

define("NOTICEBOARD", "!@#$%^&*()");

include("config.inc.php");
include("includes/functions.lib.php");

$page = "";
if(isset($_GET["page"]))
	$page = $_GET["page"];
else
	$page = "home";

?>
<!doctype html>
<html>
<head>
<title>Notice Board | <?php echo TITLE;?></title>
<link type="text/css" rel="stylesheet" href="./templates/<?php echo TEMPLATE; ?>/common.css" />
<script type="text/javascript" src="./includes/jquery.js" ></script>
<script type="text/javascript" src="./includes/jquery.rte.min.js" ></script>
</head>
<body>
<div class="HEAD">
Notice Board v1.0
</div>
<?php
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
<div class="container">
	<a href="?page=innovate">
	<div id="innovate" class="button">
		I have a new Idea
	</div>
	</a>
	<a href="?page=complaint">
	<div id="complaint" class="button">
		I have a problem
	</div>
	</a>
	<a href="?page=solve">
	<div id="solve" class="button">
		I can find a Solution
	</div>
	</a>
</div>
<link type="text/css" rel="stylesheet" href="./templates/<?php echo TEMPLATE; ?>/home.css" />

<?php
endswitch;
?>
<script type="text/javascript">
$(function(){
	$("textarea").rte({
		//content_css_url: "./includes/media/rte.css",
		media_url: "./includes/media/"
	});
});
</script>
</body>
</html>
