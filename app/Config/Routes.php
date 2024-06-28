<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product-list', 'productList::index');
$routes->get('/product-list-repaint', 'productList::repaintIndex');
$routes->get('/product-list-cleaning', 'productList::cleaningIndex');
$routes->get('/product-list-repair', 'productList::repairIndex');
$routes->get('/product-detail/(:num)', 'productDetail::index/$1');


$routes->get('/history-orders', 'historyOrders::index', ['filter' => 'khususMember']);
$routes->post('history-orders/simpan', 'historyOrders::simpan', ['filter' => 'khususMember']);
$routes->get('history-orders/edit/(:num)', 'historyOrders::edit/$1', ['filter' => 'khususMember']);

$routes->post('/order', 'ProductDetail::order', ['filter' => 'khususMember']);

$routes->get('/login', 'login::index');
$routes->post('/login', 'login::index');


$routes->get('/register', 'register::index');
$routes->post('/register', 'register::submit');


$routes->get('/logout', 'logout::logout');


$routes->get('/confirmation/(:num)', 'confirmation::index/$1', ['filter' => 'khususMember']);



$routes->get('/contact', 'contact::index');
$routes->post('/contact/sendMessage', 'contact::sendMessage');


$routes->get('/about', 'about::index');

$routes->get('/profiles', 'profiles::index',['filter' => 'khususMember']);
$routes->post('/profiles/update', 'profiles::update', ['filter' => 'khususMember']);