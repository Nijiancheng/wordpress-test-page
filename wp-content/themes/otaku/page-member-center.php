<div class="body">
<?php get_header(); ?>
<?php the_post(); ?>
<div class="top"></div>
<div class="member-center">
    <div class="member-center-top">
        <div class="member-center-top-content">
        <?php the_content()?>
        <a class="member-center-join join-us">
          加入我们
        </a>
        </div>
    </div>  
    <div class="member-center-middle">
        <ul class="member-center-list">
            <li>
                <a><img src="<?php echo get_template_directory_uri()?>/image/vipText.png" alt=""></a>
            </li>
            <li>
               <a class="join-us"> <img src="<?php echo get_template_directory_uri()?>/image/vipJoin.png" alt="">
                <span>加入我们</span></a>
            </li>
            <li>
               <a href="">
                    <img src="<?php echo get_template_directory_uri()?>/image/vipIcon.png" alt="">
                    <span>联系我们</span></a>
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?> 
<div class="join-box">
    <img src="<?php echo get_template_directory_uri()?>/image/zhuomaquan.jpg">
    <img src="<?php echo get_template_directory_uri()?>/image/5100.jpg">
</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/style.js"></script>