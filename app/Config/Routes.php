<?php

use App\Controllers\PublicPages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [PublicPages::class, 'index']);
