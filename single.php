<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="wrapper">

    <?php get_template_part('includes/header'); ?>

    <!-- 投稿パンくずリスト -->
    <div class="post-breadcrumb-area">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div><!-- .breadcrumb-area -->

    <!-- 投稿全体 -->
    <div class="post-whole">
      <div class="post-whole__inner">
        <div class="post-left">
          <!-- 投稿エリア（WordPress入力エリア） -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <section class="post">
                <div class="icon">
                  <p class="icon__text"><?php the_category(); ?></p>
                </div>
                <h2 class="main-ttl"><?php the_title(); ?></h2>
                <div class="sns-date">
                  <div class="sns">
                    <?php
                    if (function_exists('wp_social_bookmarking_light_output_e')) {
                      wp_social_bookmarking_light_output_e();
                    };
                    ?>
                  </div>
                  <div class="date"><?php the_date(); ?></div>
                </div><!-- .sns-date -->
                <div class="wp-post">
                  <?php the_post_thumbnail(array(590, 370), array('alt' => 'アイキャッチ画像')); ?>
                  <?php the_content(); ?>
                </div>
              </section><!-- .post -->
            <?php endwhile; ?>
          <?php endif; ?>

          <!-- おすすめの記事エリア -->
          <div class="recommend-post">
            <h2 class="headline">おすすめの記事</h2>

            <?php
            $args = array(
              'post__not_in' => array($post->ID),
              'posts_per_page' => 3,
              'tag_id' => 153,
              'orderby' => 'rand',
            );
            $query = new WP_Query($args);
            ?>

            <!-- おすすめの記事一覧 -->
            <?php if ($query->have_posts()) : ?>
              <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="recommend-loop">
                  <div class="blog-category">
                    <?php $categories = get_the_category(); ?>
                    <?php echo $categories[0]->cat_name; ?>
                  </div>
                  <figure class="recommend__photo">
                    <a href="<?php the_permalink(); ?>" class="r__link">
                      <?php
                      if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                        the_post_thumbnail('medium', array('class' => 'r__img'));
                      }
                      ?>
                    </a>
                  </figure>
                  <div class="sentence">
                    <p class="sentence__date"><?php the_time(get_option('date_format')); ?></p>
                    <a href="<?php the_permalink(); ?>" class="sentence__link">
                      <?php echo wp_trim_words(get_the_title(), 30, '…'); ?>
                    </a>
                  </div>
                </div><!-- .recommend-loop -->
              <?php endwhile; ?>
            <?php else : ?>
              <p>おすすめの記事はありませんでした。</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div><!-- .recommend-post -->
        </div>

        <?php get_template_part('includes/side-bar'); ?>
      </div><!-- .post-whole__inner -->
    </div><!-- ."post-whole" -->

    <?php get_template_part('includes/contact'); ?>

    <?php get_template_part('includes/footer'); ?>
  </div><!-- .wrapper -->

  <?php get_footer(); ?>
</body>

</html>