<?php 
get_header(); 

$hero = get_field('hero');
$contact = get_field('contact_banner');
?>
<!-- Hero section -->
<section class="general_template">
    <?php if( $hero['url']): ?>
        <img class="hero" src="<?=$hero['url']?>" alt="<?=$hero['alt']?>" srcset="">
    <?php endif; ?> 
    <div class="<?php if( $hero['url']): ?>general_template__content_with-hero<?php endif; ?> general_template__content">
        <h1 class="section-title"> <?php the_title(); ?> </h1>

        <div class="page_content">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<!-- Contact us section -->
<?php if( $contact['title']): ?>
<section class="general_template__contact" style="background-image: url('<?=$contact['image']['url']; ?>">

    <h1 class="bg-dark"><?=$contact['title']; ?></h1>
    <div class="cta_right">
        <a href="<?=$contact['cta']['url']; ?>" class="btn btn_red"><?=$contact['cta']['title']; ?></a>
    </div>
    
</section>
<?php endif; ?>

<?php get_footer(); ?>