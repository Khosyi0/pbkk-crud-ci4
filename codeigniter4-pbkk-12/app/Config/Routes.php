<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('animelist', 'AnimeList::index');

$routes->get('animelist/add', 'AnimeList::add');

$routes->get('animelist/edit/(:any)', 'AnimeList::edit/$1');

$routes->post('animelist/adds', 'AnimeList::adds');

$routes->post('animelist/update', 'AnimeList::update');

$routes->get('animelist/delete/(:any)', 'AnimeList::delete/$1');
