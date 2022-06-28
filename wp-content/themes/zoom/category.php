<?php
get_header();

$tags = get_tags('post_tag'); //taxonomy=post_tag

// Get the ID of a given category
$category_id = get_cat_ID( 'publications' );
 
// Get the URL of this category
$category_link = get_category_link( $category_id );
?>

<?php
if(have_posts()){
    ?>
<section class="blog__cards">
    <?php while (have_posts()) {
        ?>
    <?php 
            the_post();
        ?>
    <div class="blog-col">

    </div>


    <?php
    }?>
</section>
<?php
}else{
    ?>
<h2 class="no_post">Page en construction</h2>
<?php
}

?>

<?php
get_footer();
?>