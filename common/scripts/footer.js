/**
 * Footer Script
 * Description:
 * - Implements the script for the footer. Handles the "Back to Top" button functionality with GSAP animations.
 *
 * Author: Aiden Rader
 * Date: 12.07.2024
 *
 * Dependencies:
 * - Requires GSAP for animations.
 * - Requires common_scripts.js for utility functions.
 */

$(document).ready(function () {
	// Show or hide the button based on scroll position
	$(window).scroll(function () {
		if ($(this).scrollTop() > 200) {
			gsap.to('#back-to-top', { duration: 0.3, autoAlpha: 1 });
		} else {
			gsap.to('#back-to-top', { duration: 0.3, autoAlpha: 0 });
		}
	});

	// Scroll to top when the button is clicked
	$('#back-to-top').click(function () {
		gsap.to(window, { duration: 1, scrollTo: { y: 0, ease: 'power2.out' } });
		return false;
	});
});
