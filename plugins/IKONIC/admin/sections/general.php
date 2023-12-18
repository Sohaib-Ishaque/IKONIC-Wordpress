<?php
/**
 * @package WordPress
 * @subpackage IKONIC
 */

if (!function_exists('IKONIC_admin_general_settings')): 
    function IKONIC_admin_general_settings() {
        add_settings_section('IKONIC_general_section', __('General Settings', 'IKONIC'), 'IKONIC_general_section_callback', 'IKONIC_general_settings');
        add_settings_field('IKONIC_auto_country_field', __('Limit Google Autocomplete to One Country', 'IKONIC'), 'IKONIC_auto_country_field_render', 'IKONIC_general_settings', 'IKONIC_general_section');
        add_settings_field('IKONIC_locale_field', __('Price Format', 'IKONIC'), 'IKONIC_locale_field_render', 'IKONIC_general_settings', 'IKONIC_general_section');
        add_settings_field('IKONIC_map_marker_price_format_field', __('Map Marker Price Format', 'IKONIC'), 'IKONIC_map_marker_price_format_field_render', 'IKONIC_general_settings', 'IKONIC_general_section');
        add_settings_field('IKONIC_decimals_field', __('Use Decimals for Price', 'IKONIC'), 'IKONIC_decimals_field_render', 'IKONIC_general_settings', 'IKONIC_general_section');
        add_settings_field('IKONIC_currency_symbol_field', __('Currency Symbol', 'IKONIC'), 'IKONIC_currency_symbol_field_render', 'IKONIC_general_settings', 'IKONIC_general_section');
        add_settings_field('IKONIC_currency_symbol_pos_field', __('Currency Symbol Position', 'IKONIC'), 'IKONIC_currency_symbol_pos_field_render', 'IKONIC_general_settings', 'IKONIC_general_section');
        add_settings_field('IKONIC_max_price_field', __('Price Range Max Value', 'IKONIC'), 'IKONIC_max_price_field_render', 'IKONIC_general_settings', 'IKONIC_general_section');
        add_settings_field('IKONIC_beds_label_field', __('Property Bedrooms Label', 'IKONIC'), 'IKONIC_beds_label_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_baths_label_field', __('Property Bathrooms Label', 'IKONIC'), 'IKONIC_baths_label_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_unit_field', __('Property Size Unit', 'IKONIC'), 'IKONIC_unit_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_max_files_field', __('Max Number of Uploaded Photos per Property', 'IKONIC'), 'IKONIC_max_files_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_agents_rate_field', __('Enable Agent/Owner Reviews and Rating', 'IKONIC'), 'IKONIC_agents_rating_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_no_review_field', __('Allow Property Publish Without Admin Approval', 'IKONIC'), 'IKONIC_no_review_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_featured_property_field', __('Allow Agents to Set Properties as Featured', 'IKONIC'), 'IKONIC_featured_property_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_show_print_property_field', __('Show Print Property Option', 'IKONIC'), 'IKONIC_show_print_property_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_show_report_property_field', __('Show Report Property Option', 'IKONIC'), 'IKONIC_show_report_property_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
        add_settings_field('IKONIC_copyright_field', __('Footer Copyright Text', 'IKONIC'), 'IKONIC_copyright_field_render', 'IKONIC_general_settings', 'IKONIC_general_section' );
    }
endif;

if (!function_exists('IKONIC_general_section_callback')): 
    function IKONIC_general_section_callback() {
        echo '';
    }
endif;

if (!function_exists('IKONIC_auto_country_field_render')): 
    function IKONIC_auto_country_field_render() { 
        $options   = get_option('IKONIC_general_settings');
        $countries = array("af" => __("Afghanistan", "IKONIC"), "ax" => __("Åland Islands", "IKONIC"), "al" => __("Albania", "IKONIC"), "dz" => __("Algeria", "IKONIC"), "as" => __("American Samoa", "IKONIC"), "ad" => __("Andorra", "IKONIC"), "ao" => __("Angola", "IKONIC"), "ai" => __("Anguilla", "IKONIC"), "aq" => __("Antarctica", "IKONIC"), "ag" => __("Antigua and Barbuda", "IKONIC"), "ar" => __("Argentina", "IKONIC"), "am" => __("Armenia", "IKONIC"), "aw" => __("Aruba", "IKONIC"), "au" => __("Australia", "IKONIC"), "at" => __("Austria", "IKONIC"), "az" => __("Azerbaijan", "IKONIC"), "bs" => __("Bahamas", "IKONIC"), "bh" => __("Bahrain", "IKONIC"), "bd" => __("Bangladesh", "IKONIC"), "bb" => __("Barbados", "IKONIC"), "by" => __("Belarus", "IKONIC"), "be" => __("Belgium", "IKONIC"), "bz" => __("Belize", "IKONIC"), "bj" => __("Benin", "IKONIC"), "bm" => __("Bermuda", "IKONIC"), "bt" => __("Bhutan", "IKONIC"), "bo" => __("Bolivia (Plurinational State of)", "IKONIC"), "bq" => __("Bonaire, Sint Eustatius and Saba", "IKONIC"), "ba" => __("Bosnia and Herzegovina", "IKONIC"), "bw" => __("Botswana", "IKONIC"), "bv" => __("Bouvet Island", "IKONIC"), "br" => __("Brazil", "IKONIC"), "io" => __("British Indian Ocean Territory", "IKONIC"), "bn" => __("Brunei Darussalam", "IKONIC"), "bg" => __("Bulgaria", "IKONIC"), "bf" => __("Burkina Faso", "IKONIC"), "bi" => __("Burundi", "IKONIC"), "cv" => __("Cabo Verde", "IKONIC"), "kh" => __("Cambodia", "IKONIC"), "cm" => __("Cameroon", "IKONIC"), "ca" => __("Canada", "IKONIC"), "ky" => __("Cayman Islands", "IKONIC"), "cf" => __("Central African Republic", "IKONIC"), "td" => __("Chad", "IKONIC"), "cl" => __("Chile", "IKONIC"), "cn" => __("China", "IKONIC"), "cx" => __("Christmas Island", "IKONIC"), "cc" => __("Cocos (Keeling) Islands", "IKONIC"), "co" => __("Colombia", "IKONIC"), "km" => __("Comoros", "IKONIC"), "cg" => __("Congo", "IKONIC"), "cd" => __("Congo (Democratic Republic of the)", "IKONIC"), "ck" => __("Cook Islands", "IKONIC"), "cr" => __("Costa Rica", "IKONIC"), "ci" => __("Côte d'Ivoire", "IKONIC"), "hr" => __("Croatia", "IKONIC"), "cu" => __("Cuba", "IKONIC"), "cw" => __("Curaçao", "IKONIC"), "cy" => __("Cyprus", "IKONIC"), "cz" => __("Czech Republic", "IKONIC"), "dk" => __("Denmark", "IKONIC"), "dj" => __("Djibouti", "IKONIC"), "dm" => __("Dominica", "IKONIC"), "do" => __("Dominican Republic", "IKONIC"), "ec" => __("Ecuador", "IKONIC"), "eg" => __("Egypt", "IKONIC"), "sv" => __("El Salvador", "IKONIC"), "gq" => __("Equatorial Guinea", "IKONIC"), "er" => __("Eritrea", "IKONIC"), "ee" => __("Estonia", "IKONIC"), "et" => __("Ethiopia", "IKONIC"), "fk" => __("Falkland Islands (Malvinas)", "IKONIC"), "fo" => __("Faroe Islands", "IKONIC"), "fj" => __("Fiji", "IKONIC"), "fi" => __("Finland", "IKONIC"), "fr" => __("France", "IKONIC"), "gf" => __("French Guiana", "IKONIC"), "pf" => __("French Polynesia", "IKONIC"), "tf" => __("French Southern Territories", "IKONIC"), "ga" => __("Gabon", "IKONIC"), "gm" => __("Gambia", "IKONIC"), "ge" => __("Georgia", "IKONIC"), "de" => __("Germany", "IKONIC"), "gh" => __("Ghana", "IKONIC"), "gi" => __("Gibraltar", "IKONIC"), "gr" => __("Greece", "IKONIC"), "gl" => __("Greenland", "IKONIC"), "gd" => __("Grenada", "IKONIC"), "gp" => __("Guadeloupe", "IKONIC"), "gu" => __("Guam", "IKONIC"), "gt" => __("Guatemala", "IKONIC"), "gg" => __("Guernsey", "IKONIC"), "gn" => __("Guinea", "IKONIC"), "gw" => __("Guinea-Bissau", "IKONIC"), "gy" => __("Guyana", "IKONIC"), "ht" => __("Haiti", "IKONIC"), "hm" => __("Heard Island and McDonald Islands", "IKONIC"), "va" => __("Holy See", "IKONIC"), "hn" => __("Honduras", "IKONIC"), "hk" => __("Hong Kong", "IKONIC"), "hu" => __("Hungary", "IKONIC"), "is" => __("Iceland", "IKONIC"), "in" => __("India", "IKONIC"), "id" => __("Indonesia", "IKONIC"), "ir" => __("Iran (Islamic Republic of)", "IKONIC"), "iq" => __("Iraq", "IKONIC"), "ie" => __("Ireland", "IKONIC"), "im" => __("Isle of Man", "IKONIC"), "il" => __("Israel", "IKONIC"), "it" => __("Italy", "IKONIC"), "jm" => __("Jamaica", "IKONIC"), "jp" => __("Japan", "IKONIC"), "je" => __("Jersey", "IKONIC"), "jo" => __("Jordan", "IKONIC"), "kz" => __("Kazakhstan", "IKONIC"), "ke" => __("Kenya", "IKONIC"), "ki" => __("Kiribati", "IKONIC"), "kp" => __("Korea (Democratic People's Republic of)", "IKONIC"), "kr" => __("Korea (Republic of)", "IKONIC"), "kw" => __("Kuwait", "IKONIC"), "kg" => __("Kyrgyzstan", "IKONIC"), "la" => __("Lao People's Democratic Republic", "IKONIC"), "lv" => __("Latvia", "IKONIC"), "lb" => __("Lebanon", "IKONIC"), "ls" => __("Lesotho", "IKONIC"), "lr" => __("Liberia", "IKONIC"), "ly" => __("Libya", "IKONIC"), "li" => __("Liechtenstein", "IKONIC"), "lt" => __("Lithuania", "IKONIC"), "lu" => __("Luxembourg", "IKONIC"), "mo" => __("Macao", "IKONIC"), "mk" => __("Macedonia (the former Yugoslav Republic of)", "IKONIC"), "mg" => __("Madagascar", "IKONIC"), "mw" => __("Malawi", "IKONIC"), "my" => __("Malaysia", "IKONIC"), "mv" => __("Maldives", "IKONIC"), "ml" => __("Mali", "IKONIC"), "mt" => __("Malta", "IKONIC"), "mh" => __("Marshall Islands", "IKONIC"), "mq" => __("Martinique", "IKONIC"), "mr" => __("Mauritania", "IKONIC"), "mu" => __("Mauritius", "IKONIC"), "yt" => __("Mayotte", "IKONIC"), "mx" => __("Mexico", "IKONIC"), "fm" => __("Micronesia (Federated States of)", "IKONIC"), "md" => __("Moldova (Republic of)", "IKONIC"), "mc" => __("Monaco", "IKONIC"), "mn" => __("Mongolia", "IKONIC"), "me" => __("Montenegro", "IKONIC"), "ms" => __("Montserrat", "IKONIC"), "ma" => __("Morocco", "IKONIC"), "mz" => __("Mozambique", "IKONIC"), "mm" => __("Myanmar", "IKONIC"), "na" => __("Namibia", "IKONIC"), "nr" => __("Nauru", "IKONIC"), "np" => __("Nepal", "IKONIC"), "nl" => __("Netherlands", "IKONIC"), "nc" => __("New Caledonia", "IKONIC"), "nz" => __("New Zealand", "IKONIC"), "ni" => __("Nicaragua", "IKONIC"), "ne" => __("Niger", "IKONIC"), "ng" => __("Nigeria", "IKONIC"), "nu" => __("Niue", "IKONIC"), "nf" => __("Norfolk Island", "IKONIC"), "mp" => __("Northern Mariana Islands", "IKONIC"), "no" => __("Norway", "IKONIC"), "om" => __("Oman", "IKONIC"), "pk" => __("Pakistan", "IKONIC"), "pw" => __("Palau", "IKONIC"), "ps" => __("Palestine, State of", "IKONIC"), "pa" => __("Panama", "IKONIC"), "pg" => __("Papua New Guinea", "IKONIC"), "py" => __("Paraguay", "IKONIC"), "pe" => __("Peru", "IKONIC"), "ph" => __("Philippines", "IKONIC"), "pn" => __("Pitcairn", "IKONIC"), "pl" => __("Poland", "IKONIC"), "pt" => __("Portugal", "IKONIC"), "pr" => __("Puerto Rico", "IKONIC"), "qa" => __("Qatar", "IKONIC"), "re" => __("Réunion", "IKONIC"), "ro" => __("Romania", "IKONIC"), "ru" => __("Russian Federation", "IKONIC"), "rw" => __("Rwanda", "IKONIC"), "bl" => __("Saint Barthélemy", "IKONIC"), "sh" => __("Saint Helena, Ascension and Tristan da Cunha", "IKONIC"), "kn" => __("Saint Kitts and Nevis", "IKONIC"), "lc" => __("Saint Lucia", "IKONIC"), "mf" => __("Saint Martin (French part)", "IKONIC"), "pm" => __("Saint Pierre and Miquelon", "IKONIC"), "vc" => __("Saint Vincent and the Grenadines", "IKONIC"), "ws" => __("Samoa", "IKONIC"), "sm" => __("San Marino", "IKONIC"), "st" => __("Sao Tome and Principe", "IKONIC"), "sa" => __("Saudi Arabia", "IKONIC"), "sn" => __("Senegal", "IKONIC"), "rs" => __("Serbia", "IKONIC"), "sc" => __("Seychelles", "IKONIC"), "sl" => __("Sierra Leone", "IKONIC"), "sg" => __("Singapore", "IKONIC"), "sx" => __("Sint Maarten (Dutch part)", "IKONIC"), "sk" => __("Slovakia", "IKONIC"), "si" => __("Slovenia", "IKONIC"), "sb" => __("Solomon Islands", "IKONIC"), "so" => __("Somalia", "IKONIC"), "za" => __("South Africa", "IKONIC"), "gs" => __("South Georgia and the South Sandwich Islands", "IKONIC"), "ss" => __("South Sudan", "IKONIC"), "es" => __("Spain", "IKONIC"), "lk" => __("Sri Lanka", "IKONIC"), "sd" => __("Sudan", "IKONIC"), "sr" => __("Suriname", "IKONIC"), "sj" => __("Svalbard and Jan Mayen", "IKONIC"), "sz" => __("Swaziland", "IKONIC"), "se" => __("Sweden", "IKONIC"), "ch" => __("Switzerland", "IKONIC"), "sy" => __("Syrian Arab Republic", "IKONIC"), "tw" => __("Taiwan, Province of China", "IKONIC"), "tj" => __("Tajikistan", "IKONIC"), "tz" => __("Tanzania, United Republic of", "IKONIC"), "th" => __("Thailand", "IKONIC"), "tl" => __("Timor-Leste", "IKONIC"), "tg" => __("Togo", "IKONIC"), "tk" => __("Tokelau", "IKONIC"), "to" => __("Tonga", "IKONIC"), "tt" => __("Trinidad and Tobago", "IKONIC"), "tn" => __("Tunisia", "IKONIC"), "tr" => __("Turkey", "IKONIC"), "tm" => __("Turkmenistan", "IKONIC"), "tc" => __("Turks and Caicos Islands", "IKONIC"), "tv" => __("Tuvalu", "IKONIC"), "ug" => __("Uganda", "IKONIC"), "ua" => __("Ukraine", "IKONIC"), "ae" => __("United Arab Emirates", "IKONIC"), "gb" => __("United Kingdom of Great Britain and Northern Ireland", "IKONIC"), "us" => __("United States of America", "IKONIC"), "um" => __("United States Minor Outlying Islands", "IKONIC"), "uy" => __("Uruguay", "IKONIC"), "uz" => __("Uzbekistan", "IKONIC"), "vu" => __("Vanuatu", "IKONIC"), "ve" => __("Venezuela (Bolivarian Republic of)", "IKONIC"), "vn" => __("Viet Nam", "IKONIC"), "vg" => __("Virgin Islands (British)", "IKONIC"), "vi" => __("Virgin Islands (U.S.)", "IKONIC"), "wf" => __("Wallis and Futuna", "IKONIC"), "eh" => __("Western Sahara", "IKONIC"), "ye" => __("Yemen", "IKONIC"), "zm" => __("Zambia", "IKONIC"), "zw" => __("Zimbabwe", "IKONIC"));

        $field = '<select id="IKONIC_general_settings[IKONIC_auto_country_field]" name="IKONIC_general_settings[IKONIC_auto_country_field]">';
        $field .= '<option value="">' . __('All', 'IKONIC') . '</option>';

        foreach ($countries as $key => $value) {
            $field .= '<option value="' . esc_attr($key) . '"';
            if (isset($options['IKONIC_auto_country_field']) && $options['IKONIC_auto_country_field'] == $key) {
                $field .= 'selected="selected"';
            }
            $field .= '>' . esc_html($value) . '</option>';
        }

        $field .= '</select>';

        print $field;
    }
endif;

if (!function_exists('IKONIC_locale_field_render')): 
    function IKONIC_locale_field_render() { 
        $options = get_option('IKONIC_general_settings');
        $locales = array("en_US" => __("English (United States)", "IKONIC"), "af_ZA" => __("Afrikaans (South Africa)", "IKONIC"), "sq_AL" => __("Albanian (Albania)", "IKONIC"), "ar_BH" => __("Arabic (Bahrain)", "IKONIC"), "ar_EG" => __("Arabic (Egypt)", "IKONIC"), "ar_IQ" => __("Arabic (Iraq)", "IKONIC"), "ar_JO" => __("Arabic (Jordan)", "IKONIC"), "ar_KW" => __("Arabic (Kuwait)", "IKONIC"), "ar_LB" => __("Arabic (Lebanon)", "IKONIC"), "ar_LY" => __("Arabic (Libya)", "IKONIC"), "ar_MA" => __("Arabic (Morocco)", "IKONIC"), "ar_OM" => __("Arabic (Oman)", "IKONIC"), "ar_QA" => __("Arabic (Qatar)", "IKONIC"), "ar_SA" => __("Arabic (Saudi Arabia)", "IKONIC"), "ar_SD" => __("Arabic (Sudan)", "IKONIC"), "ar_SY" => __("Arabic (Syria)", "IKONIC"), "ar_TN" => __("Arabic (Tunisia)", "IKONIC"), "ar_AE" => __("Arabic (United Arab Emirates)", "IKONIC"), "ar_YE" => __("Arabic (Yemen)", "IKONIC"), "hy_AM" => __("Armenian (Armenia)", "IKONIC"), "as_IN" => __("Assamese (India)", "IKONIC"), "bm_ML" => __("Bambara (Mali)", "IKONIC"), "eu_ES" => __("Basque (Spain)", "IKONIC"), "be_BY" => __("Belarusian (Belarus)", "IKONIC"), "bn_BD" => __("Bengali (Bangladesh)", "IKONIC"), "bn_IN" => __("Bengali (India)", "IKONIC"), "bs_BA" => __("Bosnian (Bosnia and Herzegovina)", "IKONIC"), "bg_BG" => __("Bulgarian (Bulgaria)", "IKONIC"), "my_MM" => __("Burmese (Myanmar [Burma])", "IKONIC"), "ca_ES" => __("Catalan (Spain)", "IKONIC"), "cgg_UG" => __("Chiga (Uganda)", "IKONIC"), "zh_Hans" => __("Chinese (Simplified Han)", "IKONIC"), "zh_Hant" => __("Chinese (Traditional Han)", "IKONIC"), "kw_GB" => __("Cornish (United Kingdom)", "IKONIC"), "hr_HR" => __("Croatian (Croatia)", "IKONIC"), "cs_CZ" => __("Czech (Czech Republic)", "IKONIC"), "da_DK" => __("Danish (Denmark)", "IKONIC"), "nl_BE" => __("Dutch (Belgium)", "IKONIC"), "nl_NL" => __("Dutch (Netherlands)", "IKONIC"), "en_AS" => __("English (American Samoa)", "IKONIC"), "en_AU" => __("English (Australia)", "IKONIC"), "en_BE" => __("English (Belgium)", "IKONIC"), "en_BZ" => __("English (Belize)", "IKONIC"), "en_BW" => __("English (Botswana)", "IKONIC"), "en_CA" => __("English (Canada)", "IKONIC"), "en_GU" => __("English (Guam)", "IKONIC"), "en_HK" => __("English (Hong Kong SAR China)", "IKONIC"), "en_IN" => __("English (India)", "IKONIC"), "en_IE" => __("English (Ireland)", "IKONIC"), "en_JM" => __("English (Jamaica)", "IKONIC"), "en_MT" => __("English (Malta)", "IKONIC"), "en_MH" => __("English (Marshall Islands)", "IKONIC"), "en_MU" => __("English (Mauritius)", "IKONIC"), "en_NA" => __("English (Namibia)", "IKONIC"), "en_NZ" => __("English (New Zealand)", "IKONIC"), "en_MP" => __("English (Northern Mariana Islands)", "IKONIC"), "en_PK" => __("English (Pakistan)", "IKONIC"), "en_PH" => __("English (Philippines)", "IKONIC"), "en_SG" => __("English (Singapore)", "IKONIC"), "en_ZA" => __("English (South Africa)", "IKONIC"), "en_TT" => __("English (Trinidad and Tobago)", "IKONIC"), "en_UM" => __("English (U.S. Minor Outlying Islands)", "IKONIC"), "en_VI" => __("English (U.S. Virgin Islands)", "IKONIC"), "en_GB" => __("English (United Kingdom)", "IKONIC"), "en_ZW" => __("English (Zimbabwe)", "IKONIC"), "et_EE" => __("Estonian (Estonia)", "IKONIC"), "fo_FO" => __("Faroese (Faroe Islands)", "IKONIC"), "fil_PH" => __("Filipino (Philippines)", "IKONIC"), "fi_FI" => __("Finnish (Finland)", "IKONIC"), "fr_BE" => __("French (Belgium)", "IKONIC"), "fr_BJ" => __("French (Benin)", "IKONIC"), "fr_BF" => __("French (Burkina Faso)", "IKONIC"), "fr_BI" => __("French (Burundi)", "IKONIC"), "fr_CM" => __("French (Cameroon)", "IKONIC"), "fr_CA" => __("French (Canada)", "IKONIC"), "fr_CF" => __("French (Central African Republic)", "IKONIC"), "fr_TD" => __("French (Chad)", "IKONIC"), "fr_KM" => __("French (Comoros)", "IKONIC"), "fr_CG" => __("French (Congo - Brazzaville)", "IKONIC"), "fr_CD" => __("French (Congo - Kinshasa)", "IKONIC"), "fr_CI" => __("French (Côte d’Ivoire)", "IKONIC"), "fr_DJ" => __("French (Djibouti)", "IKONIC"), "fr_GQ" => __("French (Equatorial Guinea)", "IKONIC"), "fr_FR" => __("French (France)", "IKONIC"), "fr_GA" => __("French (Gabon)", "IKONIC"), "fr_GP" => __("French (Guadeloupe)", "IKONIC"), "fr_GN" => __("French (Guinea)", "IKONIC"), "fr_LU" => __("French (Luxembourg)", "IKONIC"), "fr_MG" => __("French (Madagascar)", "IKONIC"), "fr_ML" => __("French (Mali)", "IKONIC"), "fr_MQ" => __("French (Martinique)", "IKONIC"), "fr_MC" => __("French (Monaco)", "IKONIC"), "fr_NE" => __("French (Niger)", "IKONIC"), "fr_RW" => __("French (Rwanda)", "IKONIC"), "fr_RE" => __("French (Réunion)", "IKONIC"), "fr_BL" => __("French (Saint Barthélemy)", "IKONIC"), "fr_MF" => __("French (Saint Martin)", "IKONIC"), "fr_SN" => __("French (Senegal)", "IKONIC"), "fr_CH" => __("French (Switzerland)", "IKONIC"), "fr_TG" => __("French (Togo)", "IKONIC"), "ff_SN" => __("Fulah (Senegal)", "IKONIC"), "gl_ES" => __("Galician (Spain)", "IKONIC"), "ka_GE" => __("Georgian (Georgia)", "IKONIC"), "de_AT" => __("German (Austria)", "IKONIC"), "de_BE" => __("German (Belgium)", "IKONIC"), "de_DE" => __("German (Germany)", "IKONIC"), "de_LI" => __("German (Liechtenstein)", "IKONIC"), "de_LU" => __("German (Luxembourg)", "IKONIC"), "de_CH" => __("German (Switzerland)", "IKONIC"), "el_CY" => __("Greek (Cyprus)", "IKONIC"), "el_GR" => __("Greek (Greece)", "IKONIC"), "gu_IN" => __("Gujarati (India)", "IKONIC"), "guz_KE" => __("Gusii (Kenya)", "IKONIC"), "he_IL" => __("Hebrew (Israel)", "IKONIC"), "hi_IN" => __("Hindi (India)", "IKONIC"), "hu_HU" => __("Hungarian (Hungary)", "IKONIC"), "is_IS" => __("Icelandic (Iceland)", "IKONIC"), "ig_NG" => __("Igbo (Nigeria)", "IKONIC"), "id_ID" => __("Indonesian (Indonesia)", "IKONIC"), "ga_IE" => __("Irish (Ireland)", "IKONIC"), "it_IT" => __("Italian (Italy)", "IKONIC"), "it_CH" => __("Italian (Switzerland)", "IKONIC"), "ja_JP" => __("Japanese (Japan)", "IKONIC"), "kn_IN" => __("Kannada (India)", "IKONIC"), "km_KH" => __("Khmer (Cambodia)", "IKONIC"), "ko_KR" => __("Korean (South Korea)", "IKONIC"), "khq_ML" => __("Koyra Chiini (Mali)", "IKONIC"), "ses_ML" => __("Koyraboro Senni (Mali)", "IKONIC"), "lv_LV" => __("Latvian (Latvia)", "IKONIC"), "lt_LT" => __("Lithuanian (Lithuania)", "IKONIC"), "mk_MK" => __("Macedonian (Macedonia)", "IKONIC"), "ms_BN" => __("Malay (Brunei)", "IKONIC"), "ms_MY" => __("Malay (Malaysia)", "IKONIC"), "ml_IN" => __("Malayalam (India)", "IKONIC"), "mt_MT" => __("Maltese (Malta)", "IKONIC"), "gv_GB" => __("Manx (United Kingdom)", "IKONIC"), "mr_IN" => __("Marathi (India)", "IKONIC"), "mfe_MU" => __("Morisyen (Mauritius)", "IKONIC"), "ne_IN" => __("Nepali (India)", "IKONIC"), "nb_NO" => __("Norwegian Bokmål (Norway)", "IKONIC"), "nn_NO" => __("Norwegian Nynorsk (Norway)", "IKONIC"), "or_IN" => __("Oriya (India)", "IKONIC"), "ps_AF" => __("Pashto (Afghanistan)", "IKONIC"), "fa_AF" => __("Persian (Afghanistan)", "IKONIC"), "fa_IR" => __("Persian (Iran)", "IKONIC"), "pl_PL" => __("Polish (Poland)", "IKONIC"), "pt_BR" => __("Portuguese (Brazil)", "IKONIC"), "pt_PT" => __("Portuguese (Portugal)", "IKONIC"), "pa_Arab" => __("Punjabi (Arabic)", "IKONIC"), "ro_MD" => __("Romanian (Moldova)", "IKONIC"), "ro_RO" => __("Romanian (Romania)", "IKONIC"), "rm_CH" => __("Romansh (Switzerland)", "IKONIC"), "ru_MD" => __("Russian (Moldova)", "IKONIC"), "ru_RU" => __("Russian (Russia)", "IKONIC"), "ru_UA" => __("Russian (Ukraine)", "IKONIC"), "sg_CF" => __("Sango (Central African Republic)", "IKONIC"), "sr_Latn" => __("Serbian (Latin)", "IKONIC"), "ii_CN" => __("Sichuan Yi (China)", "IKONIC"), "si_LK" => __("Sinhala (Sri Lanka)", "IKONIC"), "sk_SK" => __("Slovak (Slovakia)", "IKONIC"), "sl_SI" => __("Slovenian (Slovenia)", "IKONIC"), "so_ET" => __("Somali (Ethiopia)", "IKONIC"), "es_AR" => __("Spanish (Argentina)", "IKONIC"), "es_BO" => __("Spanish (Bolivia)", "IKONIC"), "es_CL" => __("Spanish (Chile)", "IKONIC"), "es_CO" => __("Spanish (Colombia)", "IKONIC"), "es_CR" => __("Spanish (Costa Rica)", "IKONIC"), "es_DO" => __("Spanish (Dominican Republic)", "IKONIC"), "es_EC" => __("Spanish (Ecuador)", "IKONIC"), "es_SV" => __("Spanish (El Salvador)", "IKONIC"), "es_GQ" => __("Spanish (Equatorial Guinea)", "IKONIC"), "es_GT" => __("Spanish (Guatemala)", "IKONIC"), "es_HN" => __("Spanish (Honduras)", "IKONIC"), "es_419" => __("Spanish (Latin America)", "IKONIC"), "es_MX" => __("Spanish (Mexico)", "IKONIC"), "es_NI" => __("Spanish (Nicaragua)", "IKONIC"), "es_PA" => __("Spanish (Panama)", "IKONIC"), "es_PY" => __("Spanish (Paraguay)", "IKONIC"), "es_PE" => __("Spanish (Peru)", "IKONIC"), "es_PR" => __("Spanish (Puerto Rico)", "IKONIC"), "es_ES" => __("Spanish (Spain)", "IKONIC"), "es_US" => __("Spanish (United States)", "IKONIC"), "es_UY" => __("Spanish (Uruguay)", "IKONIC"), "es_VE" => __("Spanish (Venezuela)", "IKONIC"), "sw_KE" => __("Swahili (Kenya)", "IKONIC"), "sw_TZ" => __("Swahili (Tanzania)", "IKONIC"), "sv_FI" => __("Swedish (Finland)", "IKONIC"), "sv_SE" => __("Swedish (Sweden)", "IKONIC"), "gsw_CH" => __("Swiss German (Switzerland)", "IKONIC"), "shi_Latn" => __("Tachelhit (Latin)", "IKONIC"), "ta_IN" => __("Tamil (India)", "IKONIC"), "ta_LK" => __("Tamil (Sri Lanka)", "IKONIC"), "te_IN" => __("Telugu (India)", "IKONIC"), "th_TH" => __("Thai (Thailand)", "IKONIC"), "bo_CN" => __("Tibetan (China)", "IKONIC"), "bo_IN" => __("Tibetan (India)", "IKONIC"), "to_TO" => __("Tonga (Tonga)", "IKONIC"), "tr_TR" => __("Turkish (Turkey)", "IKONIC"), "uk_UA" => __("Ukrainian (Ukraine)", "IKONIC"), "ur_IN" => __("Urdu (India)", "IKONIC"), "ur_PK" => __("Urdu (Pakistan)", "IKONIC"), "uz_Arab" => __("Uzbek (Arabic)", "IKONIC"), "uz_Latn" => __("Uzbek (Latin)", "IKONIC"), "vi_VN" => __("Vietnamese (Vietnam)", "IKONIC"), "cy_GB" => __("Welsh (United Kingdom)", "IKONIC"), "zu_ZA" => __("Zulu (South Africa)", "IKONIC"));

        $field = '<select id="IKONIC_general_settings[IKONIC_locale_field]" name="IKONIC_general_settings[IKONIC_locale_field]">';

        foreach ($locales as $key => $value) {
            $field .= '<option value="' . esc_attr($key) . '"';
            if (isset($options['IKONIC_locale_field']) && $options['IKONIC_locale_field'] == $key) {
                $field .= 'selected="selected"';
            }
            $field .= '>' . esc_html($value) . '</option>';
        }

        $field .= '</select>';

        print $field;
    }
endif;

if (!function_exists('IKONIC_map_marker_price_format_field_render')): 
    function IKONIC_map_marker_price_format_field_render() {
        $options = get_option('IKONIC_general_settings');
        $formats = array(
            'short' => __('Short', 'IKONIC'),
            'long'  => __('Long', 'IKONIC'),
        );

        $field = '<select id="IKONIC_general_settings[IKONIC_map_marker_price_format]" name="IKONIC_general_settings[IKONIC_map_marker_price_format]">';

        foreach ($formats as $key => $value) {
            $field .= '<option value="' . esc_attr($key) . '"';
            if (isset($options['IKONIC_map_marker_price_format']) && $options['IKONIC_map_marker_price_format'] == $key) {
                $field .= 'selected="selected"';
            }
            $field .= '>' . esc_html($value) . '</option>';
        }

        $field .= '</select>';

        print $field;
    }
endif;

if (!function_exists('IKONIC_decimals_field_render')): 
    function IKONIC_decimals_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input type="checkbox" name="IKONIC_general_settings[IKONIC_decimals_field]" <?php if(isset($options['IKONIC_decimals_field'])) { checked($options['IKONIC_decimals_field'], 1); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_currency_symbol_field_render')): 
    function IKONIC_currency_symbol_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input id="IKONIC_general_settings[IKONIC_currency_symbol_field]" type="text" size="10" name="IKONIC_general_settings[IKONIC_currency_symbol_field]" value="<?php if (isset($options['IKONIC_currency_symbol_field'])) { echo esc_attr($options['IKONIC_currency_symbol_field']); } ?>" />
    <?php }
endif;

if (!function_exists('IKONIC_currency_symbol_pos_field_render')): 
    function IKONIC_currency_symbol_pos_field_render() {
        $options = get_option('IKONIC_general_settings');
        $positions = array(
            'before' => __('Before', 'IKONIC'),
            'after'  => __('After', 'IKONIC'),
        );

        $field = '<select id="IKONIC_general_settings[IKONIC_currency_symbol_pos_field]" name="IKONIC_general_settings[IKONIC_currency_symbol_pos_field]">';

        foreach ($positions as $key => $value) {
            $field .= '<option value="' . esc_attr($key) . '"';
            if (isset($options['IKONIC_currency_symbol_pos_field']) && $options['IKONIC_currency_symbol_pos_field'] == $key) {
                $field .= 'selected="selected"';
            }
            $field .= '>' . esc_html($value) . '</option>';
        }

        $field .= '</select>';

        print $field;
    }
endif;

if (!function_exists('IKONIC_max_price_field_render')): 
    function IKONIC_max_price_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input id="IKONIC_general_settings[IKONIC_max_price_field]" type="text" size="16" name="IKONIC_general_settings[IKONIC_max_price_field]" value="<?php if (isset($options['IKONIC_max_price_field'])) { echo esc_attr($options['IKONIC_max_price_field']); } ?>" />
    <?php }
endif;

if (!function_exists('IKONIC_beds_label_field_render')): 
    function IKONIC_beds_label_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input id="IKONIC_general_settings[IKONIC_beds_label_field]" type="text" size="16" name="IKONIC_general_settings[IKONIC_beds_label_field]" value="<?php if (isset($options['IKONIC_beds_label_field'])) { echo esc_attr($options['IKONIC_beds_label_field']); } ?>" /> <i>(E.g. BD, Beds)</i>
    <?php }
endif;

if (!function_exists('IKONIC_baths_label_field_render')): 
    function IKONIC_baths_label_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input id="IKONIC_general_settings[IKONIC_baths_label_field]" type="text" size="16" name="IKONIC_general_settings[IKONIC_baths_label_field]" value="<?php if (isset($options['IKONIC_baths_label_field'])) { echo esc_attr($options['IKONIC_baths_label_field']); } ?>" /> <i>(E.g. BA, Baths)</i>
    <?php }
endif;

if (!function_exists('IKONIC_unit_field_render')): 
    function IKONIC_unit_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input id="IKONIC_general_settings[IKONIC_unit_field]" type="text" size="16" name="IKONIC_general_settings[IKONIC_unit_field]" value="<?php if (isset($options['IKONIC_unit_field'])) { echo esc_attr($options['IKONIC_unit_field']); } ?>" /> <i>(E.g. Sqft, Sqm, m2, ft2)</i>
    <?php }
endif;

if (!function_exists('IKONIC_max_files_field_render')): 
    function IKONIC_max_files_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input id="IKONIC_general_settings[IKONIC_max_files_field]" type="text" size="16" name="IKONIC_general_settings[IKONIC_max_files_field]" value="<?php if (isset($options['IKONIC_max_files_field'])) { echo esc_attr($options['IKONIC_max_files_field']); } ?>" />
    <?php }
endif;

if (!function_exists('IKONIC_agents_rating_field_render')): 
    function IKONIC_agents_rating_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input type="checkbox" name="IKONIC_general_settings[IKONIC_agents_rating_field]" <?php if (isset($options['IKONIC_agents_rating_field'])) { checked( $options['IKONIC_agents_rating_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_no_review_field_render')): 
    function IKONIC_no_review_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input type="checkbox" name="IKONIC_general_settings[IKONIC_no_review_field]" <?php if (isset($options['IKONIC_no_review_field'])) { checked( $options['IKONIC_no_review_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_featured_property_field_render')): 
    function IKONIC_featured_property_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input type="checkbox" name="IKONIC_general_settings[IKONIC_featured_property_field]" <?php if (isset($options['IKONIC_featured_property_field'])) { checked( $options['IKONIC_featured_property_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_show_print_property_field_render')): 
    function IKONIC_show_print_property_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input type="checkbox" name="IKONIC_general_settings[IKONIC_show_print_property_field]" <?php if (isset($options['IKONIC_show_print_property_field'])) { checked( $options['IKONIC_show_print_property_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_show_report_property_field_render')): 
    function IKONIC_show_report_property_field_render() {
        $options = get_option('IKONIC_general_settings'); ?>

        <input type="checkbox" name="IKONIC_general_settings[IKONIC_show_report_property_field]" <?php if (isset($options['IKONIC_show_report_property_field'])) { checked( $options['IKONIC_show_report_property_field'], 1 ); } ?> value="1">
    <?php }
endif;

if (!function_exists('IKONIC_copyright_field_render')): 
    function IKONIC_copyright_field_render() { 
        $options = get_option('IKONIC_general_settings'); ?>

        <textarea cols='40' rows='5' name='IKONIC_general_settings[IKONIC_copyright_field]'><?php if (isset($options['IKONIC_copyright_field'])) { echo esc_html($options['IKONIC_copyright_field']); } ?></textarea>
    <?php }
endif;
?>