<?php get_header(); ?>
<?php the_post(); ?>
<div class="brand-product">
    <div class="top"></div>
    <div class="brand-product-top">
        <div class="brand-product-top-content">
        <?php the_content()?>
        </div>
    </div> 
    <?php $a = query_posts( 'showposts=3&cat=8&order=ASC'); ?>
    <ul class="brand-product-list">
        <?php while ( have_posts() ) { the_post(); ?>
        <li> 
            <a href="<?php echo get_permalink(); ?>">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(320,320),array('alt'=> trim(strip_tags( $post->post_title ))));} else {?><img src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" width="350" height="320"/><?php }?></a>
    </li>
        <?php } wp_reset_query(); ?>
    </ul>
</div>
<?php get_footer(); ?> 