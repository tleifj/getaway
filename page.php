<?php 
get_header();

the_post();
?>
<section class="banner page">
	<h1><?php the_title(); ?></h1>
</section>
<section class="page-container">
<p><?php the_content(); ?></p>
</section>

<?php
get_footer();

 ?>