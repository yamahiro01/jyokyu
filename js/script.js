// アコーディオン（一つ目が開いた状態）
$(function(){
  $(".c-accordion__item:first-child .c-accordion__body").css("display","block")
  $(".js-accordion__title").on("click",function(){
    $(this).toggleClass("is-open");
    $(this).next().slideToggle("is-open");
  })
})

// ページネーション
// $('.page-link').on('click',function() {
//   $('.page-link').removeClass('active');
//   $(this).addClass('active');
// });

// ハンバーガーメニュー&ドロワー
$(function(){
  const hamburger = $('#js-hamburger');
  const drawer = $('#js-drawer');
  const menu = $('#js-hamburger__menu');
  const home = $('#js-home');
  const news = $('#js-news');
  const blog = $('#js-blog');
  const price = $('#js-price');
  const request = $('#js-request');
  const inquiry = $('#js-inquiry');

  // ハンバーガーメニュークリック後にドロワー表示
  hamburger.on('click',function(){
    hamburger.toggleClass("is-checked")
    drawer.toggleClass("is-checked")

    // ハンバーガーメニュー下のメニューテキスト切り替え
    if (hamburger.hasClass("is-checked")) {
      menu.text('CLOSE');
    } else {
      menu.text('MENU');
    }
  })

  // ドロワー内の「お知らせ」クリック後にドロワーを閉じ、元に戻る
  home.on('click',function(){
    hamburger.removeClass("is-checked")
    drawer.removeClass("is-checked")
  })

  // ドロワー内の「お知らせ」クリック後にドロワーを閉じ、元に戻る
  news.on('click',function(){
    hamburger.removeClass("is-checked")
    drawer.removeClass("is-checked")
  })

  // ドロワー内の「ブログ」クリック後にドロワーを閉じ、元に戻る
  blog.on('click',function(){
    hamburger.removeClass("is-checked")
    drawer.removeClass("is-checked")
  })

  // ドロワー内の「コース・料金」クリック後にドロワーを閉じ、元に戻る
  price.on('click',function(){
    hamburger.removeClass("is-checked")
    drawer.removeClass("is-checked")
  })

  // ドロワー内の「資料請求」クリック後にドロワーを閉じ、元に戻る
  request.on('click',function(){
    hamburger.removeClass("is-checked")
    drawer.removeClass("is-checked")
  })

  // ドロワー内の「お問い合わせ」クリック後にドロワーを閉じ、元に戻る
  inquiry.on('click',function(){
    hamburger.removeClass("is-checked")
    drawer.removeClass("is-checked")
  })
})

// ハンバーガーメニュー&ドロワー（tab + enterキーのみ操作仕様）
$(function () {
  $('#js-hamburger').click(function () {
    $('body').toggleClass('is-drawerActive')

    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', 'true')
      $('#js-drawer').attr('area-hidden','false')
    } else {
      $(this).attr('aria-expanded', 'false')
      $('#js-drawer').attr('area-hidden','true')
    }
  })

  //スマホ用メニューの背景ボックスクリックでもドロワーが消えるようにする
  $('#js-drawer').click(function () {
    $('body').removeClass('is-drawerActive')
    $('#js-hamburger').attr('aria-expanded', 'false')
    $('#js-drawer').attr('area-hidden','true')
  })
});

// スクロールヒント
window.addEventListener("load", function () {
  new ScrollHint(".js-scrollable", {
    suggestiveShadow: true,  // スクロール可能なとき、影を表示する。
    remainingTime: 10000,  // スクロールヒントアイコンを非表示にするタイミング（ms）。
    i18n: {  // ここからスクロール可能なテキストを変更することができます。
      scrollable: "スクロールできます"
    }
  });
});

// ページトップへ戻るボタン
$(function() {
  var pageTop = $('.page_top');
  pageTop.hide();
  $(window).scroll(function () {
      if ($(this).scrollTop() > 600) {
          pageTop.fadeIn();
      } else {
          pageTop.fadeOut();
      }
  });
  pageTop.click(function () {
      $('body, html').animate({scrollTop:0}, 500, 'swing');
      return false;
  });
});