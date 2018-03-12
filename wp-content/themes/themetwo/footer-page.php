<div class="footer-wrapper">
  <div class="footer-main">
    <?php if(!dynamic_sidebar('footer')){ ?>
      <span>Это footer, добавляемого из виджетов</span>
    <?php } ?>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>