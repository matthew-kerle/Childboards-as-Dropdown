<?php
/**
 * Childboards as Dropdown
 *
 * @file ./cad_source/main.php
 * @author Labradoodle-360
 * @copyright Matthew Kerle 2012-2013
 *
 * @version 2.0.4
 */

if (!defined('SMF'))
	die('Hacking attempt...');

/**
 * loadChildboards_as_Dropdown()
 * 
 * @return
 */
function loadChildboards_as_Dropdown()
{

    // Globals.
    global $context;

	// Load the language.
	loadLanguage('cad_language/main');

	// Throw the JavaScript function in the <head>.
	$context['html_headers'] .= "\n" . '
		<script type="text/javascript">
		//<![CDATA[
		function jsRedirect(input) {
			if (input.value != \'\')
				window.location = smf_scripturl + \'?board=\' + input.value;
		}
		//]]>
		</script>
	';

}