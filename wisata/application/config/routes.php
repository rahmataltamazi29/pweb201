<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['rooms/(:any)'] = 'room/roomlist/$1';
$route['guest/(:any)'] = 'guest/guestlist/$1';
$route['member/(:any)'] = 'member/memberlist/$1';
$route['rooms'] = 'room/roomlist';
$route['guest'] = 'guest/guestlist';
$route['member'] = 'member/memberlist';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
