<?php 
// Template Name: Guides

get_header();
?>

<section class="banner page">
	<h1>Guides</h1>
</section>
<section class="main guides">
<?php
$guide = new WP_Query(array(
				'post_type' => 'guide'
				)); 

while($guide->have_posts()) {
	$guide->the_post(); ?>
		<div class="guide-container">
			<div class="guide-img"></div>
			<h2><?php the_field('name'); ?></h2>
			<p><?php the_field('description'); ?></p>
			<p><?php the_field('favorite_wineries'); ?></p>
		</div>
		

<?php 
}
?>
	<div class="clear"></div>
</section>
<?php
get_footer();

 ?>

