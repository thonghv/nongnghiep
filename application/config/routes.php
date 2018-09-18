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
$route['default_controller'] = 'home/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(:any)/(:any)\-(:num).html'] = 'question/ques/$3';

$route['wp-admin']	= "wp-admin/home";

/* Category */
$route['(:any)/(:any).html']	= "subject/thematic/$2";

$route['(:any)/(:any)/noi-dung-ly-thuyet/add-new.html']	= "subject/addtheory/$2";
$route['(:any)/(:any)/noi-dung-ly-thuyet/update.html']	= "subject/updateTheory/$2";

$route['(:any)/(:any)/noi-dung-ly-thuyet.html']	= "subject/category/$2/1";
$route['(:any)/(:any)/bai-tap-co-ban.html']		= "subject/category/$2/2";
$route['(:any)/(:any)/bai-tap-nang-cao.html']	= "subject/category/$2/3";
$route['(:any)/(:any)/hoi-dap.html']	= "subject/category/$2/4";

$route['hoa-hoc-8.html']	= "subject/course/hoa-hoc-8";
$route['hoa-hoc-9.html']	= "subject/course/hoa-hoc-9";
$route['hoa-hoc-10.html']	= "subject/course/hoa-hoc-10";
$route['hoa-hoc-11.html']	= "subject/course/hoa-hoc-11";
$route['hoa-hoc-12.html']	= "subject/course/hoa-hoc-12";
$route['luyen-thi-dai-hoc.html'] = "subject/course/luyen-thi-dai-hoc";


$route['(:any)/(:any)/(:any).html']	= "subject/chapter/$3";



