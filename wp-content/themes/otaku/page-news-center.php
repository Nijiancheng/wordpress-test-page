<?php get_header(); ?>
<?php the_post(); ?>
<div class="news-center">
    <div class="top"></div>
    <div class="news-center-top">
        <div class="news-center-top-content">
        <?php the_content()?>
        </div>
    </div>  

    <?php query_posts('showposts=3&cat=9')?>
    <ul class="news-center-list">
        <?php while ( have_posts() ) { the_post(); ?>
        <li>
           <a href="<?php echo get_permalink(); ?>">
           <div class="news-center-list-img">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(320,320),array('alt'=> trim(strip_tags( $post->post_title ))));} else {?><img src="<?php echo get_first_image(); ?>" alt="<?php the_title(); ?>" width="350" height="320"/><?php }?>
            </div>
            <div class="news-center-list-info">
                <div class="news-center-list-title">
                <?php the_title()?>
                </div>
                <?php the_excerpt()?>
                <span class="news-center-list-more">
                    查看详情
                </span>
            </div>
           </a>
    </li>
        <?php } wp_reset_query(); ?>
    </ul>

</div>

<?php get_footer(); ?> 