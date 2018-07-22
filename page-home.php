<?php 
    //Template Name: Home Page

get_header();
?>

<?php

    get_template_part( 'template-parts/content', 'hero' );

    get_template_part( 'template-parts/content', 'about' );

    get_template_part( 'template-parts/content', 'gallery' );

    get_template_part( 'template-parts/content', 'contact' );

?>

<?php get_footer(); ?>