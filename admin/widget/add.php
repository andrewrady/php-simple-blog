<?php
require_once '../../inc/bootstrap.php';
requireAuth();
require_once '../../inc/header.php';

?>
	<div class="container">
		<h1>Add Widget</h1>
		<form method="post" action="<?php echo BASE_URL; ?>procedures/addwidget.php" enctype="multipart/form-data">
			<?php include __DIR__ . '/../../inc/partials/widgetForm.php'; ?>
		</form>
	</div>

<?php
require_once '../../inc/footer.php';

?>
