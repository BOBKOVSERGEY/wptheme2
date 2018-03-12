<?php get_header(); ?>
<div class="content-main">
  <?php if(!dynamic_sidebar('slider_index')){ ?>
    <span>Это sidebar, добавляемого из виджетов</span>
  <?php } ?>
  <div class="content-left">
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

      <div class="portfolio-image">
        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full'); ?></a>
      </div>

  <?php endwhile; ?>
  <?php endif; ?>
    <div style="clear:both;"></div>
   <div>
     <?php
     if ( function_exists('wp_bootstrap_pagination') )
       wp_bootstrap_pagination();
     ?>
   </div>
  </div>
  <?php get_sidebar('category');?>
</div>
<?php get_footer(); ?>