	</div>
	</div>
	<footer class="row jumbtron site-footer">
		
		<ul class="col-md-4">
			<li>
			<span class="copyright">
				All Rights Reserved <kbd><?php bloginfo('name');?>  &copy <?php echo date('Y');?></kbd>
			</span>
			</li>
		</ul>
		<ul class="col-md-4">
				<?php wp_nav_menu("menu_location","footer");?>	
		</ul>
		<ul class="col-md-4 social-icons">
			<li><a href="" title="like our facebook page"><span class="fa fa-facebook fa-5x animated"></span></a></li>
			<li><a href=""  title="follow us on twitter"><span class="fa fa-twitter fa-5x animated"></span></a></li>
			<li><a href=""  title="follow us on google plus"><span class="fa fa-google-plus fa-5x animated"></span></a></li>
		</ul>
	</footer>
		<?php wp_footer();?>
		
	<script>
            $(document).ready(function() {
                $.material.init();

            });
		/*-----------------------------------------------------------------------------------*/
		/*								PRELOADER
		/*-----------------------------------------------------------------------------------*/
		jQuery(window).load(function () {
			//Preloader
			setTimeout("jQuery('#preloader').animate({'opacity' : '0'},300,function(){jQuery('#preloader').hide()})",800);
			setTimeout("jQuery('.preloader_hide').animate({'opacity' : '1'},500)",800);

		});
        </script>
	<script type="text/javascript" charset="utf-8">

		
	</script>
	</body>
</html>
