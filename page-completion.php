<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="wrapper">

    <?php get_template_part('includes/header'); ?>

    <!-- 送信完了パンくずリスト -->
    <div class="completion-breadcrumb-area">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>

    <!-- 送信完了メッセージ -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <div class="completion">
          <p class="completion__text">お問い合わせいただきありがとうございます<br>内容を確認した後、担当者よりご連絡いたします</p>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="completion__link">ホームへ戻る</a>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php get_template_part('includes/footer'); ?>
  </div><!-- .wrapper -->

  <?php get_footer(); ?>
</body>

</html>