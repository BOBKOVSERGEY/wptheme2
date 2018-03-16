<?php get_header(); ?>
  <div class="content-main">
    <div class="content-main-blocks">
      <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>


        <div>
          <?php the_post_thumbnail('full'); ?>
          <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
          <?php $customFields = get_post_custom(get_the_ID()); ?>
          <?php if ($customFields['place'][0]) {?>
            <p class="ex-place"><?php echo $customFields['place'][0]?></p>
          <?php } ?>
          <?php if ($customFields['date'][0]) {?>
            <p class="ex-date"><?php echo $customFields['date'][0]?></p>
          <?php } ?>
          <?php if ($customFields['ticket'][0]) {?>
            <p class="ex-ticket"><?php echo $customFields['ticket'][0]?></p>
          <?php } ?>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php the_permalink(); ?>" class="read-more"> Read more</a></p>
        </div>

      <?php endwhile; ?>
      <?php endif; ?>
      <div style="clear:both;"></div>

    </div>
  </div>
<?php get_footer(); ?>