<?php 
    get_header();
    get_template_part('partnav');
  if ( have_posts() ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <hr>
    Publié le <strong><?php the_date(); ?></strong> par <strong><?php the_author(); ?></strong>
    <hr>      
    <div><?php the_content(); ?></div>            
    <?php
  endif;

  get_footer();          
?>