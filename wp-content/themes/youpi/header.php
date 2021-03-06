<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title>
<?php if ( is_404() ) : ?>
    <?php _e('Not Found'); ?>
<?php elseif ( is_home() || is_front_page() ) : ?>
   <?php bloginfo('description'); ?>
<?php elseif ( is_category() ) : ?>
    <?php single_cat_title(); ?>
<?php else : ?>
    <?php wp_title(); ?>
<?php endif; ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo get_bloginfo('description');?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta name='robots' content='noindex,follow' />
<?php wp_head(); ?>
</head>
<body>
<div class="container-fluid">     
<?php  
    $custom_logo_id = get_theme_mod('custom_logo');

    $aLogo = wp_get_attachment_image_src($custom_logo_id , 'medium');

    if (has_custom_logo()) 
    { // Si un logo a été défini
        echo'<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'"><img src="'.esc_url($aLogo[0]).'" alt="'.get_bloginfo('name').'" title="'.get_bloginfo('name').'" class="img-fluid"></a>';
    } 
    else 
    {   // Sinon on affiche le nom du site
        echo '<h1>'.get_bloginfo('name').'</h1>';
    }
?>
 <div class="row">
	    <div class="col-12">    
        	<img src="http://localhost:8080/wordpress/wp-content/themes/youpi/outils_jardinage.jpg" alt="Mon premier site Worpdress" class="img-fluid">     
		</div>  <!-- .col -->  
  </div>  <!-- .row -->
  