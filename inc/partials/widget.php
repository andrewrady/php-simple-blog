<div class="widget">
  <?php if(isAuthenticated()) : ?>
    <h2><?php echo $widget['title']; ?></h2>
  <? endif; ?>
  <?php echo $widget['content']; ?>
  <?php if(isAuthenticated()) : ?>
  <p><a href="<?php echo BASE_URL; ?>procedures/deleteWidget.php?widgetId=<?php echo
  $widget['id']; ?>">Delete</a></p>
  <? endif; ?>
</div>
