<?php get_header('page'); ?>
<div class="content-main">
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <div class="content-left">
      <h1><?php the_title(); ?></h1>
      <?php the_post_thumbnail('full', ['class' => "img-left"]); ?>
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php get_sidebar('category');?>
</div>
<?php get_footer('page'); ?>