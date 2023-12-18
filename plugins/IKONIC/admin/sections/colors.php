<?php
/**
 * @package WordPress
 * @subpackage IKONIC
 */

if (!function_exists('IKONIC_admin_colors')): 
    function IKONIC_admin_colors() {
        add_settings_section('IKONIC_colors_section', __( 'Colors', 'IKONIC' ), 'IKONIC_colors_section_callback', 'IKONIC_colors_settings');
    }
endif;

if (!function_exists('IKONIC_colors_section_callback')): 
    function IKONIC_colors_section_callback() { 
        $options = get_option('IKONIC_colors_settings'); ?>

        <br><h4><?php esc_html_e('Header', 'IKONIC'); ?></h4>

        <table>
            <tbody>
                <tr>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Background', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_header_bg_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_header_bg_color_field]" 
                                            value="<?php if (isset($options['IKONIC_header_bg_color_field'])) { echo esc_attr($options['IKONIC_header_bg_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Logo Text', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_header_logo_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_header_logo_color_field]" 
                                            value="<?php if (isset($options['IKONIC_header_logo_color_field'])) { echo esc_attr($options['IKONIC_header_logo_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Navigation', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_header_nav_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_header_nav_color_field]" 
                                            value="<?php if (isset($options['IKONIC_header_nav_color_field'])) { echo esc_attr($options['IKONIC_header_nav_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('User Icon', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_header_user_icon_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_header_user_icon_color_field]" 
                                            value="<?php if (isset($options['IKONIC_header_user_icon_color_field'])) { echo esc_attr($options['IKONIC_header_user_icon_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <br><hr><br>

        <h4><?php esc_html_e('Content', 'IKONIC'); ?></h4>

        <table>
            <tbody>
                <tr>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Button Background', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_button_bg_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_button_bg_color_field]" 
                                            value="<?php if (isset($options['IKONIC_button_bg_color_field'])) { echo esc_attr($options['IKONIC_button_bg_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Button Text', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_button_text_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_button_text_color_field]" 
                                            value="<?php if (isset($options['IKONIC_button_text_color_field'])) { echo esc_attr($options['IKONIC_button_text_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Featured Property Label Background', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_feat_prop_bg_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_feat_prop_bg_color_field]" 
                                            value="<?php if (isset($options['IKONIC_feat_prop_bg_color_field'])) { echo esc_attr($options['IKONIC_feat_prop_bg_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Featured Property Label Text', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_feat_prop_text_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_feat_prop_text_color_field]" 
                                            value="<?php if (isset($options['IKONIC_feat_prop_text_color_field'])) { echo esc_attr($options['IKONIC_feat_prop_text_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Featured Post Label Background', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_feat_post_bg_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_feat_post_bg_color_field]" 
                                            value="<?php if (isset($options['IKONIC_feat_post_bg_color_field'])) { echo esc_attr($options['IKONIC_feat_post_bg_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Featured Post Label Text', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_feat_post_text_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_feat_post_text_color_field]" 
                                            value="<?php if (isset($options['IKONIC_feat_post_text_color_field'])) { echo esc_attr($options['IKONIC_feat_post_text_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Map Marker Background', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_map_marker_bg_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_map_marker_bg_color_field]" 
                                            value="<?php if (isset($options['IKONIC_map_marker_bg_color_field'])) { echo esc_attr($options['IKONIC_map_marker_bg_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Map Marker Border', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_map_marker_border_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_map_marker_border_color_field]" 
                                            value="<?php if (isset($options['IKONIC_map_marker_border_color_field'])) { echo esc_attr($options['IKONIC_map_marker_border_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Map Marker Text', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_map_marker_text_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_map_marker_text_color_field]" 
                                            value="<?php if (isset($options['IKONIC_map_marker_text_color_field'])) { echo esc_attr($options['IKONIC_map_marker_text_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Agent Card CTA', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_agent_card_cta_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_agent_card_cta_color_field]" 
                                            value="<?php if (isset($options['IKONIC_agent_card_cta_color_field'])) { echo esc_attr($options['IKONIC_agent_card_cta_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Blog Post Card CTA', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_post_card_cta_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_post_card_cta_color_field]" 
                                            value="<?php if (isset($options['IKONIC_post_card_cta_color_field'])) { echo esc_attr($options['IKONIC_post_card_cta_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <br><hr><br>

        <h4><?php esc_html_e('Footer', 'IKONIC'); ?></h4>

        <table>
            <tbody>
                <tr>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Background', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_footer_bg_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_footer_bg_color_field]" 
                                            value="<?php if (isset($options['IKONIC_footer_bg_color_field'])) { echo esc_attr($options['IKONIC_footer_bg_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="40">&nbsp;</td>
                    <td>
                        <table class="form-table" role="presentation">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Text', 'IKONIC') ?></th>
                                    <td>
                                        <input 
                                            type="text" 
                                            class="color-field" 
                                            id="IKONIC_colors_settings[IKONIC_footer_text_color_field]" 
                                            name="IKONIC_colors_settings[IKONIC_footer_text_color_field]" 
                                            value="<?php if (isset($options['IKONIC_footer_text_color_field'])) { echo esc_attr($options['IKONIC_footer_text_color_field']); } ?>"
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php }
endif;
?>