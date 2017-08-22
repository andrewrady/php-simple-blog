<?php

require_once '../../inc/bootstrap.php';
requireAuth();
require_once '../../inc/header.php';

?>

<div class="container">
  <h1>All Widgets</h1>
  <?php
  foreach (getAllWidgets() as $widget) {
    echo "<div class='widget-container'>";
    include __DIR__ . '/../../inc/partials/widget.php';
    echo "</div>";
  }

  ?>
</div>

<?php
require_once '../../inc/footer.php';

?>
