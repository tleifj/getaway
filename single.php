<?php 
get_header();

// Get the featured img source for featured image to add to masthead background
if (has_post_thumbnail()) {
	$imageID =  get_post_thumbnail_id($post->ID); 
	$featuredImage = wp_get_attachment_image_src($imageID);
	$imageURL = $featuredImage[0];
} else {
	$imageURL = get_template_directory_uri().'/images/thumbnail-placeholder.jpg';
}
?>
<section class="banner page" style="background: url(<?php echo $imageURL;?>) 0 0 no-repeat; background-size: cover;">
	<h1><?php the_title(); ?></h1>
	
</section>
<section class="page-container">
	<div class="blog-listing-container">
	<?php	
	if(have_posts()) {
		while (have_posts()) {
		the_post();
		?>
		<div class="blog-post single">	
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
			<span><?php the_author(); ?> | </span>
			<span><?php the_date(); ?></span>
			<p><?php the_content();?></p>
		</div>
		<?php	
		}
	} else {
		echo '<p>No content found.</p>';
	}
	 ?>
	</div>
</section>

<?php
get_footer();

 ?>
