// start the app
document.addEventListener("readystatechange", (evt) => {
	if (evt.target.readyState === "complete") {
		initApp();
	}
});

const initApp = () => {
	const scrollY = () => {
		const supportPageOffset = window.pageXOffset !== undefined;
		const isCSS1Compat = (document.compatMode || "") === "CSS1Compat";

		return supportPageOffset
			? window.pageYOffset
			: isCSS1Compat
			? document.documentElement.scrollTop
			: document.body.scrollTop;
	};

	const makeSticky = (el) => {
		const fake = document.createElement("div");
		const offset = parseInt(el.getAttribute("data-offset") || 0, 10);
		let rect = el.getBoundingClientRect();
		let top = rect.top + scrollY();
		let constraint;
		if (el.getAttribute("data-constraint")) {
			constraint = document.querySelector(
				el.getAttribute("data-constraint")
			);
		} else {
			constraint = document.body;
		}

		let constraintRect = constraint.getBoundingClientRect();
		let constraintBottom =
			constraintRect.top +
			scrollY() +
			constraintRect.height -
			offset -
			rect.height;

		// creates fake element for substitution place
		fake.style.width = rect.width + "px";
		fake.style.height = rect.height + "px";

		// Functions
		const onScroll = () => {
			if (
				scrollY() > constraintBottom &&
				el.style.position != "absolute"
			) {
				el.style.position = "absolute";
				el.style.bottom = 0;
				el.style.top = "auto";
			} else if (
				scrollY() > top - offset &&
				scrollY() < constraintBottom &&
				el.style.position != "fixed"
			) {
				el.classList.add("fixed");
				el.style.position = "fixed";
				el.style.top = offset + "px";
				el.style.bottom = "auto";
				el.style.width = rect.width + "px";
				el.parentNode.insertBefore(fake, el);
			} else if (
				scrollY() < top - offset &&
				el.style.position != "static"
			) {
				el.classList.remove("fixed");
				el.style.position = "static";
				if (el.parentNode.contains(fake)) {
					el.parentNode.removeChild(fake);
				}
			}
		};

		const onResize = () => {
			el.style.width = "auto";
			el.classList.remove("fixed");
			el.style.position = "static";
			fake.style.display = "none";
			rect = el.getBoundingClientRect();
			constraintRect = constraint.getBoundingClientRect();
			constraintBottom =
				constraintRect.top +
				scrollY() +
				constraintRect.height -
				offset -
				rect.height;
			top = rect.top + scrollY();
			fake.style.width = rect.width + "px";
			fake.style.height = rect.height + "px";
			fake.style.display = "block";
			onScroll();
		};

		// addEventListener
		window.addEventListener("scroll", onScroll);
		window.addEventListener("resize", onResize);
	};

	const els = document.querySelectorAll("[data-sticky]");
	for (let i = 0; i < els.length; i++) {
		const el = els[i];
		makeSticky(el);
	}
};
