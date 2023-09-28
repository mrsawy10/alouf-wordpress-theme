<?php


function alouf_admin_scripts_styles($hook)
{
    // var_dump($hook);
    wp_enqueue_style('alouf-main', alouf_URL . 'assets/admin/css/main-style.css');
    wp_enqueue_style('alouf-navBar-style', alouf_URL . 'assets/admin/css/navBar.css');
    $alouf_pages = ['edit-tags.php', 'toplevel_page_content-area', 'toplevel_page_custom-theme-options', 'theme-options_page_home-page-content'];

    if (in_array($hook, $alouf_pages)) {
        // var_dump($hook);
        wp_enqueue_style('alouf-bootsrtap', alouf_URL . 'assets/admin/css/bootstrap.min.css');

        wp_enqueue_style('alouf-style', alouf_URL . 'assets/admin/css/styleNoCache.css');
        wp_enqueue_script('alouf-bootsrtap-js', alouf_URL . 'assets/admin/js/bootstrap.min.js', array(), false, true);
        //        wp_enqueue_script( 'alouf-script', alouf_URL .'assets/admin/js/script.js', array() ,false, true );
    }

    wp_enqueue_script('alouf-script', alouf_URL . 'assets/admin/js/script.js', array(), false, true);

    if (function_exists('wp_enqueue_media')) {
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    }
}


add_action('admin_enqueue_scripts', 'alouf_admin_scripts_styles');

function enqueue_my_scripts()
{
}

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');





function my_login_logo()


{



    $primaryColor = get_option('theme_color');


?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?= get_option("logo") ?>);
            height: 155px;
            width: 220px;
            background-size: 220px 220px;
            background-position: center;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }


        #login input[name="wp-submit"] {
            background-color: <?= $primaryColor ?>
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');





?>