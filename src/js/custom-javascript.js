// Add your JS customizations here
/**
 * Template Name: Arsha - v4.3.0
 * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */

import GLightbox from "glightbox";

(function () {
	"use strict";

	/**
	 * Easy selector helper function
	 */
	const select = (el, all = false) => {
		el = el.trim();
		if (all) {
			return [...document.querySelectorAll(el)];
		} else {
			return document.querySelector(el);
		}
	};

	/**
	 * Easy event listener function
	 */
	const on = (type, el, listener, all = false) => {
		let selectEl = select(el, all);
		if (selectEl) {
			if (all) {
				selectEl.forEach((e) => e.addEventListener(type, listener));
			} else {
				selectEl.addEventListener(type, listener);
			}
		}
	};

	/**
	 * Easy on scroll event listener
	 */
	const onscroll = (el, listener) => {
		el.addEventListener("scroll", listener);
	};

	/**
	 * Toggle .header-scrolled class to #header when page is scrolled
	 */
	let selectHeader = select("#wrapper-navbar");
	if (selectHeader) {
		const headerScrolled = () => {
			if (window.scrollY > 100) {
				selectHeader.classList.add("header-scrolled");
			} else {
				selectHeader.classList.remove("header-scrolled");
			}
		};
		window.addEventListener("load", headerScrolled);
		onscroll(document, headerScrolled);
	}

	/**
	 * Back to top button
	 */
	let backtotop = select(".back-to-top");
	if (backtotop) {
		const toggleBacktotop = () => {
			if (window.scrollY > 100) {
				backtotop.classList.add("active");
			} else {
				backtotop.classList.remove("active");
			}
		};
		window.addEventListener("load", toggleBacktotop);
		onscroll(document, toggleBacktotop);
	}

	/**
	 * Header fixed top on scroll
	 */
	let selectHeaderF = select("#header");
	if (selectHeaderF) {
		let headerOffset = selectHeaderF.offsetTop;
		let nextElement = selectHeaderF.nextElementSibling;
		const headerFixed = () => {
			if (headerOffset - window.scrollY <= 0) {
				selectHeaderF.classList.add("fixed-top");
				nextElement.classList.add("scrolled-offset");
			} else {
				selectHeaderF.classList.remove("fixed-top");
				nextElement.classList.remove("scrolled-offset");
			}
		};
		window.addEventListener("load", headerFixed);
		onscroll(document, headerFixed);
	}

	/**
	 * Mobile nav toggle
	 */
	on("click", ".mobile-nav-toggle", function (e) {
		select("#navbar").classList.toggle("navbar-mobile");
		this.classList.toggle("bi-list");
		this.classList.toggle("bi-x");
	});

	/**
	 * Mobile nav dropdowns activate
	 */
	on(
		"click",
		".navbar .dropdown > a",
		function (e) {
			if (select("#navbar").classList.contains("navbar-mobile")) {
				e.preventDefault();
				this.nextElementSibling.classList.toggle("dropdown-active");
			}
		},
		true
	);

	/**
	 * Initiate  glightbox
	 */
	const glightbox = GLightbox({
		selector: ".glightbox",
	});
})();

/*!
 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
 * Copyright 2011-2023 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.
 */

(() => {
	"use strict";

	const storedTheme = localStorage.getItem("theme");

	const getPreferredTheme = () => {
		if (storedTheme) {
			return storedTheme;
		}

		return window.matchMedia("(prefers-color-scheme: dark)").matches
			? "dark"
			: "light";
	};

	const setTheme = function (theme) {
		if (
			theme === "auto" &&
			window.matchMedia("(prefers-color-scheme: dark)").matches
		) {
			document.documentElement.setAttribute("data-bs-theme", "dark");
		} else {
			document.documentElement.setAttribute("data-bs-theme", theme);
		}
	};

	setTheme(getPreferredTheme());

	const showActiveTheme = (theme, focus = false) => {
		const themeSwitcher = document.querySelector("#bd-theme");
		if (!themeSwitcher) {
			return;
		}

		const themeSwitcherText = document.querySelector("#bd-theme-text");
		// const activeThemeIcon = document.querySelector(".theme-icon-active use");
		const btnToActive = document.querySelector(
			`[data-bs-theme-value="${theme}"]`
		);
		// const svgOfActiveBtn = btnToActive.querySelector("svg use").getAttribute("href");

		document.querySelectorAll("[data-bs-theme-value]").forEach((element) => {
			element.classList.remove("active");
			element.setAttribute("aria-pressed", "false");
		});

		btnToActive.classList.add("active");
		btnToActive.setAttribute("aria-pressed", "true");
		// activeThemeIcon.setAttribute("href", svgOfActiveBtn);
		const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`;
		themeSwitcher.setAttribute("aria-label", themeSwitcherLabel);

		if (focus) {
			themeSwitcher.focus();
		}
	};

	window
		.matchMedia("(prefers-color-scheme: dark)")
		.addEventListener("change", () => {
			if (storedTheme !== "light" || storedTheme !== "dark") {
				setTheme(getPreferredTheme());
			}
		});

	window.addEventListener("DOMContentLoaded", () => {
		showActiveTheme(getPreferredTheme());

		document.querySelectorAll("[data-bs-theme-value]").forEach((toggle) => {
			toggle.addEventListener("click", () => {
				const theme = toggle.getAttribute("data-bs-theme-value");
				localStorage.setItem("theme", theme);
				setTheme(theme);
				showActiveTheme(theme, true);
			});
		});
	});
})();
