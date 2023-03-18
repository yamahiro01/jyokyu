<?php wp_body_open(); ?>

<!-- ヘッダー -->
<header class="header">
  <div class="header__inner">
    <!-- ヘッダー左 -->
    <div class="header-left">
      <h1 class="header-logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo__link">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo (2).png" alt="Engress" class="header-logo__img">
        </a>
      </h1>
      <!-- PC用メニュー -->
      <nav class="header-nav">
        <ul class="header-nav__list">
          <li class="header-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-nav__link">ホーム</a></li>
          <li class="header-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/news" class="header-nav__link">お知らせ</a></li>
          <li class="header-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog" class="header-nav__link">ブログ</a></li>
          <li class="header-nav__item"><a href="<?php echo esc_url( get_permalink(2147)); ?>" class="header-nav__link">コース・料金</a></li>
        </ul>
      </nav>
    </div><!-- .header-left -->
    <!-- ヘッダー右 -->
    <div class="header-right">
      <div class="header-right__operation">
        <p class="hours">平日08:00〜20:00</p>
        <div class="tel">
          <a href="tel:0123-456-7890" class="tel__link">
            <img src="<?php echo get_template_directory_uri(); ?>/img/パス 29.svg" alt="電話番号" class="tel__icon">
            <span class="tel__num">0123-456-7890</span>
          </a>
        </div>
      </div>
      <div class="header-right__btn">
        <a href="<?php echo esc_url( get_permalink(2156) ); ?>" class="request">資料請求</a>
        <a href="<?php echo esc_url( get_permalink(2156) ); ?>" class="inquiry">お問い合わせ</a>
      </div>
      <!-- ハンバーガーボタン -->
      <button type="button" class="c-hamburger" id="js-hamburger" aria-controls="js-glabal-menu" aria-expanded="false" aria-label="メニューを開閉する">
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__menu" id="js-hamburger__menu">MENU</span>
      </button>
    </div><!-- .header-right -->
    <!-- スマホ用ドロワーメニュー -->
    <div class="c-drawer" id="js-drawer" area-hidden="true">
      <div class="drawer-header">
        <h1 class="header-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo (2).png" alt="Engress">
          </a>
        </h1>
      </div><!-- .drawer-header -->
      <ul class="c-drawer__list">
        <li class="c-drawer__item">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-drawer__link" id="js-home">
            <p class="drawer-text">ホーム</p>
          </a>
        </li>
        <li class="c-drawer__item">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>/news" class="c-drawer__link" id="js-news">
            <p class="drawer-text">お知らせ</p>
          </a>
        </li>
        <li class="c-drawer__item">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog" class="c-drawer__link" id="js-blog">
            <p class="drawer-text">ブログ</p>
          </a>
        </li>
        <li class="c-drawer__item">
          <a href="<?php echo esc_url( get_permalink(2147)); ?>" class="c-drawer__link" id="js-price">
            <p class="drawer-text">コース・料金</p>
          </a>
        </li>
        <li class="c-drawer__item">
          <a href="<?php echo esc_url( get_permalink(2156) ); ?>" class="c-drawer__link" id="js-request">
            <p class="drawer-text">資料請求</p>
          </a>
        </li>
        <li class="c-drawer__item">
          <a href="<?php echo esc_url( get_permalink(2156) ); ?>" class="c-drawer__link" id="js-inquiry">
            <p class="drawer-text">お問い合わせ</p>
          </a>
        </li>
      </ul><!-- .c-drawer__list -->
    </div><!-- .c-drawer -->
  </div><!-- .header__inner -->
</header><!-- .header -->