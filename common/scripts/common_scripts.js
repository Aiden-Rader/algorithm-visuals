/**
 * Common JavaScript File
 * Author: Aiden Rader
 * Date: 12.06.2024
 *
 * Contains reusable functions for animations and common page behavior.
 */

window.Site = window.Site || {};

// Tiny typist module for the typing animation (more efficient than the original)
Site.Typist = (function () {
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
Site.markComingSoonCards = function () {
	$(".content-card").each(function () {
		var description = $(this).find("p").text().trim();
		if (description.startsWith("COMING SOON: ")) {
			$(this).addClass("coming-soon");
		}
	});
};

/**
 * Observes all elements with the class "content-card" and adds a "visible" class
 * when they enter the viewport.
 */
Site.observeCards = function () {
	var observerOptions = { threshold: 0.35 };
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
Site.initTypingAnimation = function (text, elementId, speed = 28, cursor = true) {
	var targetElement = $("#" + elementId);

	if (!targetElement || targetElement.length === 0) {
		return;
	}

	Typist.start(text, targetElement[0], { speed: speed, cursor: cursor });
}

/**
 * Initializes tab functionality by setting up event listeners on the tab selector and changing the display status of the content selector based on the tab's data-tab attribute.
 *
 * @param {string} tabSelector - The CSS selector for the tab elements that will be used to switch between content.
 * @param {string} contentSelector - The CSS selector for the content elements that will be toggled based on the active tab.
 */
Site.initTabs = function (tabSelector, contentSelector) {
	$(tabSelector).on("click", function () {
		const tabId = $(this).data("tab");
		$(tabSelector).removeClass("active");
		$(this).addClass("active");
		$(contentSelector).removeClass("active");
		$(`${contentSelector}[data-tab="${tabId}"]`).addClass("active");
	});
};

/**
 * Lazily loads media elements (video, img) as they enter the viewport.
 *
 * Utilizes the IntersectionObserver API to monitor elements specified by the selector.
 * When an element is about to intersect with the viewport, its `data-src` attribute
 * is used to set the `src` attribute, loading the media.
 *
 * @param {string} selector - A CSS selector to specify which elements to observe for lazy loading. Defaults to "video, img".
 */

Site.lazyLoadMedia = function (selector = "video, img") {
	const obs = new IntersectionObserver(function (entries, observer) {
		entries.forEach(function (entry) {
			if (entry.isIntersecting) {
				const el = entry.target;
				if (el.dataset.src) {
					el.src = el.dataset.src;
				}
				observer.unobserve(el);
			}
		});
	}, { threshold: 0.2 });

	document.querySelectorAll(selector).forEach(el => obs.observe(el));
};


// --- Backwards compatibility (for now) ---
const Typist = Site.Typist;
function markComingSoonCards() { return Site.markComingSoonCards(...arguments); }
function observeCards() { return Site.observeCards(...arguments); }
function initTypingAnimation() { return Site.initTypingAnimation(...arguments); }
function initTabs() { return Site.initTabs(...arguments); }
function lazyLoadMedia() { return Site.lazyLoadMedia(...arguments); }
