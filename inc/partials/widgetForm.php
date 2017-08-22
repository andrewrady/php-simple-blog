<div class="row">
	<div class="col-md-8">
		<label for="title">Title</label>
	<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php if(!empty($widget['title'])) { echo $widget['title']; } ?>">
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<textarea name="content" class="form-control" id="content"><?php if(!empty($widget['content'])) { echo $widget['content']; } ?></textarea>
	</div>
</div>



<button type="submit" class="btn"><?php if(isset($buttonText)) echo $buttonText; else echo "Add Content"; ?></button>
