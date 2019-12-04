<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
//$route['404_override'] = '';
$route['404_override'] = 'Set404';

/*ARTICLES ADMIN*/
$route['admin/articles/categories/(:num)'] = 'articles/admin_categories';
$route['admin/articles/categories/(:any)'] = 'articles/admin_categories/$1';
$route['admin/articles/categories'] = 'articles/admin_categories/index';
$route['admin/articles/comments/(:num)'] = 'articles/admin_comments';
$route['admin/articles/comments/(:any)'] = 'articles/admin_comments/$1';
$route['admin/articles/comments'] = 'articles/admin_comments/index';

/*CATALOGS*/
$route['admin/catalogs/categories/(:num)'] = 'catalogs/admin_categories';
$route['admin/catalogs/categories/(:any)'] = 'catalogs/admin_categories/$1';
$route['admin/catalogs/categories'] = 'catalogs/admin_categories/index';
$route['admin/catalogs/types/(:num)'] = 'catalogs/admin_types';
$route['admin/catalogs/types/(:any)'] = 'catalogs/admin_types/$1';
$route['admin/catalogs/types'] = 'catalogs/admin_types/index';
$route['admin/catalogs/destination/(:num)'] = 'catalogs/admin_destination';
$route['admin/catalogs/destination/(:any)'] = 'catalogs/admin_destination/$1';
$route['admin/catalogs/destination'] = 'catalogs/admin_destination/index';
$route['admin/catalogs/mice/(:num)'] = 'catalogs/admin_mice';
$route['admin/catalogs/mice/(:any)'] = 'catalogs/admin_mice/$1';
$route['admin/catalogs/mice'] = 'catalogs/admin_mice/index';

/*USERS GROUPS*/
$route['admin/users/groups/(:num)'] = 'users/admin_groups';
$route['admin/users/groups/(:any)'] = 'users/admin_groups/$1';
$route['admin/users/groups'] = 'users/admin_groups/index';

//ADMIN ROUTING
$route['admin/([a-zA-Z_-]+)/(:num)'] = '$1/admin';
$route['admin/([a-zA-Z_-]+)/(:any)'] = '$1/admin/$2';
$route['admin/([a-zA-Z_-]+)'] = '$1/admin/index';
$route['admin'] = 'admin';

//MEMBER ROUTING
/*SPECIAL ROUTING*/
$route['member/register'] = 'auth/register';
$route['member/profile'] = 'member/profile';

$route['member/([a-zA-Z_-]+)/(:num)'] = '$1/member';
$route['member/([a-zA-Z_-]+)/(:any)'] = '$1/member/$2';
$route['member/([a-zA-Z_-]+)'] = '$1/member/index';
$route['member'] = 'member';

/* End of file routes.php */
/* Location: ./application/config/routes.php */