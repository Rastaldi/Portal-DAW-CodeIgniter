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
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login";
$route['home']="home";
$route['home/(:num)'] = "home/detalleNoticia/$1";
$route['404_override'] = '';
$route['home/detalleNoticia/(:num/):any'] = "home/detalleNoticia/$1";
$route['register'] = "registro";
//le decimos que es lo que va a aparecer en la url, y le decimos donde buscarlo, con "controlador/metodo de ese controller/$variable si hay
$route['concurso_controller'] = "concurso_controller";
$route['concurso_controller/detalleFoto/(:num)'] = "concurso_controller/detalleFoto/$1";

$route['concurso_controller/addFoto'] = "concurso_controller/addFoto";

//$route['addFoto/:any/:any/:any/:any'] = "concurso_controller/addFoto/$url_foto/$titulo_foto/$body_foto/$autor_foto";


/* End of file routes.php */
/* Location: ./application/config/routes.php */