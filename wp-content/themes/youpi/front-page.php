<?php 
 get_header();

 get_template_part('partnav'); 
 
        echo'<div class="row mx-0">
        <div class="col-lg-9 col-sm-8">';
// Tableau des arguments à passer à la requête
// Attention : WP_Query ne fonctionne pas si ce tableau est vide
$args = array(
   'posts_per_page' => 5 // Nombre d'articles à afficher 
);

// Custom query
$query = new WP_Query($args);

// Check that we have query results.
if ( $query->have_posts() ) :

    // Start looping over the query results.
    while ( $query->have_posts() ) : $query->the_post();
        echo"<div class='row'>\n"; 
        echo"<div class='col-12'><h2><a href='".get_the_permalink()."' title='".get_the_title()."'>".get_the_title()."</a></h2></div>\n";
        echo"</div>\n";
       echo"<div class='row border-bottom pb-7 mb-5'>\n"; 
       echo"<div>";
        

       if (has_post_thumbnail()) 
       { // Vérifie qu'il existe une image mise en avant pour l'article
           the_post_thumbnail('thumbnail');
       }

       echo"</div>\n";

       echo"<div class='col-9 col-sm-9'>".get_the_excerpt()."</div>\n";
       echo"</div>\n";
    endwhile;
endif;
echo'</div>
<!-- sidebar.php -->
<div class="col-lg-3 col-sm-4 border border-dark text-center">
   [ SIDEBAR ]
</div>
</div>';

 get_footer();          
?>