<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] 	= 'welcome';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;
$route['login'] 				= 'auth/login';
$route['forgot_password'] 		= 'auth/forgot_password';
$route['create_user'] 			= 'auth/create_user';
$route['edit_user/(:any)'] 		= 'auth/edit_user/$1';



