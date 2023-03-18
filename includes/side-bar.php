<!-- サイドバー -->
<section class="side-bar">
  <!-- 関連記事エリア -->
  <div class="connection">
    <div class="icon">
      <h3 class="icon__head">関連記事</h3>
    </div>

    <?php
    $categories = get_the_category();
    $category_ID = array();
    foreach ($categories as $category) :
      array_push($category_ID, $category->cat_ID);
    endforeach;
    $args = array(
      'post__not_in' => array($post->ID),
      'posts_per_page' => 3,
      'category__in' => $category_ID,
      'orderby' => 'rand',
    );
    $query = new WP_Query($args);
    ?>

    <!-- 関連記事一覧 -->
    <?php if ($query->have_posts()) : ?>
      <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="connection__loop">
          <figure class="c__photo">
            <a href="<?php the_permalink(); ?>" class="c__link">
              <?php
              if (has_post_thumbnail()) { // 投稿にアイキャッチ画像が割り当てられているかチェックします。
                the_post_thumbnail('medium', array('class' => 'c__img'));  // サムネイルサイズでも拡大率ではみ出る為、'medium'で指定
              }
              ?>
            </a>
          </figure>
          <a href="<?php the_permalink(); ?>" class="text-link"><?php echo wp_trim_words(get_the_title(), 30, '…'); ?></a>
        </div><!-- .connection__loop -->
      <?php endwhile; ?>
    <?php else : ?>
      <p>関連記事はありませんでした。</p>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div><!-- .connection -->

  <!-- カテゴリー -->
  <div class="category">
    <div class="icon">
      <h3 class="icon__head">カテゴリー</h3>
    </div>
    <ul class="category__list">
      <li class="list-item__1"><a href="<?php echo esc_url(home_url('/')); ?>/category/category__1" class="list__link">・カテゴリー1</a></li>
      <li class="list-item__2"><a href="<?php echo esc_url(home_url('/')); ?>/category/category__2" class="list__link">・カテゴリー2</a></li>
      <li class="list-item__3"><a href="<?php echo esc_url(home_url('/')); ?>/category/category__3" class="list__link">・カテゴリー3</a></li>
    </ul>
  </div>
</section><!-- .side-bar -->