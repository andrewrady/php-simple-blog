<?php 
require_once '../inc/bootstrap.php';
requireAuth();
require_once '../inc/header.php';

$post = getPost(request()->get('postId'));

$postTitle = $post['title'];
$postDescription = $post['description'];
$postImage = $post['image'];
$buttonText = 'Update Post';

?>	
	<div class="container edit">
		<h1>Edit Post</h1>
		<form method="post" action="<?php echo BASE_URL; ?>procedures/editpost" enctype="multipart/form-data">
			<input type="hidden" name="postId" value="<?php echo $post['id']; ?>">
			<?php include __DIR__ . '/../inc/partials/bookForm.php'; ?>
		</form>
	</div>

<?php
require_once '../inc/footer.php';

?>