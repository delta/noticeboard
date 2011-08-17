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
<script type="text/javascript" src="./includes/common.js" ></script>
<script type="text/javascript" src="./includes/jquery.rte.min.js" ></script>
</head>
<body>
<div class="HEAD">
Notice Board v1.0
</div>
<div class="container">
	<a href="innovate.php" ajaxify="1">
	<div id="innovate" class="button">
		I have a new Idea
	</div>
	</a>
	<a href="complaint.php" ajaxify="1">
	<div id="complaint" class="button">
		I have a problem
	</div>
	</a>
	<a href="solve.php" ajaxify="1">
	<div id="solve" class="button">
		I can find a Solution
	</div>
	</a>
</div>
<link type="text/css" rel="stylesheet" href="./templates/<?php echo TEMPLATE; ?>/home.css" />

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
