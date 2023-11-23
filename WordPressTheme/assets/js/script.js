"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  // ハンバーガーメニュー
  $(function () {
    $(".js-hamburger").on("click", function () {
      $(this).toggleClass("is-open");
      if ($(this).hasClass("is-open")) {
        openDrawer();
      } else {
        closeDrawer();
      }
    });

    // backgroundまたはページ内リンクをクリックで閉じる
    $(".js-drawer a[href]").on("click", function () {
      closeDrawer();
    });

    // resizeイベント
    $(window).on('resize', function () {
      if (window.matchMedia("(min-width: 768px)").matches) {
        closeDrawer();
      }
    });
  });
  function openDrawer() {
    $(".js-drawer").fadeIn();
    $(".js-hamburger").addClass("is-open");
  }
  function closeDrawer() {
    $(".js-drawer").fadeOut();
    $(".js-hamburger").removeClass("is-open");
  }
  // swiper
  var campaign_swiper = new Swiper(".campaign__list .js-campaign-swiper", {
    slidesPerView: 'auto',
    spaceBetween: 16,
    grabCursor: true,
    pagination: {
      el: '.campaign__list .swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },
    breakpoints: {
      1025: {
        spaceBetween: 40
      }
    }
  });

  // header固定
  $(window).on('scroll', function () {
    var top = $(this).scrollTop();
    var mainView = $('.js-mv').outerHeight();
    var header = $('.js-header').outerHeight();
    if (mainView - header <= top) {
      $('.js-header').addClass('is-fixed');
    } else {
      $('.js-header').removeClass('is-fixed');
    }
  });

  // 画像アニメーション
  var box = $('.js-colorbox'),
    speed = 700;
  box.each(function () {
    $(this).append('<div class="is-color"></div>');
    var color = $(this).find($('.is-color')),
      image = $(this).find('img');
    var counter = 0;
    image.css('opacity', '0');
    color.css('width', '0%');
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });

  // ページトップへ戻るボタン 
  var pageTop = $(".js-page-top");
  pageTop.hide();
  var scrollHeight;
  var scrollPosition;
  var footHeight;
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop();
    footHeight = $("footer").innerHeight();
    if ($(window).width() >= 768) {
      if (scrollHeight - scrollPosition <= footHeight) {
        $(".page-top").css({
          position: "absolute",
          bottom: footHeight + 18
        });
      } else {
        $(".page-top").css({
          position: "fixed",
          bottom: "35px"
        });
      }
    } else {
      if (scrollHeight - scrollPosition <= footHeight) {
        $(".page-top").css({
          position: "absolute",
          bottom: footHeight + 15
        });
      } else {
        $(".page-top").css({
          position: "fixed",
          bottom: "35px"
        });
      }
    }
  });

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
    $(window).on('load', function () {
      setTimeout(function () {
        swiper();
      }, 0);
    });
  }

  // 画面幅が768pxより大きい場合に実行する関数
  function executeOnLargeScreen() {
    // 定義した変数がページをロードしてからどのくらいの時間で実行するかを設定する
    function loadRight() {
      $('.loader__img-right').addClass("is-fade-up");
    }
    function loadLeft() {
      $('.loader__img-left').addClass("is-fade-up");
    }
    function end_title() {
      $('.loader__title-wrap').fadeOut(800);
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
    $(window).on('load', function () {
      setTimeout(function () {
        loadLeft();
      }, 1000);
      setTimeout(function () {
        loadRight();
      }, 1200);
      setTimeout(function () {
        end_title();
      }, 1200);
      setTimeout(function () {
        end_load();
      }, 2000);
      setTimeout(function () {
        start_header();
      }, 5000);
      setTimeout(function () {
        swiper();
      }, 4000);
    });
  }

  // 画面幅によって実行する関数を選択
  if (window.innerWidth > 768) {
    executeOnLargeScreen();
  } else {
    executeOnSmallScreen();
  }
});