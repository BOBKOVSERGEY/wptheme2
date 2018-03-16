<div class="footer-wrapper">
  <div class="footer-main">
    <?php if(!dynamic_sidebar('footer')){ ?>
      <span>Это footer, добавляемого из виджетов</span>
    <?php } ?>
  </div>
</div>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url')?>/js/jquery-1.8.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery.liSlidik.js"></script>

<script>
  $(function(){
    $(window).load(function(){
      $('#slide_2').liSlidik({
        auto:3000,
        duration: 1000
      });
    })
  });
</script>

</body>
</html>