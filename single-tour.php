<?php 

get_header();

?>
<section class="banner tour-banner">
	<div class="header-group">

		<a class="arrow-icon left-arrow" href="<?php $prevpo=get_previous_post(); $prevpoid=$prevpo->ID; echo get_permalink($prevpoid); ?>"><img src="<?php echo get_template_directory_uri();?>/images/left-arrow-icon.png"></a>
		<a class="arrow-icon right-arrow" href="<?php $nepo=get_next_post(); $nepoid=$nepo->ID; echo get_permalink($nepoid); ?>"><img src="<?php echo get_template_directory_uri();?>/images/right-arrow-icon.png"></a>	
		<h1><?php the_field('name');  ?></h1>
	</div>		
</section>
	<section class="main">
		<div class="tour-container page-container">
			<div class="tour-aside">
				<a href=""><div class="book-button">BOOK NOW</div></a>
				<h4>$<?php the_field('price');  ?> per person</h4>
				<div id="TA_selfserveprop659" class="TA_selfserveprop">
					<ul id="Yk64cdhqCe6" class="TA_links wiIGfS">
						<li id="R3bGHbBI2Y" class="r72QDh">
						<a target="_blank" href="http://www.tripadvisor.com/"><img src="http://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
						</li>
					</ul>
				</div>
				<script src="http://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=659&amp;locationId=656317&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=false&amp;iswide=false&amp;border=false&amp;display_version=2"></script>
			</div>
			<h3><?php the_field('tag_line');  ?></h3>
			<p><?php the_field('description');  ?></p>
			<h3>Time</h3>
			<p><?php the_field('time');  ?></p>
			<h3>Meeting Location</h3>
			<p><?php the_field('meeting_location');  ?></p>
			<h3>Includes</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic porro eveniet aliquam amet saepe libero ab, nobis expedita rem repellat soluta minima, est veniam sequi magni non. Illo, accusamus, cupiditate.</p>
			<h3>Wineries</h3>
			<p><?php the_field('wineries');  ?></p>

			
			<div class="clear"></div>
			<div class="mobile">
				<a href="">
					<div class="book-button">BOOK NOW</div>
				</a>
				<!-- <div id="TA_cdsratingsonlywide977" class="TA_cdsratingsonlywide">
					<ul id="pwWrpWxL0O" class="TA_links HE0N0n0D2F87">
						<li id="e8c3zJZ" class="BFDGBE5SdRoq">
							<a target="_blank" href="http://www.tripadvisor.com/">
								<img src="http://www.tripadvisor.com/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/>
							</a>
						</li>
					</ul>
				</div>
					<script src="http://www.jscache.com/wejs?wtype=cdsratingsonlywide&amp;uniq=977&amp;locationId=656317&amp;lang=en_US&amp;border=false&amp;backgroundColor=white&amp;display_version=2"></script>

 -->
			</div>
		</div>		
	</section>

	<?php 
	// }

get_footer();
?>