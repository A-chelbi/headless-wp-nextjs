<?php 
/**
 * Template Name: Team
*/

get_header(); 


$hero = get_field('hero');
$managers = get_field('managers');
$teamMembers = get_field('team');
$contact = get_field('contact');
?>

<!-- Team hero section -->
<section class="team_hero_section">
    <?php if( $hero): ?>
        <img src="<?=$hero['image']['url']?>" alt="<?=$hero['image']['alt']?>">
        <div class="hero_content">
            <div class="hero_inner">
                <h1 class="section-title"> <?=$hero['title']?> </h1>
                <p><?=$hero['description']?></p>
            </div>
        </div>
    <?php endif; ?> 
</section>

<!-- Team managers section -->
<?php if(is_array($managers) && array_key_exists('title', $managers) && $managers['title'] != ""): ?>
<section class="team_managers_section">
    <div class="managers_intro">
        <h1><?=$managers['title']; ?></h1>
        <p><?=$managers['description']?></p>
    </div>

    <div class="managers_list">
    <?php $i=1; ?>
        <?php foreach ($managers['manager'] as $manager): ?>
            <div class="manager_card">
                <div class="manager_image">
                    <img src="<?=$manager['image']['url']?>" alt="<?=$manager['image']['url']?>">
                </div>
                <h3><?=$manager['name']?></h3>
                <div class="manager_position">
                    <h4 class="title_blue"><?=$manager['position']?></h4>
                    <a href="<?=$manager['linkedin']['url']?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/img/linkedin.svg" alt="<?=$manager['linkedin']['title']?>" srcset=""></a>
                </div>
                
                <p id="collapseBio<?= $i;?>" class="manager_bio collapse"><?=$manager['bio']?></p>
                <a href="#collapseBio<?= $i;?>" role="button" aria-expanded="false" aria-controls="collapseExample" class="mobile toggle_bio" data-toggle="collapse">
                    <span class="show"><?php _e('Show', 'Buttons'); ?></span>
                    <span class="hide"><?php _e('Hide', 'Buttons'); ?></span>
                    <span class="bio"><?php _e('Bio', 'Team'); ?></span>
                </a>
            </div>
            <?php $i++; ?>
        <?php endforeach;?>
    </div>
    <?php if( $managers['cta']['url']): ?>
        <div class="cta_center">
            <a href="<?=$managers['cta']['url']; ?>" class="btn btn_red"><?=$managers['cta']['title']; ?></a>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>

<!-- Team members section -->
<?php if(is_array($teamMembers) && array_key_exists('title', $teamMembers) && $teamMembers['title'] != ""): ?>
<section class="team_members_section">
    <div class="team_members_intro">
        <h1><?=$teamMembers['title']; ?></h1>
        <p><?=$teamMembers['description']?></p>
    </div>
    <div class="team_slider">
        <div class="team_members_list">
            <?php foreach ($teamMembers['team_member'] as $member): ?>
                <div class="team_member_card ">
                    <div class="team_member_image" >
                        <img src="<?=$member['image']['url']?>" alt="<?=$member['image']['url']?>">
                    </div>
                    <div class="team_member_card_footer">
                        <h3><?=$member['name']?></h3>
                        <h4><?=$member['position']?></h4>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <?php if( $teamMembers['team_member'] ): ?>
        <ul class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
            <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="13" height="13">
                <path d="m 15.5 0.932 l -4.3 4.38 l 14.5 14.6 l -14.5 14.5 l 4.3 4.4 l 14.6 -14.6 l 4.4 -4.3 l -4.4 -4.4 l -14.6 -14.6 Z"></path></svg>
            </li>
            <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="13" height="13"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>         
            </li>
        </ul>
        <?php endif; ?>
    </div>   
</section>
<?php endif; ?>

<!-- Team contact section -->
<?php if(is_array($contact) && array_key_exists('title', $contact) && $contact['title'] != ""): ?>
<section class="team_contact_section" style="background-image: url('<?=$contact['image']['url']; ?>">
    <div class="team_contact_content">
        <h1 class="bg-dark"><?=$contact['title']; ?></h1>
        <p class="bg-dark"><?=$contact['description']; ?></p>
    </div>
    <div class="cta_right">
        <a href="<?=$contact['cta']['url']; ?>" class="btn btn_red"><?=$contact['cta']['title']; ?></a>
    </div>
    
</section>
<?php endif; ?>

<?php get_footer(); ?>