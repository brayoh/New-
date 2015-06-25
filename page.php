<?php 
if ( is_page( 'About Us' ) ) :
    get_header( 'about' );
else:
    get_header();
endif;
?>
<?php
if (have_posts()) :
	while(have_posts()) : the_post();
?>
	<div class="container" style="margin:0 auto !important;">
		  <div class="row">
			<h2 class="tex-center"><?php the_title();?></h2>
			<?php the_content();?>
		</div>
	</div>
	
<?php
endwhile;
	
	 else :
	echo 'No Posts Found';
endif;

?>
<?php get_footer(); ?> 
