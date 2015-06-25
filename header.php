<?php 
    set_time_limit(0);
if (strstr($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
      ob_start("ob_gzhandler");
      header("Content-Encoding: gzip");
      header("Vary: Accept-Encoding");
}
 
 ?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	 <meta name="viewport" content="width=device-width, 
                                     initial-scale=1.0, 
                                     maximum-scale=1.0, 
                                     user-scalable=no"> 
	<title><?php bloginfo('name');?></title>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>    
  <?php wp_enqueue_script('jquery');?>
	<?php wp_head();?>

<?php if(is_page(61)){?>
<script>
      jQuery(function(){
          jQuery('#camera_wrap_1').camera({
          transPeriod: 500,
          time: 3000,
          height: '490px',
          thumbnails: false,
          pagination: true,
          playPause: false,
          loader: false,
          navigation: false,
          hover: false
        });
      });
    </script>
    <?php }?>
</head>
<body <?php body_class();?>>
 
<?php if ( is_page(61) ){
    echo "<div id='home'>";
  }
  ?>
  <?php if ( is_page(61) ){
    echo "<div class='headerLine'>";
  } else{
    echo "<div class='navmenu-container'>";
  }
  ?>
   <div id="menuF" class="default">
    <div class="container">
      <div class="row navbar-collapse">
        <div class="logo col-md-4">
           <div>
            <a href="<?php echo esc_url(home_url());?>">
              <img src="<?php echo get_template_directory_uri(). '/resources/img/Gnade Top-logo.png'?>" class="img-responsive">
            </a>
          </div>
        </div>
        <div class="col-md-8 col-xs-12">
    
               <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'navmenu',
                'container_id'      => 'menu',
                'menu_class'        => 'navmenu',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      
           </div>
        </div>
      </div>
   </div>
    <?php if ( is_page(61) ){
    
  } else{
    echo "</div>";
  }
  ?>
         <!-- </ul> -->
            