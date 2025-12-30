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
    b(".exhibition-01").owlCarousel({
      autoplay: true,
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
    b(".school-01").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      autoplayHoverPause: !0,
      smartSpeed: 500,
      margin: 10,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      rtl: true,
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
    b(".school-02").owlCarousel({
      autoplay: true,
      autoplayTimeout: 2e3,
      autoplayHoverPause: !0,
      smartSpeed: 500,
      margin: 10,
      loop: !0,
      center: !1,
      dots: !1,
      nav: !1,
      rtl: true,
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
    })
})(jQuery);
