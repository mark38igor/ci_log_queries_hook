<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|    https://codeigniter.com/user_guide/general/hooks.html
|
 */
$hook['post_system'][] = array('class' => 'LogQueryHook',
    'function' => 'log_queries',
    'filename' => 'LogQueryHook.php',
    'filepath' => 'hooks');
