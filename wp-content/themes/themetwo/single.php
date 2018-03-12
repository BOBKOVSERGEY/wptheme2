<?php get_header();?>
  <div class="content-main">
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
      <div class="content-left">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php get_footer();?>