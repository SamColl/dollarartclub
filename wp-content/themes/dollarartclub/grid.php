<?php
/**
* Template Name: Home Page
*/


get_header(); ?>
<div class="container">
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

      <article onmouseover="document.getElementById('mymodal-<?php the_ID(); ?>>').style.display='block'" onmouseout="document.getElementById('mymodal-<?php the_ID(); ?>>').style.display='none'" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
         <div  class= "square" id="square-<?php the_ID(); ?>">
        <!-- modal -->
        <div id="mymodal-<?php the_ID(); ?>>" class="modal">

            <img class="modal-content" id="img01-<?php the_ID(); ?>" data-id="img01-<?php the_ID();?>" src="<?php the_post_thumbnail_url($post->ID); ?>"/>
        </div>
      </article>


       <?php
   endwhile;
endif;
wp_reset_query(); ?>

</div>
</div>
