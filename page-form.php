<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>
<body <?php body_class(); ?>>
  <div class="wrapper">

    <?php get_template_part('includes/header'); ?>

    <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php
        if (has_post_thumbnail()) :
          $id = get_post_thumbnail_id();
          $img = wp_get_attachment_image_src($id, 'full');
        else :
          $img = array(get_template_directory_uri() . '/img/fv.jpg');
        endif;
        ?>

        <!-- お問い合わせ・資料請求メインビジュアル -->
        <section class="form-mv">
          <h2 class="main-ttl"><?php the_title(); ?></h2>
        </section><!-- .form-mv -->

        <!-- お問い合わせ・資料請求パンくずリスト -->
        <div class="form-breadcrumb-area">
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
              bcn_display();
            } ?>
          </div>
        </div><!-- .breadcrumb-area -->

        <?php the_content(); ?>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php get_template_part('includes/footer'); ?>
  </div><!-- .wrapper -->

  <?php get_footer(); ?>
</body>
</html>