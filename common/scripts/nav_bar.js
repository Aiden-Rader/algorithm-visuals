var sidebarState = localStorage.getItem('sidebarState');

$(document).ready(function() {

	// Check local storage for sidebar state
	if (sidebarState) {
		$("#sidebar").toggleClass("expand", sidebarState == "expanded");
	}

	$("#btn_toggle").click(function(e) {
		e.preventDefault();
		$("#sidebar").toggleClass("expand");

		// Set local storage for sidebar state
		localStorage.setItem('sidebarState', $("#sidebar").hasClass("expand") ? "expanded" : "collapsed");
	});
});
