/**
 * Common JavaScript File
 * Author: Aiden Rader
 * Date: 12.06.2024
 *
 * Contains reusable functions for animations and common page behavior.
 */

// Tiny typist module for the typing animation (more efficient than the original)
const Typist = (function () {
	const timers = new Map();

	function clear(el) {
		const t = timers.get(el);
		if (t) {
			clearInterval(t);
			timers.delete(el);
		}
		el.classList.remove('typing-cursor');
	}

	function start(text, el, { speed = 28, cursor = true } = {}) {
		clear(el);

		// Reduced motion: render instantly
		if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
			el.textContent = text;
			return;
		}

		el.textContent = '';
		if (cursor) {
			el.classList.add('typing-cursor');
		}

		let i = 0;
		const ID = setInterval(function () {
			el.textContent = text.slice(0, i++);
			if (i > text.length) {
				clear(el);
			}
		}, speed);

		timers.set(el, ID);
	}

	return { start, clear };
})();

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
	var observerOptions = {
		threshold: 0.35
	};
	var observer = new IntersectionObserver(function (entries, observer) {
		entries.forEach(function (entry) {
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
function initTypingAnimation(text, elementId, speed = 28, cursor = true) {
	var targetElement = $("#" + elementId);

	if (!targetElement || targetElement.length === 0) {
		return;
	}

	Typist.start(text, targetElement[0], { speed: speed, cursor: cursor });
}
