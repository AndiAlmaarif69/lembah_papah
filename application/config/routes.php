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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//  ======= ||untuk banner || ==========
$route['insert_banner'] = 'dashboard/insert_banner';
$route['banner'] = 'dashboard/banner';
$route['edit_banner'] = 'dashboard/edit_banner';
$route['delete_ban'] = 'dashboard/delete_ban';
// ======== ||untuk fitur || ===========
$route['fitur'] = 'dashboard/fitur';
$route['insert_fitur'] = 'dashboard/insert_fitur';
$route['edit_fit'] = 'dashboard/edit_fit';
$route['delete_fit'] = 'dashboard/delete_fit';
// ======= || untuk showcase || ===========
$route['showcase'] = 'dashboard/showcase';
$route['insert_showcase'] = 'dashboard/insert_showcase';
$route['edit_show'] = 'dashboard/edit_show';
$route['delete_show'] = 'dashboard/delete_show';
// ======= || untuk listing || ===========
$route['listing'] = 'dashboard/listing';
$route['insert_list'] = 'dashboard/insert_list';
$route['edit_list'] = 'dashboard/edit_list';
$route['delete_list'] = 'dashboard/delete_list';
// ======= || untuk pengelola || ===========
$route['pengelola'] = 'dashboard/pengelola';
$route['insert_pengelola'] = 'dashboard/insert_pengelola';
$route['edit_pengelola'] = 'dashboard/edit_pengelola';
$route['delete_pengelola'] = 'dashboard/delete_pengelola';
// ======= || untuk admin || ===========
$route['admin'] = 'dashboard/admin';
$route['insert_admin'] = 'dashboard/insert_admin';
$route['edit_admin'] = 'dashboard/edit_admin';
$route['delete_admin'] = 'dashboard/delete_admin';
// untuk frontend
$route['aneka/(:num)'] = 'welcome/aneka/$1';
$route['listing/(:num)'] = 'welcome/listing/$1';
$route['blog'] = 'welcome/blog';
$route['profile'] = 'welcome/profile';
$route['contact'] = 'welcome/contact';
