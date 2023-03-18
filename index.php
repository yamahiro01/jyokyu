<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="wrapper">

    <?php get_template_part('includes/header'); ?>

    <?php
    if (has_post_thumbnail()) :
      $id = get_post_thumbnail_id();
      $img = wp_get_attachment_image_src($id, 'full');
    else :
      $img = array(get_template_directory_uri() . '/img/fv.jpg');
    endif;
    ?>

    <!-- メインビジュアル -->
    <section class="mv" style="background-image: url('<?php echo $img[0]; ?>');">
      <h1 class="main-ttl">TOEFL対策は<br class="sp-br">Engress</h1>
      <p class="sub-ttl">日本人へのTOEFL指導歴豊かな講師陣の<br>コーチング型TOEFLスクール</p>
      <div class="mv__btn">
        <a href="<?php echo esc_url(get_permalink(2156)); ?>" class="request">資料請求</a>
        <a href="<?php echo esc_url(get_permalink(2156)); ?>" class="inquiry">お問い合わせ</a>
      </div>
    </section><!-- .mv -->

    <!-- "イントロダクション" -->
    <section class="intro">
      <div class="intro__inner">
        <h2 class="main-ttl">TOEFL学習で<br class="sp-br">こんな悩みありませんか？</h2>
        <ul class="problem">
          <li class="problem__1"><span class="sp-dot">・</span>勉強の習慣が<br class="pc-br">身についていない</li>
          <li class="problem__2"><span class="sp-dot">・</span>勉強しているはず<br class="pc-br">なのに点数が伸びない</li>
          <li class="problem__3"><span class="sp-dot">・</span>正しい勉強方法が<br class="pc-br">わからない</li>
        </ul>
        <div class="appeal">
          <div class="appeal__inner">
            <h2 class="headline">Engressは<br><span class="headline__orange">TOEFLに特化したスクール</span><br class="sp-br">です</h2>
            <p class="text">完全オーダーメイドで、<br class="sp-br">１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
          </div>
        </div>
      </div><!-- .introduction__inner -->
    </section><!-- ."introduction" -->

    <!-- "特徴" -->
    <section class="features">
      <div class="features__inner">
        <h2 class="main-ttl">TOEFL対策に特化した<br class="sp-br">Engress3つの強み</h2>
        <!-- "特徴 1" -->
        <div class="curriculum">
          <div class="curriculum__sentence">
            <div class="icon">
              <p class="icon__text">特長 １</p>
            </div>
            <h3 class="headline">TOEFLに最適化された<br>無駄のないカリキュラム</h3>
            <p class="text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
          </div>
          <figure class="curriculum__photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/feature01.jpg" class="curriculum__img">
          </figure>
        </div><!-- .curriculum -->

        <!-- "特徴 2" -->
        <div class="teacher">
          <div class="teacher__sentence">
            <div class="icon">
              <p class="icon__text">特長 ２</p>
            </div>
            <h3 class="headline">日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
            <p class="text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
          </div>
          <figure class="teacher__photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/feature02.jpg" class="teacher__img">
          </figure>
        </div><!-- .teacher -->

        <!-- "特徴 3" -->
        <div class="result">
          <div class="result__sentence">
            <div class="icon">
              <p class="icon__text">特長 ３</p>
            </div>
            <h3 class="headline">平均3ヶ月でTOEFL iBT20点アップ</h3>
            <p class="text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
          </div>
          <figure class="result__photo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/feature03.jpg" class="result__img">
          </figure>
        </div><!-- .result -->

        <!-- "価格" -->
        <div class="price">
          <h3 class="price__ttl">Engressの料金プランはこちら</h3>
          <div class="price__btn">
            <a href="<?php echo esc_url(get_permalink(2147)); ?>" class="price__link">料金を見てみる</a>
          </div>
        </div><!-- .price -->
      </div><!-- ."features__inner" -->
    </section><!-- ."features" -->

    <!-- "成功事例" -->
    <section class="success">
      <div class="success__inner">
        <h2 class="main-ttl">TOEFL成功事例</h2>
        <div class="review-area">
          <!-- "成功事例 1" -->
          <?php $example__1 = get_field('example__1'); ?>
          <?php $model__1 = get_field('model__1'); ?>
          <?php
          if ($model__1) :
            $src__1 = wp_get_attachment_image_src($model__1, 'full');
          endif;
          ?>
          <?php $job__1 = get_field('job__1'); ?>
          <?php $name__1 = get_field('name__1'); ?>
          <?php $outcome__1 = get_field('outcome__1'); ?>

          <!-- PC用 -->
          <div class="pc-review__1">
            <p class="example__text"><?php echo ($example__1); ?></p>
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__1[0]; ?>" class="model__img" alt="model01">
              </figure>
            </div>
            <div class="model-info">
              <div class="job">
                <p class="job__text"><?php echo ($job__1); ?></p>
              </div>
              <div class="m-name">
                <p class="m-name__text"><?php echo ($name__1); ?></p>
              </div>
            </div>
            <div class="outcome">
              <p class="outcome__text"><?php echo ($outcome__1); ?></p>
            </div>
          </div><!-- ."pc-review__1" -->

          <!-- スモールタブレット用 -->
          <div class="s-tab-review__1">
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__1[0]; ?>" class="model__img" alt="model01">
              </figure>
            </div>
            <div class="s-tab__text">
              <p class="example__text"><?php echo ($example__1); ?></p>
              <div class="model-info">
                <div class="job">
                  <p class="job__text"><?php echo ($job__1); ?></p>
                </div>
                <div class="m-name">
                  <p class="m-name__text"><?php echo ($name__1); ?></p>
                </div>
              </div>
              <div class="outcome">
                <p class="outcome__text"><?php echo ($outcome__1); ?></p>
              </div>
            </div>
          </div><!-- ."s-tab-review__1" -->

          <!-- スマホ用 -->
          <div class="sp-review__1">
            <p class="example__text"><?php echo ($example__1); ?></p>
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__1[0]; ?>" class="model__img" alt="model01">
              </figure>
              <div class="model-info">
                <div class="job">
                  <p class="job__text"><?php echo ($job__1); ?></p>
                </div>
                <div class="m-name">
                  <p class="m-name__text"><?php echo ($name__1); ?></p>
                </div>
                <div class="outcome">
                  <p class="outcome__text"><?php echo ($outcome__1); ?></p>
                </div>
              </div>
            </div>
          </div><!-- ."sp-review__1" -->

          <!-- "成功事例 2" -->
          <?php $example__2 = get_field('example__2'); ?>
          <?php $model__2 = get_field('model__2'); ?>
          <?php
          if ($model__2) :
            $src__2 = wp_get_attachment_image_src($model__2, 'full');
          endif;
          ?>
          <?php $job__2 = get_field('job__2'); ?>
          <?php $name__2 = get_field('name__2'); ?>
          <?php $outcome__2 = get_field('outcome__2'); ?>

          <!-- PC用 -->
          <div class="pc-review__2">
            <p class="example__text"><?php echo ($example__2); ?></p>
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__2[0]; ?>" class="model__img" alt="model02">
              </figure>
            </div>
            <div class="model-info">
              <div class="job">
                <p class="job__text"><?php echo ($job__2); ?></p>
              </div>
              <div class="m-name">
                <p class="m-name__text"><?php echo ($name__2); ?></p>
              </div>
            </div>
            <div class="outcome">
              <p class="outcome__text"><?php echo ($outcome__2); ?></p>
            </div>
          </div><!-- ."pc-review__2" -->

          <!-- スモールタブレット用 -->
          <div class="s-tab-review__2">
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__2[0]; ?>" class="model__img" alt="model02">
              </figure>
            </div>
            <div class="s-tab__text">
              <p class="example__text"><?php echo ($example__2); ?></p>
              <div class="model-info">
                <div class="job">
                  <p class="job__text"><?php echo ($job__2); ?></p>
                </div>
                <div class="m-name">
                  <p class="m-name__text"><?php echo ($name__2); ?></p>
                </div>
              </div>
              <div class="outcome">
                <p class="outcome__text"><?php echo ($outcome__2); ?></p>
              </div>
            </div>
          </div><!-- ."s-tab-review__2" -->

          <!-- スマホ用 -->
          <div class="sp-review__2">
            <p class="example__text"><?php echo ($example__2); ?></p>
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__2[0]; ?>" class="model__img" alt="model02">
              </figure>
              <div class="model-info">
                <div class="job">
                  <p class="job__text"><?php echo ($job__2); ?></p>
                </div>
                <div class="m-name">
                  <p class="m-name__text"><?php echo ($name__2); ?></p>
                </div>
                <div class="outcome">
                  <p class="outcome__text"><?php echo ($outcome__2); ?></p>
                </div>
              </div><!-- ."model-info" -->
            </div><!-- ."model" -->
          </div><!-- ."sp-review__2" -->

          <!-- "成功事例 3" -->
          <?php $example__3 = get_field('example__3'); ?>
          <?php $model__3 = get_field('model__3'); ?>
          <?php
          if ($model__3) :
            $src__3 = wp_get_attachment_image_src($model__3, 'full');
          endif;
          ?>
          <?php $job__3 = get_field('job__3'); ?>
          <?php $name__3 = get_field('name__3'); ?>
          <?php $outcome__3 = get_field('outcome__3'); ?>

          <!-- PC用 -->
          <div class="pc-review__3">
            <p class="example__text"><?php echo ($example__3); ?></p>
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__3[0]; ?>" class="model__img" alt="model03">
              </figure>
            </div>
            <div class="model-info">
              <div class="job">
                <p class="job__text"><?php echo ($job__3); ?></p>
              </div>
              <div class="m-name">
                <p class="m-name__text"><?php echo ($name__3); ?></p>
              </div>
            </div>
            <div class="outcome">
              <p class="outcome__text"><?php echo ($outcome__3); ?></p>
            </div>
          </div><!-- ."pc-review__3" -->

          <!-- スモールタブレット用 -->
          <div class="s-tab-review__3">
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__3[0]; ?>" class="model__img" alt="model03">
              </figure>
            </div>
            <div class="s-tab__text">
              <p class="example__text"><?php echo ($example__3); ?></p>
              <div class="model-info">
                <div class="job">
                  <p class="job__text"><?php echo ($job__3); ?></p>
                </div>
                <div class="m-name">
                  <p class="m-name__text"><?php echo ($name__3); ?></p>
                </div>
              </div>
              <div class="outcome">
                <p class="outcome__text"><?php echo ($outcome__3); ?></p>
              </div>
            </div>
          </div><!-- ."s-tab-review__3" -->

          <!-- スマホ用 -->
          <div class="sp-review__3">
            <p class="example__text"><?php echo ($example__3); ?></p>
            <div class="model">
              <figure class="model__photo">
                <img src="<?php echo $src__3[0]; ?>" class="model__img" alt="model03">
              </figure>
              <div class="model-info">
                <div class="job">
                  <p class="job__text"><?php echo ($job__3); ?></p>
                </div>
                <div class="m-name">
                  <p class="m-name__text"><?php echo ($name__3); ?></p>
                </div>
                <div class="outcome">
                  <p class="outcome__text"><?php echo ($outcome__3); ?></p>
                </div>
              </div><!-- ."model-info" -->
            </div><!-- ."model" -->
          </div><!-- ."sp-review__3" -->
        </div><!-- ."review-area" -->
      </div><!-- ."success__inner" -->
    </section><!-- ."success" -->

    <!-- "ご利用の流れ" -->
    <section class="usage">
      <div class="usage__inner">
        <h2 class="u-main-ttl">ご利用の流れ</h2>
        <!-- "フローチャート" -->
        <div class="flow">
          <!-- "フローチャート 1" -->
          <div class="flow__1">
            <div class="num">
              <p class="num__text">01</p>
            </div>
            <div class="contents">
              <p class="index">お問い合わせ</p>
              <p class="text">まずはフォームまたはお電話からお申し込みください。</p>
            </div>
          </div><!-- ."flow__1" -->

          <!-- "フローチャート 2" -->
          <div class="flow__2">
            <div class="num">
              <p class="num__text">02</p>
            </div>
            <div class="contents">
              <p class="index">ヒアリング</p>
              <p class="text">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
            </div>
          </div><!-- ."flow__2" -->

          <!-- "フローチャート 3" -->
          <div class="flow__3">
            <div class="num">
              <p class="num__text">03</p>
            </div>
            <div class="contents">
              <p class="index">学習プランのご提供</p>
              <p class="text">目標達成のために最適な学習プランをご提案致します。</p>
            </div>
          </div><!-- ."flow__3" -->

          <!-- "フローチャート 4" -->
          <div class="flow__4">
            <div class="num">
              <p class="num__text">04</p>
            </div>
            <div class="contents">
              <p class="index">ご入会</p>
              <p class="text">お申込み完了後、レッスンがスタートします。</p>
            </div>
          </div><!-- ."flow__4" -->
        </div><!-- ."flow" -->

        <!-- "よくある質問" -->
        <div class="faq">
          <h2 class="f-main-ttl">よくある質問</h2>
          <div class="c-accordion">
            <div class="c-accordion__item">
              <p class="c-accordion__title js-accordion__title is-open">Engressはサラリーマンでも学習を続けられるでしょうか？</p>
              <p class="c-accordion__body js-accordion__body">Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
            </div><!-- .c-accordion__item -->
            <div class="c-accordion__item">
              <p class="c-accordion__title js-accordion__title">教材はオリジナルのものを使用しているのでしょうか？</p>
              <p class="c-accordion__body js-accordion__body">はい、当社オリジナルの教材を使用しています。</p>
            </div><!-- .c-accordion__item -->
            <div class="c-accordion__item">
              <p class="c-accordion__title js-accordion__title">講師に日本人はいますか？</p>
              <p class="c-accordion__body js-accordion__body">はい、日本人講師も在籍しています。</p>
            </div><!-- .c-accordion__item -->
            <div class="c-accordion__item">
              <p class="c-accordion__title js-accordion__title">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</p>
              <p class="c-accordion__body js-accordion__body">サポート内容によりますので、是非一度ご相談下さい。</p>
            </div><!-- .c-accordion__item -->
          </div><!-- .c-accordion -->
        </div><!-- .faq -->

        <!-- ブログ・お知らせ共通 -->
        <div class="info">
          <!-- "ブログ" -->
          <article class="blog">
            <h2 class="b-main-ttl">ブログ</h2>

            <?php
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3 // 3記事表示
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>

              <!-- "各ブログ" -->
              <ul class="blog__loop">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <li>
                    <div class="blog-category">
                      <?php $categories = get_the_category(); ?>
                      <?php echo $categories[0]->cat_name; ?>
                    </div>
                    <figure class="blog__photo">
                      <a href="<?php the_permalink(); ?>" class="blog__link">
                        <?php
                        if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                          the_post_thumbnail('thumbnail', array('class' => 'blog__img'));
                        }
                        ?>
                      </a>
                    </figure>
                    <div class="sentence">
                      <a href="<?php the_permalink(); ?>" class="sentence__link">
                        <?php echo wp_trim_words(get_the_title(), 40, '…'); ?>
                      </a>
                      <p class="sentence__date"><?php the_time(get_option('date_format')); ?></p>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul><!-- .blog__loop -->
            <?php wp_reset_postdata();
            endif; ?>
          </article><!-- .blog -->

          <!-- "お知らせ" -->
          <article class="news">
            <h2 class="n-main-ttl">お知らせ</h2>

            <?php
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 3 // 3記事表示
            );
            $the_query = new WP_query($args);
            if ($the_query->have_posts()) :
            ?>

              <!-- 各お知らせ -->
              <ul class="news__loop">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <li class="sentence">
                    <p class="sentence__date"><?php the_time(get_option('date_format')); ?></p>
                    <a href="<?php the_permalink(); ?>" class="sentence__link">
                      <?php echo wp_trim_words(get_the_title(), 40, '…'); ?>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul><!-- .news__loop -->
            <?php wp_reset_postdata();
            endif; ?>
          </article>
        </div><!-- .info -->
      </div><!-- ."usage__inner" -->
    </section><!-- ."usage" -->

    <?php get_template_part('includes/contact'); ?>

    <?php get_template_part('includes/footer'); ?>
  </div><!-- .wrapper -->

  <?php get_footer(); ?>
</body>

</html>