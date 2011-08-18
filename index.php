<?php

define("NOTICEBOARD", "!@#$%^&*()");

include("config.inc.php");
include("includes/functions.lib.php");

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
	<div id="innovate" class="bigbutton">
		I have a new Idea
	</div>
	</a>
	<a href="complaint.php" ajaxify="1">
	<div id="complaint" class="bigbutton">
		I have a problem
	</div>
	</a>
	<a href="solve.php" ajaxify="1">
	<div id="solve" class="bigbutton">
		I can find a Solution
	</div>
	</a>
</div>
<div id="appcontrols">
	<div class="controlbar">
		<a href="index.php" ajaxify="1"><div class="smallbutton">Back to Home</div></a>
	</div>
</div>
</body>
</html>
