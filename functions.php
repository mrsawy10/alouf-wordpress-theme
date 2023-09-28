<?php



define('alouf_ROOT', get_stylesheet_directory() . '/');
define('alouf_URL', get_template_directory_uri() . '/');
define('alouf_ADMIN', admin_url());
define('alouf_BlogUrl', get_bloginfo('url'));
define('alouf_SITE_URL', get_bloginfo('url'));
add_theme_support('post-thumbnails');

require_once(alouf_ROOT . 'lib/alouf_init.php');
require_once(alouf_ROOT . 'lib/alouf_enqueue_scripts.php');
require_once(alouf_ROOT . 'lib/alouf_meta_fields.php');




