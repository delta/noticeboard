/*
 * Common JS functions
 * Requires jQuery
 * Import after jQuery library is imported
 */

$(function(){
	$("a[ajaxify=1]").click(function(evt){
		evt.preventDefault();

		return false;
	});
});
