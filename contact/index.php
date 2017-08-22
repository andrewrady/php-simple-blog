<?php
require('../inc/bootstrap.php');
//fix with ROOT_PATH 
require('../inc/header.php');

?>

<div class="contact">
  <div class="container">
    <div class="contact-top heading">
      <h3>CONTACT</h3>
    </div>
    <div class="contact-bottom">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d412508.1860578919!2d-115.45518692834202!3d36.124673764267634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80beb782a4f57dd1%3A0x3accd5e6d5b379a3!2sLas+Vegas%2C+NV!5e0!3m2!1sen!2sus!4v1480884923120" frameborder="0" style="border:0" allowfullscreen></iframe>
      <div class="contact-text">
        <div class="col-md-4 contact-left">
          <h4>Contact Me</h4>
          <p>Want to get in touch with me, or have questions about a project? Send me an email and I will get back to as soon as I can.</p>
        </div>
        <div class="col-md-8 contact-right">
          <form method='post' action="<?php echo BASE_URL; ?>thanks">
          <input type="text" name="name" placeholder="Name">
          <input type="text" name="email" placeholder="Email">
          <textarea name="msg"  placeholder="Message"></textarea>
            <div class="submit-btn">
                <input type="submit" value="SUBMIT">
            </div>
          </form>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<?php 
//fix with ROOT_PATH 
require('../inc/footer.php');

?>