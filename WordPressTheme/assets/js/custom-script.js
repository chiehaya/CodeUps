"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // 画面幅が768px以下の場合に実行する関数
  function executeOnSmallScreen() {
    function swiper() {
      var mv_swiper = new Swiper(".js-mv-swiper", {
        loop: true,
        speed: 2000,
        effect: "fade",
        fadeEffect: {
          crossFade: true
        },
        autoplay: {
          delay: 4000,
          disableOnInteraction: false
        }
      });
    }
    setTimeout(function () {
      swiper();
    }, 0);
  }

  // 画面幅が768pxより大きい場合に実行する関数
  function executeOnLargeScreen() {
    function fixed() {
      $("body").css("position", "fixed");
    }
    function initial() {
      $("body").css("position", "");
    }
    function loadRight() {
      $('.loader__img-right').addClass("is-fade-up");
    }
    function loadLeft() {
      $('.loader__img-left').addClass("is-fade-up");
    }
    function end_title() {
      $('.loader__title').removeClass("mv-title--green");
    }
    function loadImg() {
      $('.loader__img').addClass("is-show");
    }
    function end_load() {
      $('.loader').fadeOut(800);
    }
    function start_header() {
      $(".header").addClass("is-show");
    }
    function swiper() {
      var mv_swiper = new Swiper(".js-mv-swiper", {
        loop: true,
        speed: 2000,
        effect: "fade",
        fadeEffect: {
          crossFade: true
        },
        autoplay: {
          delay: 4000,
          disableOnInteraction: false
        }
      });
    }
    setTimeout(function () {
      fixed();
    }, 0);
    setTimeout(function () {
      initial();
    }, 5000);
    setTimeout(function () {
      loadLeft();
    }, 1000);
    setTimeout(function () {
      loadRight();
    }, 1200);
    setTimeout(function () {
      loadImg();
    }, 2600);
    setTimeout(function () {
      end_title();
    }, 1200);
    setTimeout(function () {
      end_load();
    }, 5000);
    setTimeout(function () {
      start_header();
    }, 5000);
    setTimeout(function () {
      swiper();
    }, 5000);
  }

  // 画面幅によって実行する関数を選択
  $(function () {
    if (window.innerWidth > 768) {
      executeOnLargeScreen();
    } else {
      executeOnSmallScreen();
    }
  });
});