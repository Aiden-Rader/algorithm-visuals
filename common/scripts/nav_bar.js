/**
 * Nav Bar Script
 * Description:
 * - Implements the script for the navigation bar. Toggles the sidebar when the toggle button is clicked.
 *
 * Author: Aiden Rader
 * Date: 12.07.2024
 *
 * Dependencies:
 * - Requires jQuery.
 */

var sidebarState = localStorage.getItem('sidebarState') || 'collapsed';

$(document).ready(function () {
	// Initialize sidebar state
	var sidebarState = localStorage.getItem('sidebarState') || 'collapsed';
	toggleSidebar(sidebarState === 'expanded');

	// Sidebar toggle button
	$("#btn_toggle").click(function () {
		var isExpanded = $("#sidebar").hasClass("expand");
		toggleSidebar(!isExpanded);
		localStorage.setItem('sidebarState', !isExpanded ? 'expanded' : 'collapsed');
	});
});

/**
 * Toggles the sidebar expanded/collapsed state.
 */
function toggleSidebar(expand) {
	$("#sidebar").toggleClass("expand", expand);
	$(".sidebar-link span").toggle(expand);
}