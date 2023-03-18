<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="wrapper">

    <?php get_template_part('includes/header'); ?>

    <!-- お知らせメインビジュアル -->
    <section class="news-mv">
      <h2 class="main-ttl">お知らせ</h2>
    </section><!-- .news-mv -->

    <!-- お知らせパンくずリスト -->
    <div class="news-breadcrumb-area">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div><!-- .breadcrumb-area -->

    <!-- お知らせメインエリア -->
    <section class="news-main">
      <div class="news-main__inner">
        <!-- お知らせ一覧 -->
        <div class="news-area">
          <?php echo "<h2 class='main-ttl'>" . get_the_archive_title() . "</h2>"; ?>
          <div class="news-list">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <!-- 各新着お知らせ -->
                <div class="news-list__loop">
                  <p class="date"><?php the_time(get_option('date_format')); ?></p>
                  <a href="<?php the_permalink(); ?>" class="text-link"><?php echo wp_trim_words(get_the_title(), 35, '…'); ?></a>
                </div><!-- news-list__loop -->
              <?php endwhile; ?>
            <?php else : ?>
              <p class="not-found">記事が見つかりませんでした</p>
            <?php endif; ?>
          </div><!-- news-list -->
        </div><!-- .news-area -->
      </div><!-- .news-main__inner -->
    </section><!-- ."news-main" -->

    <!-- ページネーション -->
    <!-- PC用 -->
    <div class="pc-page">
      <?php
      $args = array(
        'mid_size' => 2,  // 現在ページの前後のページ番号をいくつ表示するか
        // 'prev_text' => '&lt;&lt;前へ',
        // 'next_text' => '次へ&gt;&gt;',
        'screen_reader_text' => ' ',
      );
      the_posts_pagination($args);
      ?>
    </div>

    <!-- スマホ用 -->
    <div class="sp-page">
      <?php
      //表示部分
      if (function_exists("pagination")) { //ページャーの関数が定義されていれば
        pagination($wp_query->max_num_pages); //ページャーを表示
      }
      ?>
    </div>

    <?php get_template_part('includes/contact'); ?>

    <?php get_template_part('includes/footer'); ?>
  </div><!-- .wrapper -->

  <?php get_footer(); ?>
</body>

</html>