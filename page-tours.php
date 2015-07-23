<?php 
get_header();

?>
<section class="banner page">
	<h1>Tours</h1>
</section>
<section class="main guides">
<?php 
$day_tour = new WP_Query(array(
				'post_type' => 'tour',
				'category_name' => 'day-tour',
				'order' => 'ASC'
				)); 

$multi_day_tour = new WP_Query(array(
				'post_type' => 'tour',
				'category_name' => 'multi-day-tour'
				)); 

$group_tour = new WP_Query(array(
				'post_type' => 'tour',
				'category_name' => 'group-tour'
				)); 
?>
	<section id="day-trips" class="offset">
		<h1>Day Trips</h1>
<?php					
if($day_tour->have_posts()) { 
	while($day_tour->have_posts()) {
		$day_tour->the_post();
	?>
		<div class="small-tour-container">
			
				<div class="small-tour-img">
				<a href="<?php the_permalink();?>">
					<div class="overlay">
						
						<p>More Info</p>
						<div class="arrow-icon"></div>
					</div>
					<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail();
						} else {
							echo '<img src="'. get_template_directory_uri() . '/images/thumbnail-placeholder.jpg" alt=""/>';
						}
						?>
				</a>
				</div>	
				
			<a href="<?php the_permalink();?>"><h2><?php the_field('name'); ?></h2></a>
			<p><?php the_field('tag_line');?></p>

		</div>
		<?php	
		} 
	} else {
		echo '<p>Sorry, no content found.</p>';
	}
?>	
	 	<div class="clear"></div>
	</section> 
	<hr>
	<section id="multi-day-trips" class="offset">
		<h1>Multi-Day Trips</h1>
<?php					
if($multi_day_tour->have_posts()) { 
	while($multi_day_tour->have_posts()) {
		$multi_day_tour->the_post();
	?>
		<div class="small-tour-container">
			<div class="small-tour-img">
				<a href="<?php the_permalink();?>">
					<div class="overlay">
						
						<p>More Info</p>
						<div class="arrow-icon"></div>
					</div>
					<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail();
						} else {
							echo '<img src="'. get_template_directory_uri() . '/images/thumbnail-placeholder.jpg" alt=""/>';
						}
						?>
				</a>
				</div>
			<h2><?php the_field('name'); ?></h2>
			<p><?php the_field('tag_line');?></p>
		</div>
		<?php	
		} 
	} else {
		echo '<p>Sorry, no content found.</p>';
	}
?>		
		<div class="clear"></div>
	</section>
	<hr>
	<section id="group-trips" class="offset">
		<h1>Group Trips</h1>
<?php					
if($group_tour->have_posts()) { 
	while($group_tour->have_posts()) {
		$group_tour->the_post();
	?>
		<div class="small-tour-container">
			<div class="small-tour-img">
				<a href="<?php the_permalink();?>">
					<div class="overlay">
						
						<p>More Info</p>
						<div class="arrow-icon"></div>
					</div>
					<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail();
						} else {
							echo '<img src="'. get_template_directory_uri() . '/images/thumbnail-placeholder.jpg" alt=""/>';
						}
						?>
				</a>
				</div>
			<h2><?php the_field('name'); ?></h2>
			<p><?php the_field('tag_line');?></p>
		</div>
		<?php	
		} 
	} else {
		echo '<p>Sorry, no content found.</p>';
	}
?>	
	 	<div class="clear"></div>		
	</section>
</section>
<?php
get_footer();
 ?>