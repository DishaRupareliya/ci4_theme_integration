<?php 
namespace Config;
$routes = Services::routes();

$lead_status_module_namespace = ['namespace' => 'Example1\Controllers'];

// Lead_status Module Routes
$routes->group('datatable',$lead_status_module_namespace, function($routes) {
  $routes->match(['get','post'], '/', 'Datatable::index');
  $routes->get('save', 'Datatable::insert');
  $routes->match(['get','post'], 'update', 'Datatable::update');
  $routes->get('delete', 'Datatable::delete');
});
