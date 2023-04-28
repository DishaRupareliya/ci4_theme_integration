<?php 
namespace Config;
$routes = Services::routes();

$lead_status_module_namespace = ['namespace' => 'Example1\Controllers'];

// Lead_status Module Routes
$routes->group('datatable',$lead_status_module_namespace, function($routes) {
  $routes->match(['get','post'], '/', 'DatatableDemo::index');
  $routes->get('save', 'DatatableDemo::insert');
  $routes->match(['get','post'], 'update', 'DatatableDemo::update');
  $routes->get('delete', 'DatatableDemo::delete');
  $routes->post('getdata', 'DatatableDemo::ajaxDatatable');
});
