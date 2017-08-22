<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cari</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/chocolat.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>static/css/main.css">
    <script src="<?php echo BASE_URL; ?>static/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>static/js/easing.js"></script>
    <script type="text/javascript">
    			jQuery(document).ready(function($) {
    				$(".scroll").click(function(event){
    					event.preventDefault();
    					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    				});
    			});
    		</script>
  </head>
  <body>
  <!--header-top-starts-->
  <div class="header-top">
    <div class="container">
      <div class="head-main">
        <a href="/"><img src="<?php echo BASE_URL; ?>static/img/logo2.jpg" alt="Logo" class='main-logo' /></a>
      </div>
    </div>
  </div>
  <div class="header">
    <div class="container">
      <div class="head">
      <div class="navigation">
         <span class="menu"></span>
          <?php include __DIR__ . '/nav.php'; ?>
      </div>
      <div class="header-right">
        <!-- <div class="search-bar">
          <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
          <input type="submit" value="">
        </div> -->
        <ul>
          <li><a href="https://www.facebook.com/sharer/sharer.php?u=www.crafty-cari.com/"><span class="fb"> </span></a></li>
          <li><a href="https://twitter.com/share?url=www.crafty-cari.com"><span class="twit"> </span></a></li>
        </ul>
      </div>
        <div class="clearfix"></div>
      </div>
      </div>
    </div>
    <script>
      $("span.menu").click(function(){
        $(" ul.navig").slideToggle("slow" , function(){
        });
      });
    </script>
