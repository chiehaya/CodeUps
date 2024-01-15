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
    $(".js-header").addClass("is-open");
    $("body").css("overflow", "hidden");
  }
  function closeDrawer() {
    $(".js-drawer").fadeOut();
    $(".js-hamburger").removeClass("is-open");
    $(".js-header").removeClass("is-open");
    $("body").css("overflow", "initial");
  }

  // キャンペーンswiper
  var campaign_swiper = new Swiper(".js-campaign-swiper", {
    slidesPerView: 'auto',
    spaceBetween: 16,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination',
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
    if (window.location.pathname !== '/page-404.html') {
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
    if (window.innerWidth > 768 && window.location.pathname === "/") {
      executeOnLargeScreen();
    } else {
      executeOnSmallScreen();
    }
  });

  // モーダルウインドウ
  $(function () {
    $('.js-gallery').click(function () {
      // モーダルが表示されるとき
      var imagePath = $(this).find('img').attr('src');
      $('.js-modal').fadeIn();
      $('.js-header').css('display', 'none');
      $('.js-page-top').css('z-index', '1');
      $('.js-modal__wrapper img').attr('src', imagePath);
      $('body').css('overflow', 'hidden');
      $('.js-modal__wrapper').css({
        'aspect-ratio': '920 /586 ',
        'max-width': '57.5rem'
      });
    });
    $('.js-background-modal').click(function () {
      // モーダルが閉じられるとき
      $('.js-modal').fadeOut();
      $('.js-header').css('display', 'block');
      $('.js-page-top a').css('display', 'block');
      $('body').css('overflow', 'initial');
    });
  });

  // info-page__tagの処理
  $(function () {
    $('.info-page__tag:first-child').addClass('is-active');
    $('.info-page__contents:nth-of-type(3),.info-page__contents:last-of-type').hide();
    // info-page__tagがクリックされたときの処理
    $('.info-page__tag').click(function () {
      // 選択された.info-page__tagのインデックスを取得
      var index = $(this).index();
      // すべての.info-page__contentsを非表示にする
      $('.info-page__contents').hide();
      // クリックされた.info-page__tagに対応する.info-page__contentsを表示
      $('.info-page__contents').eq(index).show();
      // すべての.info-page__tagからis-activeクラスを削除
      $('.info-page__tag').removeClass('is-active');
      // クリックされた.info-page__tagにis-activeクラスを追加
      $(this).addClass('is-active');
    });
  });

  // blog archiveの処理
  $('.js-archive-year').click(function () {
    $(this).toggleClass('is-active');
    // 親要素のjs-archive-itemを取得
    var parentItem = $(this).closest('.js-archive-item');
    // 親要素内のdetail-archive__monthを表示する
    parentItem.find('.js-archive-month').toggle();
  });

  // page-404.htmlのbodyタグにのみ背景色を設定
  $(function () {
    if (window.location.pathname === '/page-404.html') {
      $('body').css('background-color', '#408F95'); // 任意の色を指定
    }
  });

  //料金表　thのcolspan,rowspanを画面幅によって切り替え
  $(window).on('resize', function () {
    if (window.innerWidth > 768) {
      $('.js-price-table-title').removeAttr('colspan');
      $('.js-price-table-title').attr('rowspan', 20);
    } else {
      $('.js-price-table-title').attr('colspan', 2);
      $('.js-price-table-title').removeAttr('rowspan');
    }
  }).resize(); // 初回実行
});