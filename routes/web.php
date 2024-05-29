<?php

use App\Http\Controllers\defectController;
use Illuminate\Support\Facades\Route;
use App\Models\defect;

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

require_once 'theme-routes.php';


Route::get('product-defects', [
    defectController::class,
    'getData'
]);
Route::get('/barebone', function () {
    return view('barebone', ['title' => 'This is Title']);
});
