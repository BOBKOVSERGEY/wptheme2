<?php get_header('portfolio-page');?>
  <div class="content-main">
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
      <?php the_excerpt(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php get_footer('portfolio-page');?>