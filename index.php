<?php
require('inc/bootstrap.php');
require('inc/header.php');

?>

<div class="banner">
  <div class="container">
    <div class="banner-top">
      <div class="banner-text">
        <h1>Scrappin Cari</h1>
        <div class="banner-btn">
          <a href="<?php echo BASE_URL; ?>about">Find Out More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="about">
  <div class="container">
    <div class="about-main">
      <div class="col-md-8 about-left">
          <?php 
          //foreach (getFeaturedPost() as $post) {
            //include __DIR__ . '/inc/partials/featured.php';
          //}
          ?>
        <div class="about-tre">
          <div class="a-1 intro">
            <?php
            foreach (getAllPosts() as $post) {
               include __DIR__ . '/inc/partials/post.php';
            }

            ?>
          </div>
        </div>
      </div>
      <div class="col-md-4 about-right heading">
        <div class="abt-1">
          <h3>ABOUT US</h3>
          <div class="abt-one">
            <img src="static/img/cari.jpg"  class="about-image" alt="" />
            <p>Thank you for visiting Crafting with Cari.....Cari started crafting around 2007 when she went to a friends scrapbook club to support someone else and BOOM, she was hooked. Cari's first love is her family but in a close second is her crafting.</p>
            <div class="a-btn">
              <a href="<?php echo BASE_URL; ?>about">Read More</a>
            </div>
          </div>
        </div>
        <div class="abt-2">
          <h3>YOU MIGHT ALSO LIKE</h3>
            <?php
            foreach (getRandomPosts() as $post) {
               include __DIR__ . '/inc/partials/random.php';
            }

            ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!--about-end-->
<?php 

require('inc/footer.php');

?>
