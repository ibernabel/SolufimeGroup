<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', function () {
  $links = [
      ['url' => '/', 'text' => 'Inicio', 'selected' => true],
      ['url' => '#', 'text' => 'Servicios', 'selected' => false],
      ['url' => '#', 'text' => 'Nosotros', 'selected' => false],
      ['url' => '#', 'text' => 'Contacto', 'selected' => false],
  ];

  $hero = [
    'title' => 'The Greatest <br> Journey Of Online <br> Payment.',
    'description' => 'With TailGrids, business and students thrive together. Business can perfectly match their staffing to changing demand throughout the dayed.',
    'cta' => 'Get Started',
    'url' => '#',
  ];

  return view('index', compact('links', 'hero'));
});