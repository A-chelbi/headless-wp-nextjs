<?php
get_header();

$tags = get_tags('post_tag'); //taxonomy=post_tag

// Get the ID of a current tag
$tag_id = get_queried_object()->term_id;

// Get the ID of a given category
$category_id = get_cat_ID( 'publications' );
 
// Get the URL of this category
$category_link = get_category_link( $category_id );
?>

<?php
if(have_posts()){
    ?>
    <!-- Tag nav section -->
    <section class="tag_section">
        <ul class="tag_list">
            <li><a class="tag" href="<?= $category_link ?>">All</a></li>
            <?php $active="active";?>
            <?php if ( $tags ) :?>
                <?php foreach ( $tags as $tag ) : ?>
                    <?php $currentTagID=$tag->term_id ?>
                    <?php if($currentTagID <> $tag_id): $active=" "?>
                        <?php endif; ?>
                <li><a class="tag <?=$active?>" href="<?= esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?= esc_attr( $tag->name ); ?>"><?= esc_html( $tag->name ); ?></a></li>
                <?php $active="active";?>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </section>
    
    <!-- Posts list section -->
    <section class="blog__cards">
    <?php while (have_posts()) {
        $hero = get_field('hero');?>
        <?php 
            the_post();
            $postId = get_the_ID();
            $postTags = get_the_tags($postId);
        ?>
        <div class="blog-col">
        <?php if ( $hero ) :?>
            <div class="blog-img">
                <img src="<?=$hero['url']?>" alt="<?=$hero['alt']?>" srcset="">
            </div>
        <?php endif; ?>    
            <div>
                <div class="post_info">
                    <div class="article_date"><?= get_the_date( 'j F Y' ); ?></div>

                    <div class="tag_links">
                        <ul class="post_tags">
                            <?php foreach($postTags as $postTag) :  ?>
                            <li>
                                <a class=""
                                    href="<?php bloginfo('url');?>/tag/<?php print_r($postTag->slug);?>">
                                    <?php print_r($postTag->name); ?>
                                </a>   
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
                <div class="blog_card__title">
                    <h2 class="blog_article__title"><?php the_title(); ?></h2>
                </div>
             
                <?='<p class="blog_card__text">' . get_the_excerpt() . '</p>' ?>
                <div class="blog_card__link">
                    <a href="<?php the_permalink(); ?>" class="read_more"><?php _e('Read more', 'Buttons'); ?></a>
                </div>
                
            </div> 
        </div>

       
        <?php
    }?>
    </section>

    <?php aleia_pagination(); ?>    
    
<?php
}else{
    ?>
    <h2 class="no_post">Page en construction</h2>
<?php
}

?>
</section>
<?php
get_footer();
?>