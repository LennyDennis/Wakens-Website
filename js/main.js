(function ($) {
  "use strict";

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  $(".carousel-item").carousel({
    interval: 1000 * 10
  });

  var pathName = window.location.pathname.split("/").pop();
  var linkName = window.location.pathname.split("/").pop();

  if (pathName == "") {
    pathName = "index.php";
  } else if (
    pathName == "sappartnership.php" ||
    pathName == "bskpartnership.php"
  ) {
    pathName = "partnership.php";
  } else if (
    pathName == "approach.php" ||
    pathName == "delivery.php" ||
    pathName == "development.php"
  ) {
    pathName = "training.php";
  } else if (
    pathName == "businessmgmt.php" ||
    pathName == "upgrademigration.php" ||
    pathName == "implementation.php" ||
    pathName == "maintainanceandsupport.php"
  ) {
    pathName = "consultation.php";
  }

  var targetLink = $('nav li a[href="' + pathName + '"]');
  var quickLink = $('.quick-links li a[href="' + linkName + '"]');

  targetLink.addClass("menu-active");
  quickLink.addClass("menu-active");

  // Initiate the wowjs animation library
  new WOW().init();

  // Initiate superfish on nav menu
  $(".nav-menu").superfish({
    animation: {
      opacity: "show"
    },
    speed: 400
  });
  // Mobile Navigation
  if ($("#nav-menu-container").length) {
    var $mobile_nav = $("#nav-menu-container").clone().prop({
      id: "mobile-nav"
    });
    $mobile_nav.find("> ul").attr({
      class: "",
      id: ""
    });
    $("body").append($mobile_nav);
    $("body").prepend(
      '<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>'
    );
    $("body").append('<div id="mobile-body-overly"></div>');
    $("#mobile-nav")
      .find(".menu-has-children")
      .prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on("click", ".menu-has-children i", function (e) {
      $(this).next().toggleClass("menu-item-active");
      $(this).nextAll("ul").eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on("click", "#mobile-nav-toggle", function (e) {
      $("body").toggleClass("mobile-nav-active");
      $("#mobile-nav-toggle i").toggleClass("fa-times fa-bars");
      $("#mobile-body-overly").toggle();
    });

    $(document).click(function (e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($("body").hasClass("mobile-nav-active")) {
          $("body").removeClass("mobile-nav-active");
          $("#mobile-nav-toggle i").toggleClass("fa-times fa-bars");
          $("#mobile-body-overly").fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Header scroll class
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("#header").addClass("header-scrolled");
    } else {
      $("#header").removeClass("header-scrolled");
    }
  });

  if ($(window).scrollTop() > 100) {
    $("#header").addClass("header-scrolled");
  }

  // jQuery counterUp (used in Facts section)
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });
})(jQuery);
