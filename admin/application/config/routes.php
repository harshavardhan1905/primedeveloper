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
$route['default_controller'] = 'homecontroller';
$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
$route['dashboard'] = 'homecontroller/dashboard';
$route['index'] = 'homecontroller/index';

$route['location'] = 'homecontroller/location';
$route['addlocation'] = 'homecontroller/addlocation';


$route['menu'] = 'homecontroller/menu';
$route['addmenu'] = 'homecontroller/addmenu';
$route['editcity'] = 'homecontroller/editcity';

$route['pc'] = 'homecontroller/pc';
$route['addpc'] = 'homecontroller/addpc';
$route['types'] = 'homecontroller/types';
$route['addtype'] = 'homecontroller/addtype';


$route['istyles'] = 'homecontroller/istyles';
$route['addistyles'] = 'homecontroller/addistyles';


$route['mstones'] = 'homecontroller/mstones';
$route['addmstones'] = 'homecontroller/addmstones';

$route['sstones'] = 'homecontroller/sstones';
$route['addsstones'] = 'homecontroller/addsstones';

$route['mcolors'] = 'homecontroller/mcolors';
$route['addmcolors'] = 'homecontroller/addmcolors';

$route['scolors'] = 'homecontroller/scolors';
$route['addscolors'] = 'homecontroller/addscolors';

$route['pshapes'] = 'homecontroller/pshapes';
$route['addpshapes'] = 'homecontroller/addpshapes';

$route['metals'] = 'homecontroller/metals';
$route['addmetals'] = 'homecontroller/addmetals';

$route['mshapes'] = 'homecontroller/mshapes';
$route['addmshapes'] = 'homecontroller/addmshapes';

$route['bsizes'] = 'homecontroller/bsizes';
$route['addbsizes'] = 'homecontroller/addbsizes';

$route['rsizes'] = 'homecontroller/rsizes';
$route['addrsizes'] = 'homecontroller/addrsizes';

$route['nlengths'] = 'homecontroller/nlengths';
$route['addnlengths'] = 'homecontroller/addnlengths';

$route['armletssizes'] = 'homecontroller/armletssizes';
$route['addarmletssizes'] = 'homecontroller/addarmletssizes';

$route['waistsizes'] = 'homecontroller/waistsizes';
$route['addwaistsizes'] = 'homecontroller/addwaistsizes';

$route['basemetals'] = 'homecontroller/basemetals';
$route['addbasemetals'] = 'homecontroller/addbasemetals';

$route['pendanttypes'] = 'homecontroller/pendanttypes';
$route['addpendanttypes'] = 'homecontroller/addpendanttypes';

$route['chaintypes'] = 'homecontroller/chaintypes';
$route['addchaintypes'] = 'homecontroller/addchaintypes';

$route['ocs'] = 'homecontroller/ocs';
$route['addocs'] = 'homecontroller/addocs';



$route['products'] = 'homecontroller/products';
$route['addproduct'] = 'homecontroller/addproduct';
$route['editproduct'] = 'homecontroller/editproduct';

$route['coupons'] = 'homecontroller/coupons';
$route['addcoupon'] = 'homecontroller/addcoupon';
$route['editcoupon'] = 'homecontroller/editcoupon';

$route['subcategories'] = 'homecontroller/subcategories';
$route['addsubcategory'] = 'homecontroller/addsubcategory';
$route['editsubcategory'] = 'homecontroller/editsubcategory';


$route['categories'] = 'homecontroller/categories';
$route['addcategory'] = 'homecontroller/addcategory';
$route['editcategory'] = 'homecontroller/editcategory';

$route['users'] = 'homecontroller/users';
$route['edituser'] = 'homecontroller/edituser';

$route['colors'] = 'homecontroller/colors';
$route['editcolor'] = 'homecontroller/editcolor';

$route['orders'] = 'homecontroller/orders';
$route['editorder'] = 'homecontroller/editorder';

$route['featured'] = 'homecontroller/featured';
$route['addfeatured'] = 'homecontroller/addfeatured';

$route['blogs'] = 'homecontroller/blogs';
$route['vendors'] = 'homecontroller/vendors';
$route['addvendor'] = 'homecontroller/addvendor';
$route['editvendor'] = 'homecontroller/editvendor';

$route['admins'] = 'homecontroller/admins';
$route['addadmin'] = 'homecontroller/addadmin';
$route['editadmin'] = 'homecontroller/editadmin';

$route['addbulkproducts'] = 'homecontroller/addbulkproducts';

$route['photos'] = 'homecontroller/photos';
$route['addphoto'] = 'homecontroller/addphoto';


$route['offers'] = 'homecontroller/offers';
$route['addoffer'] = 'homecontroller/addoffer';


$route['cateringmenu'] = 'homecontroller/cateringmenu';
$route['addcateringmenu'] = 'homecontroller/addcateringmenu';

$route['editoffer'] = 'homecontroller/editoffer';
$route['outofstock'] = 'homecontroller/outofstock';

$route['occassions'] = 'homecontroller/occassions';
$route['sizes'] = 'homecontroller/sizes';

$route['addoccassions'] = 'homecontroller/addoccassions';
$route['addsizes'] = 'homecontroller/addsizes';

$route['projects'] = 'homecontroller/projects';

$route['homeprojects'] = 'homecontroller/homeprojects';

$route['registrations'] = 'homecontroller/registrations';
