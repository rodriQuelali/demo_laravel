<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;

use App\Http\Controllers\LoginController;


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


Route::get('/', LoginController::class);
Route::post('home', HomeController::class)->name('home');


// Route::get('users/{id}', function ($id) {
//     return view('Bienvenido a la pagina web');
// });

//------TERCERO grupo de rutas
Route::controller(CursosController::class)->group(function () {

    Route::get('curso', 'index')->name('curso.index');
    Route::get('curso/create', 'create')->name('curso.create');
    Route::post('curso', 'store')->name('curso.store');
    Route::get('curso/{curso}', 'show')->name('curso.show');
    //Route::get('curso/{curso}', 'edit')->name('curso.edit');
});



// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos', 'index')->name('cursos.index'); // Listar todos los cursos
//     Route::get('cursos/create', 'create')->name('cursos.create'); // Mostrar formulario de creación
//     Route::post('cursos', 'store')->name('cursos.store'); // Almacenar un nuevo curso
//     Route::get('cursos/{curso}', 'show')->name('cursos.show'); // Mostrar un curso específico
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit'); // Mostrar formulario de edición
//     Route::put('cursos/{curso}', 'update')->name('cursos.update'); // Actualizar un curso existente
//     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy'); // Eliminar un curso
// });


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

