<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'admin/welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'admin/errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = 'admin/error';

/*************frontend controller routes*************************/
$route['about']='Home/about';
$route['services']='Home/services';
$route['login']='Home/login';
$route['register']='Home/register';
$route['contact']='Home/contact';
$route['multi_register']='Home/multi_register';

/*********** USER DEFINED ROUTES *******************/


$route['loginMe'] = 'admin/login/loginMe';
$route['dashboard'] = 'admin/user';
$route['logout'] = 'admin/user/logout';
$route['userListing'] = 'admin/user/userListing';
$route['userListing/(:admin/num)'] = "user/userListing/$1";
$route['addNew'] = "admin/user/addNew";

$route['addNewUser'] = "admin/user/addNewUser";
$route['editOld'] = "admin/user/editOld";
$route['editOld/(:admin/num)'] = "user/editOld/$1";
$route['editUser'] = "admin/user/editUser";
$route['deleteUser'] = "admin/user/deleteUser";
$route['loadChangePass'] = "admin/user/loadChangePass";
$route['changePassword'] = "admin/user/changePassword";
$route['pageNotFound'] = "admin/user/pageNotFound";
$route['checkEmailExists'] = "admin/user/checkEmailExists";

$route['forgotPassword'] = "admin/login/forgotPassword";
$route['resetPasswordUser'] = "admin/login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "admin/login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:admin/any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:admin/any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "admin/login/createPasswordUser";

$route['admin/questionListing'] = "admin/question/questionListing";
$route['admin/question/add'] = "admin/question/add";
$route['admin/question/edit/(num)'] = "admin/question/edit/$1";
/* End of file routes.php */
/* Location: ./application/config/routes.php */