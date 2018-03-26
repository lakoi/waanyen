<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['login/login'] = 'login/index/$1';
$route['login/register'] = 'Register/create/$1';
$route['register'] = 'Register/create/$1';
$route['login/list_view'] = 'login/enter/$1';
$route['login/profile'] = 'Profiles/index/$1';

$route['login/change_name'] = 'Profiles/change_name/$1';
$route['login/change_password'] = 'Profiles/change_pass/$1';

$route['login/add_education'] = 'Lists/add_edu/$1';
$route['login/add_interest'] = 'Lists/add_int/$1';
$route['login/add_job'] = 'Lists/add_j/$1';

$route['login/education'] = 'Lists/edu/$1';
$route['login/interest'] = 'Lists/int/$1';
$route['login/job'] = 'Lists/j/$1';

$route['login/edit_education/(:num)'] = 'Lists/edit_edu/$1';
$route['login/edit_interest/(:num)'] = 'Lists/edit_int/$1';
$route['login/edit_job/(:num)'] = 'Lists/edit_j/$1';

$route['default_controller'] = 'pages/view';
