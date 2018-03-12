<?php get_header(); ?>
  <div class="content-main">
    <?php if(!dynamic_sidebar('slider_index')){ ?>
      <span>Это sidebar, добавляемого из виджетов</span>
    <?php } ?>

    <div class="content-main-blocks">
    <?php
      $args = [
        'post_type' => ['post', 'page'], // берем записи типа post и page
        'meta_key' => 'order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'posts_per_page' => 3
      ];
      $pageIndex = new WP_Query($args);
    ?>
      <?php if ($pageIndex->have_posts()) :  while ($pageIndex->have_posts()) : $pageIndex->the_post(); ?>
        <div>
          <?php if ( has_post_thumbnail() ) {?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full');?></a>
          <?php }?>
          <h1><a href="<?php the_permalink(); ?>"><?php echo get_post_meta(get_the_ID(), 'title', true); ?></a></h1>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>