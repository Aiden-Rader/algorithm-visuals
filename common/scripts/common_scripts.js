/**
 * Common JavaScript File
 * Author: Aiden Rader
 * Date: 12.06.2024
 *
 * Contains reusable functions for animations and common page behavior.
 */

/**
 * Adds the "coming-soon" class to cards with a `<p>` element
 * that contains the exact phrase "COMING SOON: ".
 */
function markComingSoonCards() {
	$(".content-card").each(function () {
		var description = $(this).find("p").text().trim();
		if (description.startsWith("COMING SOON: ")) {
			$(this).addClass("coming-soon");
		}
	});
}

/**
 * Observes all elements with the class "content-card" and adds a "visible" class
 * when they enter the viewport.
 */
function observeCards() {
	var observerOptions = { threshold: 0.35 };
	var observer = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				$(entry.target).addClass("visible");
				observer.unobserve(entry.target);
			}
		});
	}, observerOptions);

	$(".content-card").each(function () {
		observer.observe(this);
	});
}

/**
 * Initializes the typing animation by setting up the target element.
 *
 * @param {string} text - The text to display with the typing animation.
 * @param {string} elementId - The ID of the target element where the text will be typed.
 */
function initTypingAnimation(text, elementId) {
	var targetElement = $("#" + elementId);

	typeCharacter(targetElement, text);
}

/**
 * Types each character of the provided text into the target element.
 *
 * @param {jQuery} targetElement - The target element where the text will be typed.
 * @param {string} text - The text to display with the typing animation.
 * @param {number} [speed=150] - The speed at which the text is typed (in milliseconds).
 */
function typeCharacter(targetElement, text, speed = 150) {
	for (var charIndex = 0; charIndex < text.length; charIndex++) {
		setTimeout(function (charIndex) {
			targetElement.text(targetElement.text() + text.charAt(charIndex));
		}, speed * charIndex, charIndex);
	}
}
