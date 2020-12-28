<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['appointment']= 'Welcome/appointment_request';
$route['purchase-medicine']= 'Welcome/purchase_medicine';
$route['contact-us']= 'Welcome/contact_us';


$route['dashboard'] = 'admin_controller/dashboard';
$route['logout'] = 'admin_controller/logout';


$route['admin_login'] = 'admin_controller/admin_login_control';

$route['register-view'] = 'admin_controller/admin_register_form';

$route['admin_signup'] = 'admin_controller/admin_signup_control';

$route['add-medcine'] = 'admin_controller/add_medicine';

$route['appoint-table'] = 'admin_controller/appoint_table';
$route['medicine-table'] = 'admin_controller/medicine_table';
$route['contact-manage'] = 'admin_controller/contact';

//add medicine dashboard

$route['save-medicine'] = 'admin_controller/save_medicine';
$route['manage-medicine'] = 'admin_controller/manage_medicine';
$route['edit-medicine/(.+)'] = 'admin_controller/edit_medicine/$1';
$route['delete-medicine/(.+)'] = 'admin_controller/delete_medicine/$1';
$route['edit-medicine-by-id'] = 'admin_controller/edit_medi_by_id';

