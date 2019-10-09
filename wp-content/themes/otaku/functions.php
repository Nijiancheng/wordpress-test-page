<?php
//主题支持菜单，否则管理后台没有菜单的选项
register_nav_menus(
    array(
        'primary' => __('主菜单'),
    )
);
register_nav_menus( array( 'one' => '第一个菜单', 'two' => '第二个菜单', 'three' => '第三个菜单',
) );
add_theme_support( 'header', array( 'flex-width' => true,//自适应高度
'flex-width' => true,//自适应宽度 
'height' => 75, //高 
'default-image' => get_template_directory_uri() . '/image/1.jpg', //默认logo图       
 ) );

//调用缩略图
function get_first_image() {
    global $post;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];
    if(empty($first_img)){ //Defines a default image
    $first_img = bloginfo('template_url') . "/default.jpg";
    };
    return $first_img;
    }