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

    <!-- ブログメインビジュアル -->
    <section class="blog-mv">
      <h2 class="main-ttl">ブログ</h2>
    </section><!-- .blog-mv -->

    <!-- ブログパンくずリスト -->
    <div class="blog-breadcrumb-area">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div><!-- .breadcrumb-area -->

    <!-- ブログメインエリア -->
    <section class="blog-main">
      <div class="blog-main__inner">
        <!-- 新着一覧 -->
        <div class="new-blog">
        <?php echo "<h2 class='main-ttl'>" . get_the_archive_title() . "</h2>"; ?>
          <div class="blog-list">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <!-- 各新着ブログ -->
                <div class="blog-list__loop">
                  <div class="blog-category">
                    <?php $categories = get_the_category(); ?>
                    <?php echo $categories[0] -> cat_name ;?>
                  </div>
                  <figure class="blog__photo">
                    <a href="<?php the_permalink(); ?>" class="blog__link">
                      <?php
                      if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                        the_post_thumbnail('medium', array('class' => 'blog__img'));
                      }
                      ?>
                    </a>
                  </figure>
                  <div class="sentence">
                    <p class="sentence__date"><?php the_time(get_option('date_format')); ?></p>
                    <a href="<?php the_permalink(); ?>" class="sentence__link"><?php echo wp_trim_words(get_the_title(), 40, '…'); ?></a>
                    <a href="<?php the_permalink(); ?>" class="sentence__excerpt">
                      <?php the_excerpt(); ?>
                    </a>
                  </div>
                </div><!-- blog-list__1 -->
              <?php endwhile; ?>
            <?php else : ?>
              <p class="not-found">記事が見つかりませんでした</p>
            <?php endif; ?>
          </div><!-- blog-list -->
        </div><!-- .new-blog -->
      </div><!-- .blog-main__inner -->
    </section><!-- ."blog-main" -->

    <!-- ページネーション -->
    <?php
    $args = array(
      'mid_size' => 2,  // 現在ページの前後のページ番号をいくつ表示するか
      // 'prev_text' => '&lt;&lt;前へ',
      // 'next_text' => '次へ&gt;&gt;',
      'screen_reader_text' => ' ',
    );
    the_posts_pagination($args);
    ?>

    <?php get_template_part('includes/contact'); ?>

    <?php get_template_part('includes/footer'); ?>
  </div><!-- .wrapper -->

  <?php get_footer(); ?>
</body>

</html>