!(function (b) {
  "use strict";
  function d() {
    h < g[a].length
      ? ((l.textContent += g[a][h]), h++, setTimeout(d, j))
      : setTimeout(e, m);
  }
  function e() {
    0 < h
      ? ((l.textContent = g[a].substring(0, h - 1)), h--, setTimeout(e, k))
      : ((a = (a + 1) % g.length), setTimeout(d, j));
  }
  b(window).scroll(function () {
    300 < b(this).scrollTop()
      ? b(".sticky-top").addClass("shadow").css("top", "0px")
      : b(".sticky-top").removeClass("shadow").css("top", "-100px");
  }),
    b(window).scroll(function () {
      100 < b(this).scrollTop()
        ? b(".back-to-top").fadeIn()
        : b(".back-to-top").fadeOut();
    }),
    b(".back-to-top").click(function (a) {
      a.preventDefault(), b("html, body").animate({ scrollTop: 0 }, "300");
    }),
    b(".testimonals_01").owlCarousel({
      autoplay: 0,
      autoplayTimeout: 2e3,
      smartSpeed: 1e3,
      margin: 0,
      loop: !0,
      center: 0,
      dots: !0,
      nav: true,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: { 0: { items: 1 }, 576: { items: 1 }, 991: { items: 4 } },
    }),
    b(".placement_01").owlCarousel({
      autoplay: !0,
      autoplayTimeout: 2e3,
      autoplayHoverPause: !0,
      smartSpeed: 500,
      margin: 10,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 2 },
        576: { items: 2 },
        768: { items: 2 },
        992: { items: 6 },
      },
      rtl: !1,
      stagePadding: 0,
      items: 5,
      slideBy: 1,
      fluidSpeed: !0,
    }),
    b(".schoolCategories").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      autoplayHoverPause: !0,
      smartSpeed: 500,
      margin: 10,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 1 },
        576: { items: 1 },
        768: { items: 2 },
        992: { items: 4 },
      },
      rtl: !1,
      stagePadding: 0,
      items: 5,
      slideBy: 1,
      fluidSpeed: !0,
    }),
    b(".gallary_01").owlCarousel({
      autoplay: !0,
      autoplayTimeout: 2e3,
      smartSpeed: 500,
      margin: 25,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !0,
      navText: [
        '<i class="bi bi-chevron-left"></i>',
        '<i class="bi bi-chevron-right"></i>',
      ],
      responsive: {
        0: { items: 1 },
        576: { items: 1 },
        768: { items: 1 },
        992: { items: 1 },
      },
    }),
    b(".h_gallrey").owlCarousel({
      nav: !0,
      autoplay: !0,
      autoplayTimeout: 3e3,
      autoplayHoverPause: !0,
      loop: !0,
      navText: ["&#8249;", "&#8250;"],
      mouseDrag: !0,
      touchDrag: !0,
      responsive: { 0: { items: 1 }, 600: { items: 2 }, 1e3: { items: 3 } },
    }),
    $("a.nav-link").on("click", function (a) {
      a.preventDefault(),
        (a = $(this).attr("href")),
        $("a.nav-link").removeClass("active"),
        $(this).addClass("active"),
        $("html, body").animate({ scrollTop: $(a).offset().top - 80 }, 5);
    }),
    $(".nav-link a").on("click", function (a) {
      a.preventDefault(),
        (a = $(this).attr("href")),
        $(".nav-link a").removeClass("active"),
        $(this).addClass("active"),
        $("html, body").animate({ scrollTop: $(a).offset().top - 80 }, 5);
    }),
    $("a.c_btn").on("click", function (a) {
      a.preventDefault(),
        (a = $(this).attr("href")),
        $(".a.c_btn").removeClass("active"),
        $(this).addClass("active"),
        $("html, body").animate({ scrollTop: $(a).offset().top - 80 }, 5);
    });
  var f = window.location.href;
  b('.navbar-nav a[href="' + f + '"]').addClass("active"),
    b("[data-bgimg]").each(function () {
      b(this).css("background-image", "url(" + b(this).data("bgimg") + ")");
    });
  const g = ["Create", "Change", "Transform"];
  let a = 0,
    h = 0;
  const j = 100,
    k = 50,
    m = 2e3,
    l = document.getElementById("typing");
  document.addEventListener("DOMContentLoaded", () => setTimeout(d, 500)),
    document.addEventListener("DOMContentLoaded", function () {
      const a = document.querySelectorAll(".nav-item.nav-link"),
        b = document.querySelectorAll("section");
      window.addEventListener("scroll", function () {
        let c = window.scrollY + 300;
        b.forEach((b) => {
          b.offsetTop <= c &&
            b.offsetTop + b.offsetHeight > c &&
            a.forEach((a) => {
              a.classList.remove("active"),
                `#${b.id}` === a.getAttribute("href") &&
                  a.classList.add("active");
            });
        });
      });
    });
})(jQuery);
