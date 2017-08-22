<ul class="navig">
	<li><a href="/">Home</a></li>
	<li><a href="<?php echo BASE_URL; ?>about">About</a></li>
	<li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
	<?php if (isAuthenticated()) : ?>
		<li><a href="<?php echo BASE_URL; ?>admin/add">Add Post</a></li>
		<li><a href="<?php echo BASE_URL; ?>admin/widget/add">Add Widget</a></li>
	  <li><a href="<?php echo BASE_URL; ?>admin/widget/view">View Widget</a></li>
		<li><a href="<?php echo BASE_URL; ?>procedures/doLogout">Logout</a></li>
	<?php endif; ?>
</ul>
