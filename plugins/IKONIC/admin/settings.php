<?php
/**
 * @package WordPress
 * @subpackage IKONIC
 */

if (!defined('IKONIC_VERSION')) {
    $IKONIC_theme = wp_get_theme('IKONIC');

    if ($IKONIC_theme->Version) {
        define('IKONIC_VERSION', $IKONIC_theme->Version);
    }
}

add_action('admin_menu', 'IKONIC_add_admin_menu');
add_action('admin_init', 'IKONIC_settings_init');

if (!function_exists('IKONIC_add_admin_menu')): 
    function IKONIC_add_admin_menu() {
        add_menu_page('IKONIC', 'IKONIC', 'administrator', 'admin/settings.php', 'IKONIC_settings_page' , 'data:image/svg+xml;base64,' . 'PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMjggMTI4Ij48cGF0aCBkPSJNNzYuMTIsNDUuODRsLTguNzEtLjYzcS0xMi40NiwwLTE2LDcuODRWMTA2LjhIMjVWMjEuOTFINDkuNzZsLjg2LDEwLjlxNi42OC0xMi40NywxOC42LTEyLjQ3YTI1LjY4LDI1LjY4LDAsMCwxLDcuMzcuOTRaIiBzdHlsZT0iZmlsbDojZmZmIi8+PHBhdGggZD0iTTg4LjQ0LDgxLjE0YTE1LjA3LDE1LjA3LDAsMCwxLDEwLjQzLDMuNzMsMTMsMTMsMCwwLDEsMCwxOS4wNywxNS4wNiwxNS4wNiwwLDAsMS0xMC40MywzLjcyQTE0LjksMTQuOSwwLDAsMSw3OCwxMDMuOWExMywxMywwLDAsMSwwLTE5QTE0LjksMTQuOSwwLDAsMSw4OC40NCw4MS4xNFoiIHN0eWxlPSJmaWxsOiNmZmYiLz48L3N2Zz4=');
    }
endif;

if (!function_exists('IKONIC_settings_init')): 
    function IKONIC_settings_init() {
        wp_enqueue_style('font-awesome', IKONIC_PLUGIN_PATH . 'css/font-awesome.min.css', array(), '4.7.0', 'all');
        wp_enqueue_style('simple-line-icons', IKONIC_PLUGIN_PATH . 'css/simple-line-icons.css', array(), '2.3.2', 'all');
        wp_enqueue_style('IKONIC-settings-style', IKONIC_PLUGIN_PATH . 'admin/css/style.css', false, '1.0', 'all');
        wp_enqueue_script('media-upload');
        wp_enqueue_style('thickbox');
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('my-upload');

        wp_localize_script('IKONIC-settings', 'settings_vars',
            array(
                'plugin_url'          => IKONIC_PLUGIN_PATH,
                'admin_url'           => get_admin_url(),
                'ajaxurl'             => admin_url('admin-ajax.php'),
                'logo_image_title'    => __('Logo Image', 'IKONIC'),
                'logo_image_btn'      => __('Insert Image', 'IKONIC'),
                'favicon_image_title' => __('Favicon Image', 'IKONIC'),
                'favicon_image_btn'   => __('Insert Image', 'IKONIC'),
                'avatar_title'        => __('User Profile Picture', 'IKONIC'),
                'avatar_btn'          => __('Insert Picture', 'IKONIC'),
            )
        );

        register_setting('IKONIC_welcome_settings', 'IKONIC_welcome_settings');
        register_setting('IKONIC_setup_settings', 'IKONIC_setup_settings');
        register_setting('IKONIC_general_settings', 'IKONIC_general_settings');
        register_setting('IKONIC_appearance_settings', 'IKONIC_appearance_settings');
        register_setting('IKONIC_colors_settings', 'IKONIC_colors_settings');
    }
endif;

/**
 * Load media files needed for Uploader
 */
if (!function_exists('IKONIC_load_wp_media_files')): 
    function IKONIC_load_wp_media_files() {
        wp_enqueue_media();
    }
endif;
add_action('admin_enqueue_scripts', 'IKONIC_load_wp_media_files');

require_once 'sections/welcome.php';
require_once 'sections/setup.php';
require_once 'sections/general.php';
require_once 'sections/appearance.php';
require_once 'sections/colors.php';

if (!function_exists('IKONIC_settings_page')): 
    function IKONIC_settings_page() { 
        $allowed_html = array();
        $active_tab = isset($_GET['tab']) ? wp_kses($_GET['tab'], $allowed_html) : 'welcome';
        $tab = 'IKONIC_welcome_settings';

        switch ($active_tab) {
            case "welcome":
                IKONIC_admin_welcome();
                $tab = 'IKONIC_welcome_settings';
                break;
            case "setup":
                IKONIC_admin_setup();
                $tab = 'IKONIC_setup_settings';
                break;
            case "general_settings":
                IKONIC_admin_general_settings();
                $tab = 'IKONIC_general_settings';
                break;
            case "appearance":
                IKONIC_admin_appearance();
                $tab = 'IKONIC_appearance_settings';
                break;
            case "colors":
                IKONIC_admin_colors();
                $tab = 'IKONIC_colors_settings';
                break;
        } ?>

        <div class="IKONIC-wrapper">
            <div class="IKONIC-leftSide">
                <div class="IKONIC-logo"><img src="<?php echo esc_url(IKONIC_PLUGIN_PATH . 'admin/images/logo.png'); ?>"></div>
                <ul class="IKONIC-tabs">
                    <li class="<?php echo ($active_tab == 'welcome') ? 'IKONIC-tab-active' : '' ?>">
                        <a href="admin.php?page=admin/settings.php&tab=welcome">
                            <span class="icon-info IKONIC-tab-icon"></span><span class="IKONIC-tab-link"><?php esc_html_e('Welcome', 'IKONIC'); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo ($active_tab == 'setup') ? 'IKONIC-tab-active' : '' ?>">
                        <a href="admin.php?page=admin/settings.php&tab=setup">
                            <span class="icon-magic-wand IKONIC-tab-icon"></span><span class="IKONIC-tab-link"><?php esc_html_e('Theme Setup', 'IKONIC'); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo ($active_tab == 'general_settings') ? 'IKONIC-tab-active' : '' ?>">
                        <a href="admin.php?page=admin/settings.php&tab=general_settings">
                            <span class="icon-settings IKONIC-tab-icon"></span><span class="IKONIC-tab-link"><?php esc_html_e('General Settings', 'IKONIC'); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo ($active_tab == 'appearance') ? 'IKONIC-tab-active' : '' ?>">
                        <a href="admin.php?page=admin/settings.php&tab=appearance">
                            <span class="icon-screen-desktop IKONIC-tab-icon"></span><span class="IKONIC-tab-link"><?php esc_html_e('Appearance', 'IKONIC'); ?></span>
                        </a>
                    </li>
                    <li class="<?php echo ($active_tab == 'colors') ? 'IKONIC-tab-active' : '' ?>">
                        <a href="admin.php?page=admin/settings.php&tab=colors">
                            <span class="icon-drop IKONIC-tab-icon"></span><span class="IKONIC-tab-link"><?php esc_html_e('Colors', 'IKONIC'); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="IKONIC-content">
                <div class="IKONIC-content-body">
                    <form action='options.php' method='post'>
                        <?php wp_nonce_field('update-options');
                        settings_fields($tab);
                        do_settings_sections($tab);

                        if ($active_tab != 'welcome' && $active_tab != 'setup') {
                            submit_button();
                        } ?>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <?php }
endif;
?>