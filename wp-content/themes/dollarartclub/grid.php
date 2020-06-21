<?php
/**
* Template Name: Home Page
*/


get_header();
$args = array(
'post_type' => 'artists',
);

$the_query = new WP_Query( $args );
?>

<div class="grid-container">
  <?php

if ( $the_query->have_posts() ) :
   while ( $the_query->have_posts() ) :
       $the_query->the_post();
       ?>
       <?php $postId = get_the_ID(); ?>
       <div class="popup" onclick="myFunction()">
          <span class="popuptext" id="myPopup">Popup text...</span>
        </div>
       <?php
   endwhile;
endif;
wp_reset_query();
    ?>
</div>
