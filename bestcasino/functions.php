<?php

// Wordpress settings
add_theme_support('menus');
add_theme_support('custom-logo');

// Load main JS file
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('custom.min.js', get_template_directory_uri() . '/scripts.min.js', array('jquery'));
});

// Allow to upload SVG
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

// Remove "JQMIGRATE: Migrate is installed, version 1.4.1" notification from console
add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, array('jquery-migrate'));
    }
});

// Hide admin bar
show_admin_bar(false);

// Get user country code from IP address
function getUserCountryCode() {
    $country = null;
    $ip_address = null;
    if (getenv('HTTP_CLIENT_IP')) :
        $ip_address = getenv('HTTP_CLIENT_IP');
    elseif (getenv('HTTP_X_FORWARDED_FOR')) :
        $ip_address = getenv('HTTP_X_FORWARDED_FOR');
    elseif (getenv('HTTP_X_FORWARDED')) :
        $ip_address = getenv('HTTP_X_FORWARDED');
    elseif (getenv('HTTP_FORWARDED')) :
        $ip_address = getenv('HTTP_FORWARDED');
    elseif (getenv('REMOTE_ADDR')) :
        $ip_address = getenv('REMOTE_ADDR');
    endif;
    $local_data = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $ip_address));
    if (isset($local_data['geoplugin_countryCode']) && $local_data['geoplugin_countryCode'] != '') :
        return strtolower($local_data['geoplugin_countryCode']);
    else :
        return 'default';
    endif;
}
global $country_code;
$country_code = getUserCountryCode();


?>
