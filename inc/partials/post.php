
<div class="col-md-6 abt-left">
  <a href="<?php echo BASE_URL . 'post/' . $post['id']; ?>"> <img src="<?php echo $post['image']; ?>" alt="cari portrait"/></a>
  <h6>Find The Most</h6>
  <h3><a href="<?php echo BASE_URL . 'post/' . $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
  <p><?php echo substr($post['description'], 0, 150) . '..'; ?></p>
  <label><?php echo date("M d Y", strtotime($post['created_at'])); ?></label>
  <?php if (isAuthenticated()) : ?>
  <p><a href="/admin/edit.php?postId=<?php echo $post['id']; ?>">Edit</a> | <a href="<?php echo BASE_URL; ?>procedures/deletePost.php?postId=<?php echo $post['id']; ?>">Delete</a></p>
<?php endif; ?>
</div>
