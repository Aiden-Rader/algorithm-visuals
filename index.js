/**
 * Home Page Script
 * Description:
 * - Implements a typing animation for the page title.
 * - Observes content cards for visibility and applies animations when they enter the viewport.
 *
 * Author: Aiden Rader
 * Date: 12.06.2024
 *
 * Dependencies:
 * - Requires jQuery.
 * - Requires GSAP (ScrollTrigger, IntersectionObserver) for animations.
 * - Requires common_scripts.js for utility functions.
 * - Requires config.php for site configuration.
 */

$(document).ready(function () {

	// Inital function calls
	observeCards();
	markComingSoonCards();
	initTypingAnimation("Welcome to Algorithm Visualization!", "typing-text-home", 58, true);
});
