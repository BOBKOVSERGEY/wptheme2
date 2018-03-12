<div class="sidebar">
  <?php
  $args = [
    'post_type' => 'post',
    'orderby' => 'rand',
    'category_name' => 'photo-shoot, exhibitions',
    'posts_per_page' => 1
  ];

  $randPost = new WP_Query($args);
  ?>
  <?php if ($randPost->have_posts()) :  while ($randPost->have_posts()) : $randPost->the_post(); ?>
    <?php if ( has_post_thumbnail() ) {?>
      <a href="<?php the_permalink();?>"><?php the_post_thumbnail('full');?></a>
    <?php }?>
    <h2><a href="<?php the_permalink();?>"><?php the_title()?></a></h2>
    <p><?php the_excerpt(); ?></p>
  <?php endwhile; ?>
  <?php else: ?>
  <?php endif; ?>
  <!--<div>
        <a href="#"><img src="<?php bloginfo('template_url')?>/images/side-img1.jpg" alt="" /></a>
        <h1><a href="#">Skill Set</a></h1>
        <p>Sed dolor ligula, tempus vitae malesuada utescu
          congue vitae diam. Integer non nisl est. Suspen
          isse at diam turpis, ut mattis velit. Praesent vel est non augue pretium condimentum at in mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in varius ante. Etiam et nisi eget velit dignissim gravida ac nec quam. Aenean imperdiet massa quis diam tempunec.</p>
        <p><a href="#" class="read-more">read more</a></p>
      </div>-->
</div>