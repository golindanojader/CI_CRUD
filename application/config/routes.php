<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['add'] = 'pages/add';

$route['edit/(:any)'] = 'pages/edit/$1';

$route['delete/(:any)'] = 'pages/delete/$1';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;