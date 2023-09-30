<?php


function alouf_admin_scripts_styles($hook)
{
    // var_dump($hook);
    // die;
    wp_enqueue_style('alouf-main', alouf_URL . 'assets/admin/css/main-style.css');
    wp_enqueue_style('alouf-navBar-style', alouf_URL . 'assets/admin/css/navBar.css');
    $alouf_pages = ['edit-tags.php', 'toplevel_page_content-area', 'toplevel_page_custom-theme-options', 'theme-options_page_home-page-content','toplevel_page_about-page-content', "theme-options_page_about-page-content"];

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
    // Enqueue stylesheets
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/css/boxicons.min.css');
    wp_enqueue_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('odometer', get_template_directory_uri() . '/assets/css/odometer.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('navbar', get_template_directory_uri() . '/assets/css/navbar.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
    // Enqueue JavaScript
    wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/2a16dd1862.js', array(), null, false);
     // Enqueue jQuery
     wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true);
     // Enqueue other scripts
     wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
     wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/appear.min.js', array('jquery'), null, true);
     wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array(), null, true);
     wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), null, true);
     wp_enqueue_script('odometer-js', get_template_directory_uri() . '/assets/js/odometer.min.js', array(), null, true);
     wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
     wp_enqueue_script('slick-animation', get_template_directory_uri() . '/assets/js/slick-animation.min.js', array('jquery'), null, true);
     wp_enqueue_script('meanmenu-js', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', array('jquery'), null, true);
     wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
     // Elements Animation (initiation script)
     wp_enqueue_script('wow-init', get_template_directory_uri() . '/assets/js/wow-init.js', array('wow'), null, true);
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