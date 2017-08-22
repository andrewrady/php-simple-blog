<?php
require('../inc/bootstrap.php');
require_once('../inc/header.php');

$post = getPost(request()->get('id'));

$postTitle = $post['title'];
$postDescription = $post['description'];
$postImage = $post['image'];
$postTime = $post['created_at'];
$buttonText = 'Update Post';

?>

 <div class="single">
		<div class="container">
				<div class="single-top">
					<?php echo "<img class='img-responsive' src='$postImage' alt=''>"; ?>
					<div class=" single-grid">
						<h4><?php echo $postTitle; ?></h4>
							<ul class="blog-ic">
								<li><a href="<?php echo BASE_URL . 'about'; ?>"><span> <i  class="glyphicon glyphicon-user"> </i>Cari Jewett</span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i><?php echo date("M d, Y",  strtotime($postTime)); ?></span></li>
		  					</ul>
						<p><?php echo $postDescription; ?></p>
					</div>

				</div>
        <div class="widget-column">
          <?php
          foreach (getAllWidgets() as $widget) {
            include __DIR__ . '/../inc/partials/widget.php';
          }

          ?>


        </div>
			</div>
	</div>
	<!--end-single-->


<?php

require('../inc/footer.php');

?>
