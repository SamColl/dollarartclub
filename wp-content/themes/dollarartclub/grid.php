<?php
/**
* Template Name: Home Page
*/


get_header(); ?>
<div class="grid-container">

<?php
$args = array(
'post_type' => 'artists',
);
global $post;
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
   while ( $the_query->have_posts() ) :
       $the_query->the_post();
       ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <img class= "featured-img" id="myImg-<?php the_ID(); ?>" src="wp-content/themes/dollarartclub/images/women.png" alt="Snow" style="width:100%;max-width:300px">
        <!-- modal -->
        <div id="mymodal-<?php the_ID(); ?>>" class="modal">
          <span class="close">&times;</span>
            <img class="modal-content" id="img01-<?php the_ID(); ?>" data-id="img01-<?php the_ID();?>" src="<?php the_post_thumbnail_url($post->ID); ?>"/>
        </div>
      </article>


       <?php
   endwhile;
endif;
wp_reset_query(); ?>

</div>
