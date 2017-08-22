<div class="about-one">
  <p>Find The Most</p>
    <h3><?php echo $post['title']; ?></h3>
</div>
<div class="about-two">
    <a href="<?php echo BASE_URL . 'post/' . $post['id']; ?>"><img src="<?php echo  $post['image']; ?>" alt="" /></a>
    <p>Posted by <a href="#">Cari</a> on <?php echo date("M d Y", strtotime($post['created_at'])); ?></p>
    <p><?php echo $post['description']; ?></p>
    <div class="about-btn">
      <a href="<?php echo BASE_URL . 'post/' . $post['id']; ?>">Read More</a>
    </div>
  <ul>
    <li><p>Share : </p></li>
    <li><a href="https://www.facebook.com/sharer/sharer.php?u=www.crafty-cari.com/details/{{ feature.id }}/"><span class="fb"> </span></a></li>
    <li><a href="https://twitter.com/share?url=www.crafty-cari.com/{{ feature.id }}/"><span class="twit"> </span></a></li>
  </ul>
</div>