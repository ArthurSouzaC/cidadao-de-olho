<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', 'WebServicesController@home');
Route::get('/redes_sociais', 'WebServicesController@socialMediaIndex');
Route::get('/verbas_ind/2019/{month}', 'WebServicesController@ReimbursementIndex');