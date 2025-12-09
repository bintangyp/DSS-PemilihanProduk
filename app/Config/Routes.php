<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::halamanadmin');
$routes->get('/kriteria', 'Home::kriteria');
$routes->get('/suplier', 'Home::suplier');
$routes->get('/produk', 'Home::produk');
$routes->get('/kategori-produk', 'Home::kategoriProduk');
$routes->post('/admin/updateKategori', 'Home::updateKategori');
