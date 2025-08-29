<?php
/**
 * WordPress Integration for FaresKart PHP Files
 * This file connects your existing PHP files with WordPress functionality
 */

// Check if WordPress is loaded
if (!function_exists('wp_head')) {
    // WordPress not loaded, show basic version
    function wp_head() { echo ''; }
    function wp_footer() { echo ''; }
    function get_header() { include('header.php'); }
    function get_footer() { include('footer.php'); }
    function home_url($path = '') { return 'http://' . $_SERVER['HTTP_HOST'] . $path; }
    function is_user_logged_in() { return false; }
    function wp_get_current_user() { return (object)['display_name' => 'Guest']; }
    function wp_title($sep = '|', $display = true, $seplocation = '') { return 'FaresKart'; }
    function bloginfo($show = '') { 
        switch($show) {
            case 'name': return 'FaresKart';
            case 'description': return 'Flight Booking Website';
            case 'charset': return 'UTF-8';
            default: return '';
        }
    }
}

// WordPress integration functions
function wordpress_login_check() {
    if (function_exists('is_user_logged_in')) {
        return is_user_logged_in();
    }
    return false;
}

function wordpress_get_user_name() {
    if (function_exists('wp_get_current_user')) {
        $user = wp_get_current_user();
        return $user->display_name;
    }
    return 'Guest';
}

function wordpress_get_menu($location = 'primary') {
    // Fallback menu for when WordPress is not available
    $menu_items = [
        'primary' => [
            ['title' => 'Home', 'url' => 'index.php'],
            ['title' => 'About Us', 'url' => 'aboutus.php'],
            ['title' => 'Contact', 'url' => 'contact.php'],
            ['title' => 'Blogs', 'url' => 'blogs.php']
        ],
        'footer' => [
            ['title' => 'Home', 'url' => 'index.php'],
            ['title' => 'About Us', 'url' => 'aboutus.php'],
            ['title' => 'Contact', 'url' => 'contact.php']
        ]
    ];
    
    if (isset($menu_items[$location])) {
        return $menu_items[$location];
    }
    return [];
}

function wordpress_get_theme_mod($key, $default = '') {
    // Check if WordPress configuration file exists
    if (file_exists('wordpress-config.php')) {
        include_once 'wordpress-config.php';
        
        // Map keys to constants
        $key_mapping = [
            'hero_title' => 'FARESKART_HERO_TITLE',
            'hero_subtitle' => 'FARESKART_HERO_SUBTITLE',
            'about_text' => 'FARESKART_ABOUT_TEXT',
            'footer_about_text' => 'FARESKART_FOOTER_ABOUT_TEXT',
            'contact_address' => 'FARESKART_CONTACT_ADDRESS',
            'contact_phone' => 'FARESKART_CONTACT_PHONE',
            'contact_email' => 'FARESKART_CONTACT_EMAIL',
            'social_facebook' => 'FARESKART_SOCIAL_FACEBOOK',
            'social_twitter' => 'FARESKART_SOCIAL_TWITTER',
            'social_instagram' => 'FARESKART_SOCIAL_INSTAGRAM',
            'social_linkedin' => 'FARESKART_SOCIAL_LINKEDIN',
            'customers_number' => 'FARESKART_CUSTOMERS_NUMBER',
            'airlines_number' => 'FARESKART_AIRLINES_NUMBER',
            'destinations_number' => 'FARESKART_DESTINATIONS_NUMBER',
            'experience_years' => 'FARESKART_EXPERIENCE_YEARS',
            'disclaimer_text' => 'FARESKART_DISCLAIMER_TEXT',
            'arc_certified_link' => 'FARESKART_ARC_CERTIFIED_LINK'
        ];
        
        if (isset($key_mapping[$key]) && defined($key_mapping[$key])) {
            return constant($key_mapping[$key]);
        }
    }
    
    // Fallback theme customizer values
    $theme_mods = [
        'hero_title' => 'Find & Book Your Perfect Trip',
        'hero_subtitle' => 'Discover amazing deals on flights, hotels, and vacation packages around the world',
        'about_text' => 'FaresKart is online travel agency delivering top-notch service worldwide. Our experienced professionals ensure smooth journeys with trusted support and travel solutions. Wherever you go, we\'re here to make your trip easy, comfortable, and memorable.',
        'footer_about_text' => 'FaresKart is a leading travel platform dedicated to helping you find the best deals on flights, hotels, and vacation packages worldwide.',
        'contact_address' => '123 Travel St, Suite 100',
        'contact_phone' => '+1 (555) 123-4567',
        'contact_email' => 'support@fareskart.com',
        'social_facebook' => '#',
        'social_twitter' => '#',
        'social_instagram' => '#',
        'social_linkedin' => '#',
        'customers_number' => '2,000,000+',
        'airlines_number' => '600+',
        'destinations_number' => '1,000+',
        'experience_years' => '5+',
        'disclaimer_text' => 'FaresKart, Operated under Quick travels Inc, is an independent travel agency and not affiliated with or operated by any airline. All flight reservations are governed by the specific terms and fare rules of the respective airlines.',
        'arc_certified_link' => '#'
    ];
    
    return isset($theme_mods[$key]) ? $theme_mods[$key] : $default;
}

function wordpress_get_template_directory_uri() {
    return 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);
}

function wordpress_body_class() {
    return 'fareskart-body';
}

function wordpress_language_attributes() {
    return 'lang="en"';
}

function wordpress_esc_url($url) {
    return htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
}

function wordpress_esc_attr($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function wordpress_esc_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

function wordpress__e($text, $domain = 'fareskart') {
    echo $text;
}

function wordpress_get_the_date($format = 'F j, Y') {
    return date($format);
}

function wordpress_get_the_author() {
    return 'FaresKart Team';
}

function wordpress_has_post_thumbnail() {
    return false;
}

function wordpress_the_post_thumbnail($size = 'large', $attr = []) {
    // Fallback for featured images
    echo '<img src="hero.jpg" alt="Featured Image" style="width:100%;height:300px;object-fit:cover;">';
}

function wordpress_the_content() {
    echo '<p>Content will be managed through WordPress admin panel.</p>';
}

function wordpress_the_title() {
    return 'FaresKart - Flight Booking';
}

function wordpress_have_posts() {
    return false;
}

function wordpress_the_post() {
    // Do nothing for now
}

function wordpress_post_class($classes = '') {
    return 'fareskart-post';
}

function wordpress_get_the_ID() {
    return 1;
}

function wordpress_comments_open() {
    return false;
}

function wordpress_get_comments_number() {
    return 0;
}

function wordpress_comments_template() {
    // Comments not available in basic mode
}

function wordpress_previous_post_link($format = '%link') {
    return '';
}

function wordpress_next_post_link($format = '%link') {
    return '';
}

function wordpress_get_sidebar() {
    // Sidebar not available in basic mode
}

function wordpress_wp_link_pages($args = []) {
    // Pagination not available in basic mode
}

function wordpress_get_the_category_list($separator = ', ') {
    return '';
}

function wordpress_get_the_tag_list($before = '', $separator = ', ', $after = '') {
    return '';
}

function wordpress_register_nav_menus($locations = []) {
    // Menu registration not available in basic mode
}

function wordpress_wp_nav_menu($args = []) {
    $menu_items = wordpress_get_menu($args['theme_location'] ?? 'primary');
    $menu_class = $args['menu_class'] ?? 'nav-menu';
    
    echo '<ul class="' . $menu_class . '">';
    foreach ($menu_items as $item) {
        echo '<li><a href="' . $item['url'] . '">' . $item['title'] . '</a></li>';
    }
    echo '</ul>';
}

function wordpress_has_custom_logo() {
    return false;
}

function wordpress_the_custom_logo() {
    echo '<a href="index.php" class="logo">Fares<span>kart</span></a>';
}

function wordpress_register_sidebar($args = []) {
    // Widget registration not available in basic mode
}

function wordpress_dynamic_sidebar($index = 1) {
    // Widget display not available in basic mode
}

// Initialize WordPress integration
if (file_exists('wp-config.php')) {
    // WordPress is available, load it
    require_once('wp-config.php');
    require_once(ABSPATH . 'wp-load.php');
}
?>
