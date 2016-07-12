<?php
/**
 *
 *	@module			ProCalendar
 *	@version		see info.php of this module
 *	@authors		David Ilicz Klementa, Burkhard Hekers, Jurgen Nijhuis, John Maats,erpe
 *	@copyright		2012-2016 David Ilicz Klementa, Burkhard Hekers, Jurgen Nijhuis, John Maats,erpe
 *	@license		GNU General Public License
 *	@license terms	see info.php of this module
 *	@platform		see info.php of this module
 *
 *	Based on MyCalendar by Burkhard Hekers
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {
	include(LEPTON_PATH.'/framework/class.secure.php');
} else {
	$root = "../";
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= "../";
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) {
		include($root.'/framework/class.secure.php');
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php  

$mod_headers = array();

$mod_headers = array(
	'backend' => array(
		'js' => array(
//			'/modules/procalendar/js/mColorPicker/javascripts/mColorPicker.js',
			'/modules/procalendar/js/picker/spectrum.js',
			'/modules/procalendar/js/date.js',	
			'/modules/lib_jquery/jquery-ui/jquery-ui.min.js',
			'/modules/lib_jquery/jquery-ui/ui/i18n/datepicker-'.strtolower(LANGUAGE).'.js',		
		),
        'css' => array(
            array(
                'media' => 'all',
                'file' => '/modules/lib_jquery/jquery-ui/jquery-ui.min.css'
               ),
            array(
                'media' => 'all',
                'file' => '/modules/procalendar/js/picker/spectrum.css'
               ),			   
            )
	)
);
?>