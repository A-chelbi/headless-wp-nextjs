<?php 

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package 
 * @subpackage Zoom
 * @version 1.0
 */

    get_header();
?>
<div class="main">
    <div class="form_container">
        <h1 class="header">Hello</h1>
        <div class="page_content">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>