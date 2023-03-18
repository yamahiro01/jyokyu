<!-- フッター -->
<footer class="footer">
  <div class="footer-info">
    <div class="footer-info__inner">
      <!-- フッター左 -->
      <div class="footer-left">
        <!-- フッターメニュー -->
        <nav class="footer-nav">
          <ul class="footer-nav__list">
            <li class="footer-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-nav__link">ホーム</a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/news" class="footer-nav__link">お知らせ</a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog" class="footer-nav__link">ブログ</a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url( get_permalink(2147)); ?>" class="footer-nav__link">コース・料金</a></li>
          </ul>
        </nav>
        <!-- フッターメニュー（スマホ用） -->
        <nav class="sp-footer-nav">
          <ul class="sp-footer-nav__list__1">
            <li class="footer-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-nav__link">ホーム</a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/news" class="footer-nav__link">お知らせ</a></li>
          </ul>
          <ul class="sp-footer-nav__list__2">
            <li class="footer-nav__item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog" class="footer-nav__link">ブログ</a></li>
            <li class="footer-nav__item"><a href="<?php echo esc_url( get_permalink(2147)); ?>" class="footer-nav__link">コース・料金</a></li>
          </ul>
        </nav>
      </div><!-- .footer-left -->
      <!-- フッター右 -->
      <div class="footer-right">
        <div class="logo-area">
          <h1 class="footer-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="link footer-logo__link">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo (2).png" class="img footer-logo__img" alt="Engress">
            </a>
          </h1>
        </div>
        <div class="footer-right__operation">
          <div class="tel">
            <a href="tel:0123-456-7890" class="tel__link">
              <img src="<?php echo get_template_directory_uri(); ?>/img/パス 16.svg" alt="電話番号" class="tel__icon">
              <span class="tel__num">0123-456-7890</span>
            </a>
          </div>
          <p class="hours">平日08:00〜20:00</p>
        </div>
      </div><!-- .footer-right -->
    </div><!-- .footer-info__inner -->
  </div><!-- .footer__info -->

  <!-- コピーライト -->
  <div class="copyright">
    <div class="copyright__inner">
      <p class="text">© 2020 Engress.</p>
    </div><!-- .copyright__inner -->
  </div><!-- .copyright -->
</footer><!-- .footer -->

<!-- ページトップへ戻るボタン -->
<a href="#top" class="page_top"><i class="fa fa-angle-double-up"></i></a>