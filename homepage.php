<?php  
/**  
* Template Name: Home  
*  
* @package TheSetup-Practice01 
*  
*/  
?>  
<?php get_header(); ?>


<div class="home-page">
<?php get_template_part( 'template-parts/banner'); ?>
    <?php

        while ( have_posts() ) :
            the_post();
            
            get_template_part( 'template-parts/content', 'page' );
            
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            
        endwhile; // End of the loop.
    ?>



    
</div>


<?php get_footer();?> 