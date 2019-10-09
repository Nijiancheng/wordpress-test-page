<html>
<head>
  <title><?php bloginfo('name') ?></title>
</head>
<body>

<h1><?php bloginfo('name') //站点标题 ?></h1>

<?php wp_nav_menu() //菜单  ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): ?>

        <?php the_post(); //调用具体文章 ?>

    <h2><a href="<?php the_permalink() ?>"><?php the_title() //标题 ?></a></h2>
        <?php the_excerpt(); //文章摘要 ?>

        <?php if (is_single()): //是否详情页 ?>
            <?php the_content() //内容 ?>
        <?php endif ?>

    <?php endwhile ?>

    <?php posts_nav_link() //分页导航 显示上一篇/下一篇文章链接 ?>

<?php else : ?>
  没有文章
<?php endif ?>

</body>
</html>