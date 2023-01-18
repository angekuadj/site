<?php

use App\Http\Controllers\AcheterController;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\Etu_ClasseController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

@include_once('admin_web.php');

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');

// Route::redirect('/', '/login');
// Route::get('/home', function () {
//     $routeName = auth()->user() && (auth()->user()->is_student || auth()->user()->is_teacher) ? 'admin.calendar.index' : 'admin.home'; 
//     if (session('status')) {
//         return redirect()->route($routeName)->with('status', session('status'));
//     }

//     return redirect()->route($routeName);
// });

// Auth::routes(['register' => false]);
Auth::routes();
Route::view('welcome', 'welcome')->name('index');
    Route::resource('/dashboard', DasboardController::class);

// Route::get('getEtudiant/{id}', function ($id) {
//     $etudiant = App\Models\Etudiant::where('classe_id',$id)->get();
//     return response()->json($etudiant);
// });


Route::prefix('Journal')->group( function(){
	Route::view('/', 'Journal.list')->name('list');
	// Route::view('blog-single', 'admin.miscellaneous.blog-single')->name('blog-single');
	Route::view('add', 'Journal.add')->name('add');
});


Route::view('panier', 'Evenement.panier')->name('panier');
Route::resource('chat', ChatController::class);
route::get('achete', [ProduitController::class, 'achete'] )->name('produit.achete');
Route::resource('produit', ProduitController::class);
Route::resource('paiement', PaiementController::class);
Route::view('code', 'Evenement.reçu')->name('code');
Route::view('acheter', 'Evenement.acheter')->name('acheter');
Route::resource('/home', HomeController::class);
Route::resource('Prof', ProfController::class);


Route::resource('Classe', ClasseController::class)->middleware(['auth', 'role:Admin']);
Route::resource('Salle', SalleController::class);
Route::resource('Cour', CourController::class);
Route::resource('Filiere', FiliereController::class);
Route::resource('Etudiant', EtudiantController::class);
Route::resource('Calendrier', CalendrierController::class);
Route::resource('Note', NoteController::class);
Route::resource('Aff_eleve', Etu_ClasseController::class);
Route::resource('Stat', StatController::class);
Route::resource('role', RoleController::class);
Route::resource('permission', PermissionController::class);
Route::resource('user', UserController::class);
Route::post('logout', [HomeController::class, 'destroy'])->name('logout');
Route::view('setting', 'user.setting')->name('setting');
Route::view('editprofile', 'user.edit')->name('editprofile');
Route::view('default-layout', 'multiple.default-layout')->name('default-layout');
Route::view('compact-layout', 'multiple.compact-layout')->name('compact-layout');
Route::view('modern-layout', 'multiple.modern-layout')->name('modern-layout');



