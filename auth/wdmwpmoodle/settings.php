<?php
// This file is part of moodle single sign on plugin

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // Introductory explanation.
    $settings->add(new admin_setting_heading('auth_wdmwpmoodle/description', '', new lang_string('auth_wdmwpmoodledescription', 'auth_wdmwpmoodle')));

    /*
     * Secreate key settings filed.
     */
    $settings->add(new admin_setting_configtext(
        'auth_wdmwpmoodle/sharedsecret',
        get_string('auth_wdmwpmoodle_secretkey', 'auth_wdmwpmoodle'),
        get_string('auth_wdmwpmoodle_secretkey_desc', 'auth_wdmwpmoodle'),
        '',
        PARAM_RAW
    ));

    $settings->add(
        new admin_setting_configtext(
            'auth_wdmwpmoodle/wpsiteurl',
            get_string('auth_wdmwpmoodle_wpsiteurl_lbl', 'auth_wdmwpmoodle'),
            get_string('auth_wdmwpmoodle_wpsiteurl_desc', 'auth_wdmwpmoodle'),
            '',
            PARAM_RAW
        )
    );

    /*
     * Setting filed for the logout redirect.
     */
    $settings->add(new admin_setting_configtext(
        'auth_wdmwpmoodle/logoutredirecturl',
        get_string('auth_wdmwpmoodle_logoutredirecturl_lbl', 'auth_wdmwpmoodle'),
        get_string('auth_wdmwpmoodle_logoutredirecturl_desc', 'auth_wdmwpmoodle'),
        '',
        PARAM_RAW
    ));


    // Setting to enable login with WordPress Button.
    $settings->add(new admin_setting_configcheckbox(
        'auth_wdmwpmoodle/wploginenablebtn',
        get_string('auth_wdmwpmoodle_wploginenablebtn_lbl', 'auth_wdmwpmoodle'),
        get_string('auth_wdmwpmoodle_wploginenablebtn_desc', 'auth_wdmwpmoodle'),
        '',
        PARAM_RAW
    ));


    // Setting to show text for the button.
    $settings->add(new admin_setting_configtext(
        'auth_wdmwpmoodle/wploginbtntext',
        get_string('auth_wdmwpmoodle_wploginbtntext_lbl', 'auth_wdmwpmoodle'),
        get_string('auth_wdmwpmoodle_wploginbtntext_desc', 'auth_wdmwpmoodle'),
        '',
        PARAM_RAW
    ));

}
