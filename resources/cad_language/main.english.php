<?php
/**
 * Childboards as Dropdown
 *
 * @file ./cad_language/main.english.php
 * @author Labradoodle-360
 * @copyright Matthew Kerle 2012-2013
 *
 * @version 2.0.4
 */

global $modSettings;
$txt['lab360_cad'] = array(
	'select_child' => 'Select a Childboard',
	'board_children' => 'Board Children',
	'go' => 'Go!',
	'childboard_limit_desc' => '<em>0 = All Boards</em>'
);

$txt['lab360_childboard_header'] = 'Childboards as Dropdown';
$txt['lab360_childboard_desc'] = '<strong>Childboards as Dropdown</strong> allows you to replace the SMF standardized childboard list with an input dropdown to clean up the layout substantially.';
$txt['lab360_childboard_dropdown'] = 'Enable Childboards as Dropdown:';
$txt['lab360_childboard_limit'] = 'Boards Containing > <em>' . (isset($modSettings['lab360_childboard_limit']) ? $modSettings['lab360_childboard_limit'] : 0) . '</em> Children Become a Dropdown:';
$txt['lab360_copyright'] = '<a href="http://custom.simplemachines.org/mods/index.php?mod=1691">Childboards as Dropdown</a> | Copyright ' . date('Y') . ' - <a href="http://matthewkerle.com/">Matthew Kerle</a>';