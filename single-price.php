<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <?php get_header(); ?>

</head>

<body <?php body_class(); ?>>
  <div class="wrapper">

    <?php get_template_part('includes/header'); ?>

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php
        if (has_post_thumbnail()) :
          $id = get_post_thumbnail_id();
          $img = wp_get_attachment_image_src($id, 'full');
        else :
          $img = array(get_template_directory_uri() . '/img/fv.jpg');
        endif;
        ?>
        <!-- 料金メインビジュアル -->
        <section class="price-mv" style="background-image: url('<?php echo $img[0]; ?>');">
          <h2 class="main-ttl"><?php the_title(); ?></h2>
        </section><!-- .price-mv -->

        <!-- コース・料金パンくずリスト -->
        <div class="price-breadcrumb-area">
          <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
              bcn_display();
            } ?>
          </div>
        </div>

        <!-- 料金表エリア -->
        <section class="price-main">
          <div class="price-main__inner">
            <!-- 料金体系 -->
            <div class="pricing-plan">
              <h2 class="main-ttl">料金体系</h2>
              <div class="plan-area">

                <?php $admission = get_field('admission'); ?>

                <div class="admission">
                  <p class="admission__price">入会金 <?php echo number_format($admission); ?>円</p>
                </div>
                <div class="monthly">
                  <p class="monthly__price">月額費用</p>
                </div>
              </div>
              <p class="annotation">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
            </div><!-- .pricing__plan -->

            <!-- 料金表 -->
            <div class="pricing-list">
              <h2 class="main-ttl">料金表</h2>
              <div class="list-area js-scrollable">

                <?php $basic = get_field('basic'); ?>
                <?php $practice = get_field('practice'); ?>
                <?php $wish = get_field('wish'); ?>
                <?php $flex = get_field('flex'); ?>

                <!-- 基礎プラン -->
                <div class="list-area__1">
                  <div class="list-name">
                    <p class="headline">基礎プラン</p>
                  </div>
                  <div class="list-contents">
                    <div class="fee">
                      <p class="fee__value"><?php echo number_format($basic); ?>円~</p>
                      <p class="fee__monthly">*月額（税抜価格）</p>
                    </div>
                    <div class="detail">
                      <div class="detail__1">
                        <div class="check"></div>
                        <p class="text">カリキュラム作成</p>
                      </div>
                      <div class="detail__2">
                        <div class="check"></div>
                        <p class="text">TOEFL学習サポート</p>
                      </div>
                      <div class="detail__3">
                        <div class="check"></div>
                        <p class="text">週一回のビデオMTG</p>
                      </div>
                    </div>
                  </div>
                </div><!-- list-area__1 -->

                <!-- 演習プラン -->
                <div class="list-area__2">
                  <div class="list-name">
                    <p class="headline">演習プラン</p>
                  </div>
                  <div class="list-contents">
                    <div class="fee">
                      <p class="fee__value"><?php echo number_format($practice); ?>円~</p>
                      <p class="fee__monthly">*月額（税抜価格）</p>
                    </div>
                    <div class="detail">
                      <div class="detail__1">
                        <div class="check"></div>
                        <p class="text">カリキュラム作成</p>
                      </div>
                      <div class="detail__2">
                        <div class="check"></div>
                        <p class="text">TOEFL学習サポート</p>
                      </div>
                      <div class="detail__3">
                        <div class="check"></div>
                        <p class="text">週一回のビデオMTG</p>
                      </div>
                      <div class="detail__4">
                        <div class="check"></div>
                        <p class="text">月二回の模試（解説<br>付き）</p>
                      </div>
                    </div>
                  </div>
                </div><!-- list-area__2 -->

                <!-- 志望校対策プラン -->
                <div class="list-area__3">
                  <div class="list-name">
                    <p class="recommendation">おすすめ</p>
                    <p class="headline">志望校対策プラン</p>
                  </div>
                  <div class="list-contents">
                    <div class="fee">
                      <p class="fee__value"><?php echo number_format($wish); ?>円~</p>
                      <p class="fee__monthly">*月額（税抜価格）</p>
                    </div>
                    <div class="detail">
                      <div class="detail__1">
                        <div class="check"></div>
                        <p class="text">カリキュラム作成</p>
                      </div>
                      <div class="detail__2">
                        <div class="check"></div>
                        <p class="text">TOEFL学習サポート</p>
                      </div>
                      <div class="detail__3">
                        <div class="check"></div>
                        <p class="text">週一回のビデオMTG</p>
                      </div>
                      <div class="detail__4">
                        <div class="check"></div>
                        <p class="text">月二回の模試（解説<br>付き）</p>
                      </div>
                      <div class="detail__5">
                        <div class="check"></div>
                        <p class="text">週一の英語面接対策</p>
                      </div>
                    </div>
                  </div>
                </div><!-- list-area__3 -->

                <!-- フレックスプラン -->
                <div class="list-area__4">
                  <div class="list-name">
                    <p class="headline">フレックスプラン</p>
                  </div>
                  <div class="list-contents">
                    <div class="fee">
                      <p class="fee__value"><?php echo number_format($flex); ?>円~</p>
                      <p class="fee__monthly">*月額（税抜価格）</p>
                    </div>
                    <div class="detail">
                      <p class="detail__1">＊別途ご相談ください</p>
                    </div>
                  </div>
                </div><!-- list-area__4 -->
              </div><!-- list-area -->
            </div><!-- .priceing-list -->

          </div><!-- .price-main__inner -->
        </section><!-- ."price-main" -->

      <?php endwhile; ?>
    <?php endif; ?>

    <?php get_template_part('includes/contact'); ?>

    <?php get_template_part('includes/footer'); ?>
  </div><!-- .wrapper -->

  <?php get_footer(); ?>
</body>

</html>