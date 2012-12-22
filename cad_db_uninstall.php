<?php
/**
 * Childboards as Dropdown
 *
 * @file cad_uninstall.php
 * @author Labradoodle-360
 * @copyright Matthew Kerle 2012
 *
 * @version 2.0.3
 */

// Using SSI?
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF'))
	die('<strong>Error:</strong> Cannot uninstall - please make sure that this file in the same directory as SMF\'s SSI.php file.');

// $smcFunc is necessary.
global $smcFunc;

// Our Variables.
$variables = array(
	'dropdown', 'limit'
);

// Remove Them.
foreach ($variables as $key)
{
	$smcFunc['db_query']('', '
		DELETE FROM {db_prefix}settings
		WHERE variable = {string:current_str}',
		array(
			'current_str' => 'lab360_childboard_' . $key
		)
	);
}

// And, we're done!
if (SMF == 'SSI')
	echo 'Settings Successfully Removed!';