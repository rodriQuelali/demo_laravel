<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//antes
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class);

// Route::get('users/{id}', function ($id) {
//     return view('Bienvenido a la pagina web');
// });

//------TERCERO grupo de rutas
Route::controller(CursosController::class)->group(function () {
    Route::get('curso', 'index');
    Route::get('curso/create', 'create');
    Route::get('curso/{curso}', 'show');
});

//-----SEGUNDO
// Route::get('curso', [CursosController::class, 'index']);
// Route::get('curso/create', [CursosController::class, 'create']);
// Route::get('curso/{curso}', [CursosController::class, 'show']);

//como llamar a controlador en versiones anteriores.
//Route::get('curso', 'HomeController');
//Route::get('curso', 'CursosController@index');



//-------------PRIMERO 
//creando rutas
// Route::get('curso', function(){
//     return 'rodrigo curso';
// });



// Route::get('curso/create', function () {
//     return "creando cursos";
// });

// //paso de parametros como GET
// Route::get('curso/{curso}', function ($curso){
//     return "curos de:$curso"; 
//  });

 //pasar mas datos o variables en url

// Route::get('curso/{curso}/{categoria}', function ($curso, $categoria) {
//     return "bienvenido al curso $curso, de la categoria $categoria";
    
// });

//para no crear varia variables
    // Route::get('curso/{curso}/{categoria?}', function ($curso, $categoria = null) {
    //     if($categoria){
    //         return "bienvenido al curso $curso, de la categoria $categoria";
    //     }else{
    //         return "bienvenido al curso $curso";
    //     }
        
    // });

