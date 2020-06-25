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

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
   while ( $the_query->have_posts() ) :
       $the_query->the_post();
       ?>
       <?php $postId = get_the_ID(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div id="popup">

      <img id="myImg" src="wp-content/themes/dollarartclub/images/women.png" alt="Snow" style="width:100%;max-width:300px">
    </div><!-- modal -->
    <div id="mymodal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
     <div id="caption"></div>
    </div>

  </article>
       <?php
   endwhile;
endif;
wp_reset_query();
    ?>
  </article>
</div>
