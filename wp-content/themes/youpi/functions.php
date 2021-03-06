<?php
//***mettre en gras les ecritures ****/
function excerpt_display_strong($texte) 
 {
     return "<strong>".$texte."</strong>";
 }
 add_filter('get_the_excerpt', 'excerpt_display_strong');
 //***la fonction qui créer le logo du site ****/

 function youpi_custom_logo_setup() 
{
   $aParams = array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
   );

   // Ajout du support 
   add_theme_support('custom-logo', $aParams );
}

add_action( 'after_setup_theme', 'youpi_custom_logo_setup' );

//***la création du menu *****/

add_theme_support('menus');  

register_nav_menu("principal", "Menu principal");
//***la fonction pour la navigation ****/

function register_navwalker() 
{
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

//**la fonction de miniature ****/
if (function_exists( 'add_theme_support' )) 
{
    add_theme_support( 'post-thumbnails' );
}
//*** pour masquer la version de mon version de wordpress *****/

remove_action("wp_head", "wp_generator");

 ?> 
        