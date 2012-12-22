<?php
/**
 * Childboards as Dropdown
 *
 * @file ./cad_language/main.english.php
 * @author Labradoodle-360
 * @copyright Matthew Kerle 2012
 *
 * @version 2.0.3
 */

// BoardIndex & MessageIndex Strings.
$txt['lab360_select_child'] = 'Select a Childboard';
$txt['lab360_board_children'] = 'Board Children';
$txt['lab360_go'] = 'Go!';

// Admin Panel Strings.
global $modSettings;
$txt['lab360_childboard_header'] = 'Childboards as Dropdown';
$txt['lab360_childboard_desc'] = '<strong>Childboards as Dropdown</strong> allows you to replace the SMF-standardized childboard list, with an input dropdown to clean up the layout substantially.';
$txt['lab360_childboard_dropdown'] = 'Enable Childboards as Dropdown:';
$txt['lab360_childboard_limit'] = 'Boards Containing > <em>' . (isset($modSettings['lab360_childboard_limit']) ? $modSettings['lab360_childboard_limit'] : 0) . '</em> Children Become a Dropdown:';
$txt['lab360_childboard_limit_desc'] = '<em>0 = All Boards</em>';
$txt['lab360_copyright'] = '<a href="http://custom.simplemachines.org/mods/index.php?mod=1691" target="_self">Childboards as Dropdown</a> | Copyright ' . date('Y') . ' - <a href="http://www.simplemachines.org/community/index.php?action=profile;u=182638" target="_blank">Matthew Kerle</a>';