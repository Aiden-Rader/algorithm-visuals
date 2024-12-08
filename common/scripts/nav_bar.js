/**
 * Nav Bar Script
 * Description:
 * - Implements the script for the navigation bar. Toggles the sidebar when the toggle button is clicked.
 *
 * Author: Aiden Rader
 * Date: 12.06.2024
 *
 * Dependencies:
 * - Requires jQuery and GSAP.
 */

var sidebarState = localStorage.getItem("sidebarState") || "collapsed";

$(document).ready(function () {
	// Initialize sidebar state
	var sidebarState = localStorage.getItem("sidebarState") || "collapsed";
	toggleSidebar(sidebarState === "expanded");

	// Sidebar toggle button
	$("#btn_toggle").click(function () {
		var isExpanded = $("#sidebar").hasClass("expand");
		toggleSidebar(!isExpanded);
		localStorage.setItem("sidebarState", !isExpanded ? "expanded" : "collapsed");
	});
});

/**
 * Toggles the sidebar expanded/collapsed state with GSAP animation.
 */
function toggleSidebar(expand) {
	$("#sidebar").toggleClass("expand", expand);

	var sidebarLinks = $(".sidebar-link span");

	if (expand) {
		// Fade in text from left to right using GSAP
		gsap.to(sidebarLinks, {
			opacity: 1,
			x: 0,
			duration: 0.2,
			ease: "power2.out",
		});
	} else {
		// Fade out text from right to left using GSAP
		gsap.to(sidebarLinks, {
			opacity: 0,
			x: -10,
			duration: 0.2,
			ease: "power2.in",
		});
	}
}