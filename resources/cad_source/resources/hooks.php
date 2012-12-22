<?php
/**
 * Childboards as Dropdown
 *
 * @file ./cad_source/resources/hooks.php
 * @author Labradoodle-360
 * @copyright Matthew Kerle 2012
 *
 * @version 2.0.3
 */
 
if (!defined('SMF'))
	die('Hacking attempt...');


/**
 * hook__cad_modsettings()
 * 
 * @param mixed $config_vars
 * @return
 */
function hook__cad_modsettings(&$config_vars)
{

	// Our Global Variables.
	global $context, $txt;

	// Load The Language.
	loadLanguage('cad_language/main');

	// The <head> content.
	$context['html_headers'] .= "\n" . '
		<script type="text/javascript">
			//<![CDATA[
			if (!window.jQuery)
				document.write(unescape("%3Cscript type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"%3E%3C/script%3E"));
			//]]>
		</script>
		<script type="text/javascript">
			//<![CDATA[
			$(document).ready(function() {
				var loaded_childboard_attr = $("#lab360_childboard_dropdown").attr("checked");
				if (loaded_childboard_attr == "checked") {
				}
				else {
					$("#lab360_childboard_strict").slideUp("slow");
					$("#lab360_childboard_strict_dd").slideUp("slow");
				}
				$("#lab360_childboard_dropdown").change(function() {
					var childboard_attr = $(this).attr("checked");
					if (childboard_attr == "checked") {
						$("#lab360_childboard_strict").slideDown("slow");
						$("#lab360_childboard_strict_dd").slideDown("slow");
					}
					else {
						$("#lab360_childboard_strict").slideUp("slow");
						$("#lab360_childboard_strict_dd").slideUp("slow");
					}
				});
			});
			//]]>
		</script>
	';

	// Our $modSettings.
	$cad_settings = array(
		array(
			'title',
			'lab360_childboard_header'
		),
		array(
			'desc',
			'lab360_childboard_desc'
		),
		array(
			'check',
			'lab360_childboard_dropdown'
		),
		array(
			'int', 
			'lab360_childboard_limit',
			'subtext' => $txt['lab360_childboard_limit_desc'],
			'force_div_id' => 'lab360_childboard_strict',
			'javascript' => ' style="padding: 4px;"' # Sorry SMF, you didn't leave me any other option.
		),
		array(
			'var_message',
			'lab360_copyright',
			'name' => 'lab360_childboard_copyright" class="smalltext" style="color: #404040;' # Once again, no choice. This line is only here to hack the class.
		)
	);
	foreach ($cad_settings as $key => $value)
		$config_vars[] = $value;

}