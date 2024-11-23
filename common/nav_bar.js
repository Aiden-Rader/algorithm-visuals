// Quick script for nav bar toggling!

$(document).ready(function() {

	$("#btn_toggle").click(function(e) {
		e.preventDefault();
		$("#sidebar").toggleClass("expand");
	});

});
