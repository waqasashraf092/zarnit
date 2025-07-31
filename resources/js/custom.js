!function () {
    "use strict";
    window.onload = function () {
        document.getElementById("navbar") && window.addEventListener("scroll", (e => {
            const {scrollTop: t} = e.target.scrollingElement;
            document.querySelector("#navbar").classList.toggle("sticky", t >= 10)
        }));
        const e = document.getElementById("preloader");
        e && (e.style.display = "none")
    };
    new Swiper(".testimonials-slide", {
        slidesPerView: 1,
        spaceBetween: 24,
        centeredSlides: !1,
        preventClicks: !0,
        loop: !1,
        autoplay: {delay: 5e3, disableOnInteraction: !1, pauseOnMouseEnter: !0},
        pagination: {clickable: !0},
        navigation: {nextEl: ".prev1", prevEl: ".next1"}
    }), new Swiper(".team-slide", {
        slidesPerView: 1,
        spaceBetween: 24,
        centeredSlides: !1,
        preventClicks: !0,
        loop: !1,
        autoplay: {delay: 5e3, disableOnInteraction: !1, pauseOnMouseEnter: !0},
        pagination: {clickable: !0},
        navigation: {nextEl: ".prev2", prevEl: ".next2"},
        breakpoints: {
            0: {slidesPerView: 1},
            576: {slidesPerView: 2},
            768: {slidesPerView: 2},
            992: {slidesPerView: 3},
            1200: {slidesPerView: 4}
        }
    });
    document.addEventListener("DOMContentLoaded", (function () {
        document.querySelectorAll(".skill-bar").forEach((function (e) {
            let t = e.querySelector(".progress-content"), n = e.querySelector(".progress-number-mark"),
                r = e.getAttribute("data-percentage");
            t.style.width = r, t.style.transition = "width 2s ease-in-out";
            let i = null;
            requestAnimationFrame((function e(t) {
                i || (i = t);
                let l = t - i, a = Math.min(l / 2e3, 1), s = Math.round(a * parseInt(r));
                n.style.left = s + "%", n.querySelector(".percent").innerText = s + "%", a < 1 && requestAnimationFrame(e)
            }))
        }))
    }));
    new Swiper(".testimonials-slide2", {
        slidesPerView: 1,
        spaceBetween: 24,
        centeredSlides: !1,
        preventClicks: !0,
        loop: !1,
        autoplay: {delay: 5e3, disableOnInteraction: !1, pauseOnMouseEnter: !0},
        pagination: {clickable: !0},
        navigation: {nextEl: ".prev3", prevEl: ".next3"}
    }), new Swiper(".partner-slide", {
        slidesPerView: 1,
        spaceBetween: 24,
        centeredSlides: !1,
        preventClicks: !0,
        loop: !1,
        autoplay: {delay: 5e3, disableOnInteraction: !1, pauseOnMouseEnter: !0},
        pagination: {clickable: !0},
        breakpoints: {
            0: {slidesPerView: 2},
            576: {slidesPerView: 3},
            768: {slidesPerView: 4},
            992: {slidesPerView: 5},
            1200: {slidesPerView: 6}
        }
    });
    if ("IntersectionObserver" in window) {
        let e = new IntersectionObserver((function (t, n) {
            t.forEach((function (t) {
                if (t.isIntersecting) {
                    let n = t.target, r = parseInt(n.innerText), i = r / 200, l = 0, a = setInterval((function () {
                        l += i, n.innerText = Math.floor(l), parseInt(n.innerText) >= r && clearInterval(a)
                    }), 10);
                    e.unobserve(n)
                }
            }))
        }));
        document.querySelectorAll(".counter").forEach((function (t) {
            e.observe(t)
        }))
    }
    if (document.getElementById("ciram-light-dark")) {
        const e = document.querySelector(".ciram-light-dark"), t = localStorage.getItem("ciram_theme");
        t && document.body.setAttribute("ciram-dark-light-data-theme", t), e.addEventListener("click", (function () {
            "ciram-dark" === document.body.getAttribute("ciram-dark-light-data-theme") ? (document.body.setAttribute("ciram-dark-light-data-theme", "ciram-light"), localStorage.setItem("ciram_theme", "ciram-light")) : (document.body.setAttribute("ciram-dark-light-data-theme", "ciram-dark"), localStorage.setItem("ciram_theme", "ciram-dark"))
        }))
    }
    document.querySelectorAll(".minus").forEach((e => {
        e.addEventListener("click", (function () {
            const e = this.parentElement.querySelector(".box");
            let t = parseInt(e.value) - 1;
            t = t < 1 ? 1 : t, e.value = t, e.dispatchEvent(new Event("change"))
        }))
    })), document.querySelectorAll(".plus").forEach((e => {
        e.addEventListener("click", (function () {
            const e = this.parentElement.querySelector(".box");
            e.value = parseInt(e.value) + 1, e.dispatchEvent(new Event("change"))
        }))
    })), document.querySelectorAll(".toggle-password").forEach((e => {
        e.addEventListener("click", (function () {
            this.classList.toggle("fa-eye"), this.classList.toggle("ri-eye-off-line");
            const e = this.getAttribute("toggle"), t = document.querySelector(e);
            t && (t.type = "password" === t.type ? "text" : "password")
        }))
    }))
}();
try {
    function setTheme(e) {
        localStorage.setItem("ciram_rtl", e), document.documentElement.className = e
    }

    function toggleTheme() {
        "rtl" === localStorage.getItem("ciram_rtl") ? setTheme("ltr") : setTheme("rtl")
    }

    "rtl" === localStorage.getItem("ciram_rtl") ? (setTheme("rtl"), document.getElementById("slider").checked = !1) : (setTheme("ltr"), document.getElementById("slider").checked = !0)
} catch {
}
