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
$route['default_controller'] = 'LoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'LoginController';
$route['logout'] = 'LoginController/logout';
$route['checkLogin'] = 'LoginController/checkLogin';
$route['create-coordinator'] = 'CoordinatorController';
$route['createCoordinator'] = 'CoordinatorController/createCoordinator';
$route['fetch-coordinator-details'] = 'CoordinatorController/fetch_coordinator';
$route['update-coordinator'] = 'CoordinatorController/updateCoordinator';
$route['insurance-companies'] = 'InsuranceController';
$route['insurance-branch'] = 'InsuranceController/viewBranch';
$route['add-insurance-company'] = 'InsuranceController/add_company';
$route['fetch-companies'] = 'InsuranceController/fetch_companies';
$route['update-insurance-company'] = 'InsuranceController/update_insurance';
$route['create-branch-ajax'] = 'InsuranceController/create_branch_ajax';
$route['fetch-branch-data'] = 'InsuranceController/fetch_branch_data';
$route['update-branch-ajax'] = 'InsuranceController/update_branch_ajax';
$route['agents'] = 'AgentController';
$route['fetch-company-branches'] = 'AgentController/fetch_company_branches';
$route['add-agent'] = 'AgentController/add_agent';
$route['fetch-agent-data'] = 'AgentController/fetch_agent_data';
$route['update-agent'] = 'AgentController/update_agent';
$route['intimation-form'] = 'CasesController';
$route['fetch-make'] = 'CasesController/fetch_make';
$route['fetch-model'] = 'CasesController/fetch_model';
$route['fetch-variant'] = 'CasesController/fetch_variant';
$route['fetch-agent-by-branch'] = 'InsuranceController/fetch_agent_by_branch';
$route['manage-field-executive'] = 'VendorController';
$route['add-vendor'] = 'VendorController/add_vendor';
$route['fetch-fe-data'] = 'VendorController/fetch_fe_data';
$route['update-vendor'] = 'VendorController/update_vendor';
$route['fetch-isp-fe'] = 'VendorController/fetch_isp_fe';
$route['create-case'] = 'CasesController/create_case';
$route['update-case'] = 'CasesController/update_case';
$route['new-cases'] = 'CasesController/new_case';
$route['new-cases/(:num)'] = 'CasesController/new_case/$1';
$route['report'] = 'CasesController/report';
$route['report/(:num)'] = 'CasesController/report/$1';
$route['on-hold'] = 'CasesController/on_hold';
$route['on-hold/(:num)'] = 'CasesController/on_hold/$1';
$route['closed-cases'] = 'CasesController/closed_cases';
$route['closed-cases/(:num)'] = 'CasesController/closed_cases/$1';
$route['quality-check-private-vehicle/(:any)'] = 'QualityController/pvt_cars/$1';
$route['quality-check-commercial-vehicle/(:any)'] = 'QualityController/commercial/$1';
$route['quality-check-two-wheeler/(:any)'] = 'QualityController/two_wheeler/$1';
$route['fetch-all-fe'] = 'VendorController/fetch_all_fe';
$route['assign-fe-submit'] = 'VendorController/assign_fe_submit';
$route['executive-assigned-cases'] = 'CasesController/executive_assigned_cases';
$route['executive-assigned-cases/(:num)'] = 'CasesController/executive_assigned_cases/$1';
$route['fetch-all-coordinators'] = 'CoordinatorController/fetch_all_coordinators';
$route['assign-coordinator-submit'] = 'CoordinatorController/assign_coordinator_submit';
$route['worksheet'] = 'CoordinatorController/worksheet';
$route['view-edit-case/(:any)'] = 'CasesController/view_edit_case/$1';
$route['upload-pics'] = 'QualityController/upload_pics';
$route['qc-two-wheeler'] = 'QualityController/qc_two_wheeler';
$route['qc-pvt-cars'] = 'QualityController/qc_pvt_car';
$route['qc-commercial'] = 'QualityController/qc_commercial';
$route['add-make-model'] = 'MakeController';
$route['add-make-model-ajax'] = 'MakeController/add_make_model_ajax';
$route['manage-make-model'] = 'MakeController/manage_make_model';
$route['manage-make-model/(:num)'] = 'MakeController/manage_make_model/$1';
$route['get-order-file'] = 'QualityController/get_order_file';