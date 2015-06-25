<?php get_header();?>
<?php
if (have_posts()) :
	while(have_posts()) : the_post();
?>
	<div class="container about-us">
	   <div class="row">
	   <div class="col-md-10 col-md-offset-1">
	   	<?php the_content();?>
	   </div>
	   	   
	   </div>
		
	</div>
	
<?php
endwhile;
	
	 else :
	echo 'No Posts Found';
endif;

?>

<?php get_footer();?>