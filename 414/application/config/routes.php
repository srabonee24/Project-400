<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
$route['home'] = 'Welcome/index';
$route['about'] = 'Welcome/about';
$route['gallery'] = 'Welcome/gallery';
$route['pricing'] = 'Welcome/pricing';
$route['faq'] = 'Welcome/faq';
$route['contact'] = 'Welcome/contact';
$route['page0'] = 'Welcome/page0';
$route['signup'] ='Welcome/signup';
$route['login'] ='Login/index';
