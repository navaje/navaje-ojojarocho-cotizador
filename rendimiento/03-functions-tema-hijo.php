<?php
add_action('init', function () {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'feed_links_extra', 3);
});

add_filter('script_loader_tag', function ($tag, $handle, $src) {
    $terceros = ['chat', 'widget', 'crisp', 'tawk', 'robotcam', 'zendesk', 'intercom', 'maps', 'google', 'recaptcha', 'facebook', 'slider', 'swiper', 'revslider', 'mc4wp', 'mailchimp', 'gtag', 'clarity', 'hotjar', 'analytics'];
    foreach ($terceros as $t) {
        if ($src && stripos($src, $t) !== false) {
            if (strpos($tag, 'defer') === false) {
                $tag = str_replace('<script ', '<script defer ', $tag);
            }
            break;
        }
    }
    return $tag;
}, 10, 3);

add_action('wp_head', function () {
    if (!is_front_page() && !is_singular()) return;
    $post_id = is_front_page() ? (int) get_option('page_on_front') : get_the_ID();
    if (!$post_id || !has_post_thumbnail($post_id)) return;
    $id = get_post_thumbnail_id($post_id);
    $src = wp_get_attachment_image_url($id, 'large');
    $srcset = wp_get_attachment_image_srcset($id, 'large');
    if (!$src) return;
    echo '<link rel="preload" as="image" href="' . esc_url($src) . '"' .
        ($srcset ? ' imagesrcset="' . esc_attr($srcset) . '" imagesizes="(max-width: 768px) 100vw, 1200px"' : '') .
        ' fetchpriority="high">' . "\n";
}, 1);

add_filter('wp_get_attachment_image_attributes', function ($attr) {
    if (is_admin()) return $attr;
    static $primera = false;
    if (!$primera) {
        $primera = true;
        $attr['fetchpriority'] = 'high';
        $attr['loading'] = 'eager';
    }
    return $attr;
}, 10, 1);
