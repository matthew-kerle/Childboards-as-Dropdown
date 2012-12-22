<?php
/**
 * Childboards as Dropdown
 *
 * @file cad_uhooks.php
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

// Array of Hooks.
$hooks = array(
	'integrate_pre_include' => array(
		'$sourcedir/cad_source/resources/hooks.php',
	),
	'integrate_general_mod_settings' => array(
		'hook__cad_modsettings',
	),
);

// Remove them!
foreach ($hooks as $key => $value)
{
	if (is_array($hooks[$key]))
	{
		foreach ($hooks[$key] as $sValue)
			remove_integration_function($key, $sValue);
	}
	else
		remove_integration_function($key, $value);
}

// And, we're done!
if (SMF == 'SSI')
	echo 'h00ks Successfully Removed!';