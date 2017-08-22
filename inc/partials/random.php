<div class="might-grid">
  <div class="grid-might">
    <a href="<?php echo BASE_URL . 'post/' . $post['id']; ?>"><img src="<?php echo  $post['image']; ?>" class="img-responsive" alt=""> </a>
  </div>
  <div class="might-top">
    <h4><a href="<?php echo BASE_URL . 'post/' . $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
    <p><?php echo substr($post['description'], 0, 100) . '..' ?></p>
  </div>
  <div class="clearfix"></div>
</div>