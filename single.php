<?php get_header();?>
<?php
if (have_posts()) :
	while(have_posts()) : the_post();
?>
	<article class="well post">
		<h2><u><a href="<?php the_permalink();?>"><?php the_title();?></a></u></h2>
		<p class="post-info"><?php the_time('F jS, Y');?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author();?></a> | posted in 
		<?php
			$categories = get_the_category();
			$separator = ", ";
			$output = '';
			if ($categories) {
				foreach ($categories as $category) {
					
						$output .= '<a href="' .get_category_link($category->term_id). '">'.$category->cat_name .'</a>'. $separator;
				
				}

				echo trim($output, $separator);
			}
		?>
	</p>
	<?php the_post_thumbnail('banner-image');?>
		<?php the_content();?>
	</article>
<?php
endwhile;
	 else :
	echo 'No Posts Found';
endif;

?>
<?php get_footer(); ?> 
