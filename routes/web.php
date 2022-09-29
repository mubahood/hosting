<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_GET['admin'])) {
        if ($_GET['admin'] == 1) {
            $_SESSION['admin'] = 1;
        }
    }

    if (isset($_SESSION['admin'])) {
        return view('index');
    } else {
        return view('soon');
    }
});
