$(document).ready(function () {
  // burger
  $(".nav__burger").click(function (event) {
    $(".nav__burger,.header__menu,.nav_boot").toggleClass("active");
    $(".body").toggleClass("lock");
  });
  // ==================================================================

  // scroll to #
  $("header a").click(function () {
    let element = $(this).attr("href");
    const distant = $(element).offset().top - $(".navBar").height();
    $("html, body").stop().animate({ scrollTop: distant }, 800);
    $(".nav__burger,.header__menu,.nav_boot").toggleClass("active");
  });
  // ==================================================================

  // button up
  let cont_dist = $(".contacts").offset().top - $(window).height();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 300 && $(this).scrollTop() < cont_dist) {
      $(".button").addClass("show");
    } else {
      $(".button").removeClass("show");
    }
  });

  $(".button").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
  // ==================================================================
});
