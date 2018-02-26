<?php
/* gzip сжатие*/

function obSaveCookieAfter($s)
{
  setcookie("page_size_after", strlen($s));
  return $s;
}
// Аналогично, но для Cookie page_size_before.
function obSaveCookieBefore($s)
{
  setcookie("page_size_before", strlen($s));
  return $s;
}
// Устанавливаем конвейер обработчиков.
ob_start("obSaveCookieAfter");
ob_start("ob_gzhandler", 9);
ob_start("obSaveCookieBefore");

/**
 * загружаемые  стили и скрипты
 */
function loadStyleScript()
{
  // подключаем стили сайта
  wp_enqueue_style('styleThemeTwo', get_stylesheet_uri());

  // подключаем скрипты
  //wp_enqueue_script('jqFancyTransitionsThemeTwo', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js', [], null, true);
  //wp_enqueue_script('jqueryThemeTwo', get_template_directory_uri() . '/js/script.js', [], null, true);
}
// загружаем стили
add_action('wp_enqueue_scripts', 'loadStyleScript');


// хук для title
add_action('after_setup_theme', 'titleThemeTwo');

function titleThemeTwo()
{
  /*добавляем title*/
  add_theme_support('title-tag');
}


/**
 * удаляем теги из html
 */
add_filter('the_generator', '__return_empty_string');

remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
// убрать вывод коротких ссылок
remove_action('wp_head', 'wp_shortlink_wp_head');
// Убрать вывод канонических ссылок:
remove_action('wp_head','rel_canonical');

remove_action('wp_head','adjacent_posts_rel_link_wp_head');
remove_action('wp_head','feed_links_extra', 3);

remove_action('xmlrpc_rsd_apis', 'rest_output_rsd');

remove_action( 'wp_head', 'wp_resource_hints', 2 );
// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');

// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );

// Отключаем события REST API
remove_action( 'init',          'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );

// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init',          'wp_oembed_register_route'              );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

/**
 * удаляем теги из html
 */

/**
 * Создаем меню
 */

  register_nav_menu('menu', 'Primary menu');

/**
 * End Создаем меню
 */

/**
 * Добавляем виджет slider
 */

register_sidebar([
  'name'          => 'Слайдер на главной странице',
  'id'          => 'slider_index',
  'description' => 'Добавьте слайдер через виджет текст',
  'class'         => '',
  'before_widget' => '',
  'after_widget'  => '',
]);

/**
 *  End Добавляем виджет slider
 */

