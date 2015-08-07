<?php 

if(have_posts()) {
	while (have_posts()) {
		the_post();
		?>
		<div class="blog-post ">	
			<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
			<span><a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | </span>
			<span><?php the_date(); ?></span>
			<div class="blog-info clearfix">
				<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail('med-thumbnail');
						} else {
							echo '<img src="'. get_template_directory_uri() . '/images/thumbnail-placeholder.jpg" alt=""/>';
						}
						?>
				<p><?php the_excerpt();?></p>
			</div>	
		</div>
	<?php	
	}
} else {
	echo '<p>No content found.</p>';
}
 ?>

