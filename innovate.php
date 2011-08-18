<?php
if(isset($_GET["_a"])):
?>
<div class="innovate">
	<div class="textbox">
		<div class="text-head">
			<input type="text" placeholder="My idea is ..." name="innohead" />
		</div>
		<div class="text-body">
			<textarea name="innobody" placeholder="Here is a breif description of my idea">
				Here is a brief description of my idea
			</textarea>
		</div>

	</div>
	<div class="suggestions">

	</div>
</div>

<?php
else:
header("Location: index.php");
endif;
?>
