<?php
/**
* Template Name: Home Page
*/


get_header();



$args = array(
   'post_type' => 'artists',
   'post_status' => 'publish',


  );

$arr_posts = new WP_Query( $args ); ?>
<div class="grid-container">
  <?php

if ( $arr_posts->have_posts() ) :

   while ( $arr_posts->have_posts() ) :
       $arr_posts->the_post();
       ?>

       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <a class="popup-artist-info" href="<?php echo esc_url(get_permalink() ); ?>">
        <div class="artist-info">
          <?php the_post_thumbnail(); ?>
        </div>


     </a>

       </article>

       <?php
   endwhile;
endif;
wp_reset_query();
    ?>
</div>
