<?php get_header('page'); ?>
  <div class="content-main">

    <div class="content-left">
      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="contact-form">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>



    </div>
    <?php get_sidebar('contacts');?>
  </div>

<?php get_footer('page'); ?>