/*
 * Common JS functions
 * Requires jQuery
 * Import after jQuery library is imported
 */

var db = function() {
	this.data = this.arguments[0] || [];
}

$(function(){
	window.container = $(".container");
	$("a[ajaxify=1]").click(function(evt){
		evt.preventDefault();
		var page = $(this).attr("href");
		switch(page){
			case "innovate.php":
				$.ajax({
					url: "innovate.php",
					data: {
						_a: 1
					},
					success: function(data) {
						container.html(data);
					        $("textarea").rte({
							media_url: "./includes/media/"
						});
						$("#appcontrols").show(250);
					},
					complete: function(data){
						
					},
					error: function(err) {
						console.log(err);
					}

				});
			break;
			case "complaint.php":

			break;
			case "solve.php":

			break;
			case "index.php":
				//load from cache

			break;
			break;
			default:
			return false;
		}
		return false;
	});
});
