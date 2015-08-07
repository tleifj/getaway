<?php 
get_header();

?>
<section class="banner page gear">
	<h1><?php the_title(); ?></h1>
</section>
<section class="page-container">
<?php 
$gear = new WP_Query(array('post_type' => 'gear'));

while($gear->have_posts()) {
	$gear->the_post();
 ?>
<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
Hey!
</section>

<?php
}
get_footer();

 ?>