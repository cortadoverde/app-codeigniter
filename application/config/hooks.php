<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/



/* End of file hooks.php */
/* Location: ./application/config/hooks.php */
$hook['pre_system'][] = array('class' => 'Layout',
    'class' => 'InTouch_Autoloader',
    'function' => 'register',
    'filename' => 'autoloader.php',
    'filepath' => 'libraries/InTouch/'
);