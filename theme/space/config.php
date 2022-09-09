<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * space config.
 *
 * @package   theme_space
 * @copyright 2022 Marcin Czaja (https://rosea.io)
 * @license   Commercial https://themeforest.net/licenses
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/lib.php');

$THEME->name = 'space';
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->editor_scss = ['editor'];
$THEME->usefallback = true;
$THEME->scss = function($theme) {
    return theme_space_get_main_scss_content($theme);
};

$THEME->layouts = [
    // Most backwards compatible layout without the blocks - this is the layout used by default.
    'base' => array(
        'file' => 'tmpl-columns2.php',
        'regions' => array('side-pre', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
    ),
    // Standard layout with blocks, this is recommended for most pages with general information.
    'standard' => array(
        'file' => 'tmpl-columns2.php',
        'regions' => array('side-pre', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
    ),
    // Main course page.
    'course' => array(
        'file' => 'tmpl-course.php',
        'regions' => array('side-pre', 'sidecourseblocks', 'ctopbl', 'cbottombl', 'cstopbl', 'csbottombl', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
        'options' => array('langmenu' => true),
    ),
    'coursecategory' => array(
        'file' => 'tmpl-columns2.php',
        'regions' => array('side-pre', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
    ),
    // Part of course, typical for modules - default page layout if $cm specified in require_login().
    'incourse' => array(
        'file' => 'tmpl-incourse.php',
        'regions' => array('side-pre', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
    ),
    // The site home page.
    'frontpage' => array(
        'file' => 'tmpl-frontpage.php',
        'regions' => array('side-pre', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true),
    ),
    // Server administration scripts.
    'admin' => array(
        'file' => 'tmpl-admin.php',
        'regions' => array('side-pre', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
    ),
    // Moodle 4.0 - My courses page.
    'mycourses' => array(
        'file' => 'tmpl-columns2.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
    ),
    // My dashboard page.
    'mydashboard' => array(
        'file' => 'tmpl-dashboard.php',
        'regions' => array('side-pre', 'dleftblocks', 'dmiddleblocks', 'drightblocks', 'dtopblocks', 'dbottomblocks', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true, 'langmenu' => true, 'nocontextheader' => true),
    ),
    // My public page.
    'mypublic' => array(
        'file' => 'tmpl-mypublic.php',
        'regions' => array(),
        'defaultregion' => 'side-pre',
    ),
    'login' => array(
        'file' => 'tmpl-login.php',
        'regions' => array(),
        'options' => array('langmenu' => true),
    ),

    // Pages that appear in pop-up windows - no navigation, no blocks, no header and bare activity header.
    'popup' => array(
        'file' => 'tmpl-popup.php',
        'regions' => array(),
        'options' => array(
            'nofooter' => true,
            'nonavbar' => true,
            'activityheader' => [
                'notitle' => true,
                'nocompletion' => true,
                'nodescription' => true
            ]
        )
    ),
    // No blocks and minimal footer - used for legacy frame layouts only!
    'frametop' => array(
        'file' => 'tmpl-columns1.php',
        'regions' => array(),
        'options' => array(
            'nofooter' => true,
            'nocoursefooter' => true,
            'activityheader' => [
                'nocompletion' => true
            ]
        ),
    ),
    // Embeded pages, like iframe/object embeded in moodleform - it needs as much space as possible.
    'embedded' => array(
        'file' => 'embedded.php',
        'regions' => array()
    ),
    // Used during upgrade and install, and for the 'This site is undergoing maintenance' message.
    // This must not have any blocks, links, or API calls that would lead to database or cache interaction.
    // Please be extremely careful if you are modifying this layout.
    'maintenance' => array(
        'file' => 'tmpl-maintenance.php',
        'regions' => array(),
    ),
    // Should display the content and basic headers only.
    'print' => array(
        'file' => 'tmpl-columns1.php',
        'regions' => array(),
        'options' => array('nofooter' => true, 'nonavbar' => false, 'noactivityheader' => true),
    ),
    // The pagelayout used when a redirection is occuring.
    'redirect' => array(
        'file' => 'embedded.php',
        'regions' => array(),
    ),
    // The pagelayout used for reports.
    'report' => array(
        'file' => 'tmpl-report.php',
        'regions' => array('side-pre', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre',
    ),
    // The pagelayout used for safebrowser and securewindow.
    'secure' => array(
        'file' => 'secure.php',
        'regions' => array('side-pre', 'sidebartopblocks', 'sidebarbottomblocks'),
        'defaultregion' => 'side-pre'
    )
];

$THEME->parents = [];
$THEME->enable_dock = false;
$THEME->extrascsscallback = 'theme_space_get_extra_scss';
$THEME->prescsscallback = 'theme_space_get_pre_scss';
$THEME->precompiledcsscallback = 'theme_space_get_precompiled_css';
$THEME->yuicssmodules = array();
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->requiredblocks = '';
$THEME->addblockposition = BLOCK_ADDBLOCK_POSITION_DEFAULT;
//$THEME->iconsystem = '\\theme_space\\output\\icon_system_fontawesome';
$THEME->haseditswitch = true;
$THEME->usescourseindex = true;
// By default, all boost theme do not need their titles displayed.
$THEME->activityheaderconfig = [
    'notitle' => true
];
