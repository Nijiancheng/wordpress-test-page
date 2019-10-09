<?php get_header(); ?>
<?php the_post(); ?>
<div class="about-us">
    <div class="top"></div>
    <div class="about-us-top">
        <div class="about-us-top-content">
        <?php the_content()?>
        </div>
    </div>  

    <?php query_posts( 'showposts=3&cat=3');?>
    <ul class="about-us-list">
        <?php while ( have_posts() ) { the_post(); ?>
        <li><div class="about-us-list-info"><?php get_template_part( 'content', get_post_format() ); ?></div>
    </li>
        <?php } wp_reset_query(); ?>
    </ul>

</div>

<?php get_footer(); ?> 