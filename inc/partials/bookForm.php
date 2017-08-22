<div class="row">
	<div class="col-md-8">
		<label for="title">Title</label>
	<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?php if(!empty($post['title'])) { echo $post['title']; } ?>">
	</div>
	<div class="col-md-4">
		<!--<label for="featured">Featured</label>
		<select name="featured" class="form-control">
			<option value="0">No</option>
			<option value="1" <?php if (!empty($post['featured'])) { if ($post['featured'] == 1) { echo "selected='select'"; }} ?>>Yes</option>
		</select>-->
	</div>
</div>

<div class="row">
	<div class="col-md-12 image">
		<?php if(!empty($post['image'])) { echo "<img src='" . $post['image'] . "' class='img-responsive'/>"; }?>
		<input type="file" name="file" id='file'>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<textarea name="description" class="form-control" id="description"><?php if(!empty($post['description'])) { echo $post['description']; } ?></textarea>
	</div>
</div>



<button type="submit" class="btn"><?php if(isset($buttonText)) echo $buttonText; else echo "Add Post"; ?></button>
