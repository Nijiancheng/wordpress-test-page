<div class="single-bgc">
<?php get_header(); ?>
    <div class="single">
    <?php 
        if(in_category(8)){
            include 'single-about.php';
        }else{
            include 'single-news.php';
        }
    ?>
    </div>
<?php get_footer(); ?> 
</div>