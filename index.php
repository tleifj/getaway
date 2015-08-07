<?php 
get_header();

?>
<section class="banner page blog">
	<h1>Blog</h1>
</section>
<section class="page-container">
	<div class="blog-listing-container">
		<?php get_template_part('loop');?>
	</div>
</section>

<?php
get_footer();

 ?>
