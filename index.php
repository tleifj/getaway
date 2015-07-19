<?php 
get_header();

?>
<section class="banner page">
	<h1>Blog</h1>
</section>
<section class="page-container">
	<div class="blog-listing-container">
		<?php get_template_part('loop');?>
	</div>
	<div class="sidebar">
	<h2>Categories</h2>
	</div>	
	<div class="clear"></div>
</section>

<?php
get_footer();

 ?>
