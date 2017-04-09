<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['login']  = 'home/do_login';
$route['logout'] = 'home/do_logout';
$route['background'] = 'home/background';
$route['question/(:num)/(:any)'] = 'home/questionf/(:num)/(:any)';
$route['profile/(:any)'] = 'home/userProfile/(:any)';
$route['user/image_upload'] = 'home/user_upload_image';
$route['user/manage_image'] = 'home/show_user_image';
$route['user/file_upload']  = 'home/user_upload_file';
$route['log']  = 'home/traditional_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
