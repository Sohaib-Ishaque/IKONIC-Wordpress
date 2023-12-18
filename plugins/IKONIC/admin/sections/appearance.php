<?php
/**
 * @package WordPress
 * @subpackage IKONIC
 */

if (!function_exists('IKONIC_admin_appearance')): 
    function IKONIC_admin_appearance() {
        add_settings_section('IKONIC_appearance_section', __( 'Appearance', 'IKONIC' ), 'IKONIC_appearance_section_callback', 'IKONIC_appearance_settings');
        add_settings_field('IKONIC_theme_mode_field', __( 'Theme Mode', 'IKONIC' ), 'IKONIC_theme_mode_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_header_background_field', __( 'Header Background', 'IKONIC' ), 'IKONIC_header_background_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_sidebar_field', __( 'Sidebar Position', 'IKONIC' ), 'IKONIC_sidebar_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_properties_per_page_field', __( 'Properties per Page', 'IKONIC' ), 'IKONIC_properties_per_page_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_properties_per_page_agent_field', __( 'Properties per Page on Agent Profile', 'IKONIC' ), 'IKONIC_properties_per_page_agent_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_similar_field', __( 'Show Similar Properties on Property Page', 'IKONIC' ), 'IKONIC_similar_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_sticky_agent_cta_field', __( 'Make Contact Agent CTA Sticky on Property Page - Mobile View', 'IKONIC' ), 'IKONIC_sticky_agent_cta_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_agents_per_page_field', __( 'Agents per Page', 'IKONIC' ), 'IKONIC_agents_per_page_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_hide_agents_phone_field', __( 'Hide Agents Phone Number', 'IKONIC' ), 'IKONIC_hide_agents_phone_number_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_leads_per_page_field', __( 'Leads per Page', 'IKONIC' ), 'IKONIC_leads_per_page_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_related_posts_field', __( 'Show Related Articles on Blog Post', 'IKONIC' ), 'IKONIC_related_posts_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section');
        add_settings_field('IKONIC_blog_title_field', __('Blog Page Title', 'IKONIC'), 'IKONIC_blog_title_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section' );
        add_settings_field('IKONIC_blog_subtitle_field', __('Blog Page Subtitle', 'IKONIC'), 'IKONIC_blog_subtitle_field_render', 'IKONIC_appearance_settings', 'IKONIC_appearance_section' );
    }
endif;

if (!function_exists('IKONIC_appearance_section_callback')): 
    function IKONIC_appearance_section_callback() { 
        echo '';
    }
endif;

if (!function_exists('IKONIC_theme_mode_field_render')): 
    function IKONIC_theme_mode_field_render() { 
        $options = get_option('IKONIC_appearance_settings');
        $modes = array(
            'light' => __('Light', 'IKONIC'),
            'dark' => __('Dark', 'IKONIC'),
        );

        $modes_select = '<select id="IKONIC_appearance_settings[IKONIC_theme_mode_field]" name="IKONIC_appearance_settings[IKONIC_theme_mode_field]">';

        foreach ($modes as $key => $value) {
            $modes_select .= '<option value="' . esc_attr($key) . '"';

            if (isset($options['IKONIC_theme_mode_field']) && $options['IKONIC_theme_mode_field'] == $key) {
                $modes_select .= 'selected="selected"';
            }

            $modes_select .= '>' . esc_html($value) . '</option>';
        }

        $modes_select .= '</select>';

        print $modes_select;
    }
endif;

if (!function_exists('IKONIC_header_background_field_render')): 
    function IKONIC_header_background_field_render() { 
        $options = get_option('IKONIC_appearance_settings');
        $modes = array(
            'transparent' => __('Transparent', 'IKONIC'),
            'opaque' => __('Opaque', 'IKONIC'),
        );

        $modes_select = '<select id="IKONIC_appearance_settings[IKONIC_header_background_field]" name="IKONIC_appearance_settings[IKONIC_header_background_field]">';

        foreach ($modes as $key => $value) {
            $modes_select .= '<option value="' . esc_attr($key) . '"';

            if (isset($options['IKONIC_header_background_field']) && $options['IKONIC_header_background_field'] == $key) {
                $modes_select .= 'selected="selected"';
            }

            $modes_select .= '>' . esc_html($value) . '</option>';
        }

        $modes_select .= '</select>';

        print $modes_select;
    }
endif;

if (!function_exists('IKONIC_sidebar_field_render')): 
    function IKONIC_sidebar_field_render() { 
        $options = get_option('IKONIC_appearance_settings');
        $sidebars = array(
            'left'  => __('Left', 'IKONIC'),
            'right' => __('Right', 'IKONIC'),
        );

        $sidebar_select = '<select id="IKONIC_appearance_settings[IKONIC_sidebar_field]" name="IKONIC_appearance_settings[IKONIC_sidebar_field]">';

        foreach ($sidebars as $key => $value) {
            $sidebar_select .= '<option value="' . esc_attr($key) . '"';

            if (isset($options['IKONIC_sidebar_field']) && $options['IKONIC_sidebar_field'] == $key) {
                $sidebar_select .= 'selected="selected"';
            }

            $sidebar_select .= '>' . esc_html($value) . '</option>';
        }

        $sidebar_select .= '</select>';

        print $sidebar_select;
    }
endif;

if (!function_exists('IKONIC_properties_per_page_field_render')): 
    function IKONIC_properties_per_page_field_render() { 
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input id="IKONIC_appearance_settings[IKONIC_properties_per_page_field]" type="number" step="1" min="1" style="width: 65px;" name="IKONIC_appearance_settings[IKONIC_properties_per_page_field]" value="<?php if (isset($options['IKONIC_properties_per_page_field'])) { echo esc_attr($options['IKONIC_properties_per_page_field']); } ?>" />
    <?php }
endif;

if (!function_exists('IKONIC_properties_per_page_agent_field_render')): 
    function IKONIC_properties_per_page_agent_field_render() { 
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input id="IKONIC_appearance_settings[IKONIC_properties_per_page_agent_field]" type="number" step="1" min="1" style="width: 65px;" name="IKONIC_appearance_settings[IKONIC_properties_per_page_agent_field]" value="<?php if (isset($options['IKONIC_properties_per_page_agent_field'])) { echo esc_attr($options['IKONIC_properties_per_page_agent_field']); } ?>" />
    <?php }
endif;

if (!function_exists('IKONIC_similar_field_render')): 
    function IKONIC_similar_field_render() {
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input type="checkbox" name="IKONIC_appearance_settings[IKONIC_similar_field]" <?php if(isset($options['IKONIC_similar_field'])) { checked($options['IKONIC_similar_field'], 1); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_sticky_agent_cta_field_render')): 
    function IKONIC_sticky_agent_cta_field_render() {
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input type="checkbox" name="IKONIC_appearance_settings[IKONIC_sticky_agent_cta_field]" <?php if(isset($options['IKONIC_sticky_agent_cta_field'])) { checked($options['IKONIC_sticky_agent_cta_field'], 1); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_agents_per_page_field_render')): 
    function IKONIC_agents_per_page_field_render() { 
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input id="IKONIC_appearance_settings[IKONIC_agents_per_page_field]" type="number" step="1" min="1" style="width: 65px;" name="IKONIC_appearance_settings[IKONIC_agents_per_page_field]" value="<?php if (isset($options['IKONIC_agents_per_page_field'])) { echo esc_attr($options['IKONIC_agents_per_page_field']); } ?>" />
    <?php }
endif;

if (!function_exists('IKONIC_hide_agents_phone_number_render')): 
    function IKONIC_hide_agents_phone_number_render() {
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input type="checkbox" name="IKONIC_appearance_settings[IKONIC_hide_agents_phone_field]" <?php if (isset($options['IKONIC_hide_agents_phone_field'])) { checked($options['IKONIC_hide_agents_phone_field'], 1); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_leads_per_page_field_render')): 
    function IKONIC_leads_per_page_field_render() { 
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input id="IKONIC_appearance_settings[IKONIC_leads_per_page_field]" type="number" step="1" min="1" style="width: 65px;" name="IKONIC_appearance_settings[IKONIC_leads_per_page_field]" value="<?php if (isset($options['IKONIC_leads_per_page_field'])) { echo esc_attr($options['IKONIC_leads_per_page_field']); } ?>" />
    <?php }
endif;

if (!function_exists('IKONIC_related_posts_field_render')): 
    function IKONIC_related_posts_field_render() {
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input type="checkbox" name="IKONIC_appearance_settings[IKONIC_related_posts_field]" <?php if (isset($options['IKONIC_related_posts_field'])) { checked($options['IKONIC_related_posts_field'], 1); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_blog_title_field_render')): 
    function IKONIC_blog_title_field_render() { 
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input id="IKONIC_appearance_settings[IKONIC_blog_title_field]" type="text" size="60" name="IKONIC_appearance_settings[IKONIC_blog_title_field]" value="<?php if (isset($options['IKONIC_blog_title_field'])) { echo esc_attr($options['IKONIC_blog_title_field']); } ?>" />
    <?php }
endif;

if (!function_exists('IKONIC_blog_subtitle_field_render')): 
    function IKONIC_blog_subtitle_field_render() { 
        $options = get_option('IKONIC_appearance_settings'); ?>

        <input id="IKONIC_appearance_settings[IKONIC_blog_subtitle_field]" type="text" size="60" name="IKONIC_appearance_settings[IKONIC_blog_subtitle_field]" value="<?php if (isset($options['IKONIC_blog_subtitle_field'])) { echo esc_attr($options['IKONIC_blog_subtitle_field']); } ?>" />
    <?php }
endif;
?>