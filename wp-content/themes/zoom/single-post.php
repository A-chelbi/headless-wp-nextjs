<?php 
get_header(); 

$hero = get_field('hero');
$contact = get_field('contact_banner');
?>

<section class="general_template">
    <!-- Hero Image -->
    <?php if( $hero['url']): ?>
        <img class="hero" src="<?=$hero['url']?>" alt="<?=$hero['alt']?>" srcset="">
    <?php endif; ?> 

    <!-- Post Content -->
    <div class="<?php if( $hero['url']): ?>general_template__content_with-hero<?php endif; ?> general_template__content">
        <div class="article_date"><?php echo get_the_date( 'j F Y' ); ?></div>

        <h1 class="post_title"> <?php the_title(); ?> </h1>

        <div class="page_content">
            <?php the_content(); ?>
        </div>


        <ul class="social_links a2a_kit">
            <li><?php _e('Share with', 'Buttons'); ?></li>
            <li class="icon"><a class="a2a_button_facebook"><img src="<?= get_template_directory_uri(). '/img/facebook-logo.svg'; ?>" alt="Share to Facebook"></a></li>
            <li class="icon "><a class="a2a_button_linkedin"><img src="<?= get_template_directory_uri(). '/img/linkedin.svg'; ?>" alt="Share to linked in"></a></li>
            <!-- AddToAny BEGIN -->
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <!-- AddToAny END -->
        </ul>
    </div>
</section>

<!-- Contact us section -->
<?php if( $contact['image']): ?>
<section class="general_template__contact" style="background-image: url('<?=$contact['image']['url']; ?>">

    <h1 class="bg-dark"><?=$contact['title']; ?></h1>
    <?php if( $contact): ?>
    <div class="cta_right">
        <a href="<?= $contact['cta']['url']; ?>" class="btn btn_red"><?=$contact['cta']['title']; ?></a>
    </div>
    <?php endif; ?>
    
</section>
<?php endif; ?>

<?php get_footer(); ?>