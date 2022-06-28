<?php

/**
 * Template Name: Contact
*/

get_header();

$title = get_field('title');
$heroImg = get_field('hero_image');
$locations = get_field('contact_info');
$formTitle = get_field('form_title');
$formDes = get_field('form_description');
$form = get_field('contact_form');
?>

<!-- Hero section -->
<section class="contact_page_hero"> 
    <div class="page_hero_background">
        <img src="<?=$heroImg['url']?>" alt="" class="page_hero_background_image">
    </div>
</section>

<!-- Contact info card -->
<?php if($title): ?>
    <section class="contact_info"> 
        <h1 class="section_title"><?=$title?></h1>
        <div class="locations">
            <?php foreach ($locations as $location): ?>
                <div class="location">
                    <div class="coordonee">
                        <h3 class="title_blue"><?= $location['location_name']; ?></h3>
                        <div class="phone_numbers">
                            <img src="<?= get_template_directory_uri(); ?>/img/phone.svg" alt="phone">
                            <p><a href="tel:<?= $location['phone_number 1']; ?>"><?= $location['phone_number 1']; ?></a></p>
                            <p><a href="tel:<?= $location['phone_number 1']; ?>"><?= $location['phone_number2']; ?></a></p>
                        </div>
                        <div class="adress">
                            <img src="<?= get_template_directory_uri(); ?>/img/location.svg" alt="adress">
                            <p><?= $location['adress']; ?></p>
                        </div>
                        <div class="email">
                            <img src="<?= get_template_directory_uri(); ?>/img/mail.svg" alt="email">
                            <p><a href="mailto:<?= $location['email']; ?>"><?= $location['email']; ?></a></p>
                        </div>
                        
                    </div>
                    <div class="map">
                        <iframe src="<?= $location['map_link']['url']; ?>" style="border:none;"></iframe> 
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </section>
<?php endif; ?>

<!-- Contact form -->
<section class="form"> 
    <h1 class="section_title"><?=$formTitle?></h1>
    <p><?= $formDes; ?></p>
    <?php if(get_field('contact_form')): ?>
    <?= do_shortcode('[contact-form-7 id="' . get_field('contact_form') . '" title="" html_class="row"]') ?>  
    <?php endif; ?>
</section>

<?php get_footer(); ?>