<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="wrapper">

    <?php get_template_part('includes/header'); ?>

    <!-- お知らせ詳細パンくずリスト -->
    <div class="notice-breadcrumb-area">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div><!-- .breadcrumb-area -->

    <!-- お知らせ詳細 -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="notice">
          <div class="notice__inner">
            <h2 class="main-ttl"><?php the_title(); ?></h2>
            <div class="date"><?php the_date(); ?></div>
            <?php the_content(); ?>
          </div><!-- .notice__inner -->
        </section><!-- .notice -->
      <?php endwhile; ?>
    <?php endif; ?>

    <?php get_template_part('includes/contact'); ?>

    <?php get_template_part('includes/footer'); ?>
  </div><!-- .wrapper -->
  <?php get_footer(); ?>
</body>

</html>