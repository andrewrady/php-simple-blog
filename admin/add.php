<?php 
require_once '../inc/bootstrap.php';
requireAuth();
require_once '../inc/header.php';

?>
	<div class="container">
		<h1>Add Post</h1>
		<form method="post" action="<?php echo BASE_URL; ?>procedures/addpost" enctype="multipart/form-data">
			<?php include __DIR__ . '/../inc/partials/bookForm.php'; ?>
		</form>
	</div>

<?php
require_once '../inc/footer.php';

?>