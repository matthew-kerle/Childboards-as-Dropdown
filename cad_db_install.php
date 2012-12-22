<?php
/**
 * Childboards as Dropdown
 *
 * @file cad_install.php
 * @author Labradoodle-360
 * @copyright Matthew Kerle 2012-2013
 *
 * @version 2.0.4
 */
 
// Using SSI?
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF'))
	die('<strong>Error:</strong> Cannot install - please make sure that this file in the same directory as SMF\'s SSI.php file.');

// $smcFunc is necessary.
global $smcFunc, $user_info;

// One final security check.
if (!$user_info['is_admin'])
	die('<strong>Error:</strong> Only forum administrators are able to execute this file.');

// Our variables & values.
$final_array = array(
	'lab360_childboard_dropdown' => 1,
	'lab360_childboard_limit' => '0'
);

// Add them -> reload.
updateSettings($final_array);
reloadSettings();

// And, we're done!
if (SMF == 'SSI')
	echo 'Settings Successfully Added!';