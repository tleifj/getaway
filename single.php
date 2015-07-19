<?php 
get_header();
?>
<section class="banner page">
	<h1><?php the_title(); ?></h1>
</section>
<section class="page-container">
	<div class="blog-listing-container">
	<?php	
	if(have_posts()) {
		while (have_posts()) {
		the_post();
		?>
		<div class="blog-post">	
			<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
			<span><a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | </span>
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
	<div class="sidebar">
	<h2>Categories</h2>
	</div>	
	<div class="clear"></div>
</section>

<?php
get_footer();

 ?>
