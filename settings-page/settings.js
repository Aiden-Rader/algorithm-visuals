/**
 * Settings Page Script
 * Description:
 * - Implements the script for the settings page. Handles user settings, including dark mode, sidebar state, and font size.
 *
 * Author: Aiden Rader
 * Date: 12.07.2024
 *
 * Dependencies:
 * - Requires settings.css for styling.
 */

$(document).ready(function () {
	// Initialize DarkMode.js
	var darkMode = new Darkmode();

	// Load saved settings
	loadSettings(darkMode);

	// Dark Mode Toggle
	$("#dark-mode-toggle").change(function () {
		var isChecked = $(this).is(":checked");
		if (isChecked) {
			darkMode.toggle();
			localStorage.setItem("theme", "dark");
		} else {
			darkMode.toggle();
			localStorage.setItem("theme", "light");
		}
	});

	// Sidebar State
	$("#sidebarState").change(function () {
		var state = $(this).val();
		localStorage.setItem("sidebarState", state);
		displayTemporaryMessage("Sidebar state will take effect after refreshing.", "info");
	});

	// Font Size Adjustment
	$("#fontSize").on("input", function () {
		var fontSize = $(this).val();
		$("body").css("font-size", fontSize + "px");
		$("#fontSizeValue").text(fontSize + "px");
		localStorage.setItem("fontSize", fontSize);
	});

	// Reset Settings
	$("#resetSettings").click(function () {
		localStorage.clear();
		$.notify("Settings have been reset to default. Reloading...", {
			type: "success",
			delay: 1500,
			close: function () {
				location.reload();
			}
		});
	});
});

/**
 * Loads saved settings from localStorage and applies them.
 * @param {object} darkMode - DarkMode.js instance.
 */
function loadSettings(darkMode) {
	// Dark Mode
	var theme = localStorage.getItem("theme");
	if (theme === "dark" && !darkMode.isActivated()) {
		darkMode.toggle();
		$("#dark-mode-toggle").prop("checked", true);
	}

	// Sidebar State
	var sidebarState = localStorage.getItem("sidebarState") || "expanded";
	$("#sidebarState").val(sidebarState);

	// Font Size
	var fontSize = localStorage.getItem("fontSize") || "16";
	$("body").css("font-size", fontSize + "px");
	$("#fontSize").val(fontSize);
	$("#fontSizeValue").text(fontSize + "px");
}

