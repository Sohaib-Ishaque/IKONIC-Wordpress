<?php
/**
 * @package WordPress
 * @subpackage IKONIC
 */

if (!function_exists('IKONIC_admin_welcome')): 
    function IKONIC_admin_welcome() {
        add_settings_section('IKONIC_welcome_section', __('Welcome', 'IKONIC'), 'IKONIC_welcome_section_callback', 'IKONIC_welcome_settings');
    }
endif;

if (!function_exists('IKONIC_welcome_section_callback')): 
    function IKONIC_welcome_section_callback() { 
        print '
            <div class="row">
                <div class="col-xs-12 col-sm-2 mb-20 rtl-pull-right">' . __('Theme version', 'IKONIC') . ': </div>
                <div class="col-xs-12 col-sm-10 mb-20 rtl-pull-right">
                    <strong>' . IKONIC_VERSION . '</strong>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 mb-20 rtl-pull-right">
                    <a href="http://pixelprime.co/themes/IKONIC-wp/documentation/" class="ep-link" target="_blank">
                        <span class="fa fa-file-text-o"></span> ' . __('Read the documentation', 'IKONIC') . '
                    </a>
                </div>
            </div>
        ';
    }
endif;
?>