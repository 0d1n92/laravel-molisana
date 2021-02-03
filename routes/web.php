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
    include __DIR__."/database.php";
    
    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $pasta) {
    
      if($pasta["tipo"]=="corta") {
        $corte[]= $pasta;
      } elseif ($pasta["tipo"]=="cortissima"){
          $cortissime[]= $pasta;
      } elseif ($pasta["tipo"]=="lunga"){
          $lunghe[]= $pasta;
      }
    }
    
    return view('prodotti', [
      "lunghe"=>$lunghe,
      "corte"=>$corte,
      "cortissime"=>$cortissime
    ]);
});
