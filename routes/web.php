<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Adress;
use Illuminate\Support\Facades\File;
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

Route::get('/',function(){
    $route = "/ru";
    return redirect($route);
    })->where('cat','ru|en|tu');

Route::get('/{cat?}', [Adress\IndexController::class, 'index'])->name('index')->where('cat','ru|en|tu');


Route::get('/{cat}/blog/{blog}', [Adress\ArticleController::class, 'index'])->name('blCat')->where(['cat'=>'ru|en|tu','blog'=>'[\w-]+']);

Route::get('/{cat}/blog/{blog}/{id}', [Adress\ArticleController::class, 'show'])->name('bCatf')->where(['cat'=>'ru|en|tu','blog'=>'[\w-]+','id'=>'[\0-9]+']);





Route::get('/pdf/{id?}',[Adress\IndexController::class, 'generate_pdf'])->name('pdf')->where(['id'=>'[\0-9]+']);

Route::match(['get','post'],'/search/search/', [Adress\SearchController::class, 'store'])->name('obSearch');


Route::resource('/contacts/contacts/',Adress\ContactController::class);


Route::get('/all/{lang?}', [Adress\ArticleController::class, 'all_articles'])->name('allCat');

Route::match(['get','post'],'/comments',[Adress\CommentController::class, 'store'])->name('comments');
// Route::match(['get','post'],'/contacts',[Adress\ContactController::class, 'store'])->name('conts');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

Route::match(['get','post'],'/obuna/obuna',[Adress\ObunaController::class, 'store'])->name('obunaCat');


// Route::group(['middleware' => ['web', 'auth']], function () {
//     Route::get('/laravel-filemanager', [\UniSharp\LaravelFilemanager\Controllers\LfmController::class, 'show']);
//     Route::post('/laravel-filemanager/upload', [\UniSharp\LaravelFilemanager\Controllers\UploadController::class, 'upload']);
//     // list all lfm routes here...
// });


Auth::routes();
Route::match(['get','post'],'prof/update', [Adress\RegisterController::class, 'update'])->name('regPrUp');
Route::get('/profile/{page?}/',[Adress\RegisterController::class, 'edit'])->name('regProf')->where(['page'=>'[\0-9]+']);

Route::middleware(['web'])->prefix('admins')->group(function () {
Route::get('/', [Adress\Admin\IndexController::class, 'index'])->name('adminIndex');

Route::resource('/settings', Adress\Admin\SettingController::class);
Route::get('names', [Adress\Admin\SettingController::class,'names'])->name('setNames');
Route::match(['get','post'],'namesup',[Adress\Admin\SettingController::class,'namesup'])->name('setNamesup');


Route::get('addr', [Adress\Admin\SettingController::class, 'address'])->name('setAddress');
Route::match(['get','post'],'addrup', [Adress\Admin\SettingController::class, 'addressup'])->name('setAddressup');

Route::get('sotnetwork', [Adress\Admin\SettingController::class, 'sotnetwork'])->name('setSotNetwork');
Route::match(['get','post'],'sotnetworkup', [Adress\Admin\SettingController::class, 'sotnetworkup'])->name('setSotNetworkup');

Route::get('files', [Adress\Admin\SettingController::class, 'files'])->name('setFiles');
Route::match(['get','post'],'filesup', [Adress\Admin\SettingController::class, 'filesup'])->name('setFilesUp');

Route::get('rating', [Adress\Admin\SettingController::class, 'rating'])->name('setRating');
Route::match(['get','post'],'ratingup', [Adress\Admin\SettingController::class, 'ratingup'])->name('setRatingUp');

Route::resource('/slider',Adress\Admin\SliderController::class);
Route::resource('/gallery',Adress\Admin\GalleryController::class);

Route::resource('/izox',Adress\Admin\CommentController::class);
Route::resource('/article',Adress\Admin\ArticleController::class);
Route::match(['get','post'],'/articleaaaa', [Adress\Admin\ArticleController::class, 'store']);
Route::resource('/users',Adress\Admin\UsersController::class);
Route::resource('/menus',Adress\Admin\MenusController::class);
Route::resource('/permissions',Adress\Admin\PermissionsController::class);
Route::resource('/roles',Adress\Admin\RoleController::class);


});




/*

Route::get('/', [Adress\Admin\IndexController::class, 'index'])->name('adminIndex');
Route::resource('/xato', Adress\Admin\XatolarController::class);
Route::resource('/izox',Adress\Admin\CommentController::class);
Route::resource('/contact',Adress\Admin\ContactController::class);
Route::resource('/qabul',Adress\Admin\QabullController::class);

Route::resource('/karta',Adress\Admin\KartaController::class);

Route::match(['get','post'],'/qdoc/{id}',[Adress\Admin\QabullController::class,'qdoc'])->name('qdoc')->where(['id'=>'[\0-9]+']);
Route::match(['get','post'],'/qpdf/{id}',[Adress\Admin\QabullController::class,'qpdf'])->name('qpdf')->where(['id'=>'[\0-9]+']);
Route::resource('/vqabul',Adress\Admin\MurojatController::class);
Route::match(['get','post'],'/xdoc/{id}',[Adress\Admin\MurojatController::class,'xdoc'])->name('xdoc')->where(['id'=>'[\0-9]+']);
Route::match(['get','post'],'/vpdf/{id}',[Adress\Admin\MurojatController::class,'vpdf'])->name('vpdf')->where(['id'=>'[\0-9]+']);


Route::resource('/diplom',Adress\Admin\DiplomlarController::class);
Route::match(['get','post'],'/ddoc/{id}',[Adress\Admin\DiplomlarController::class,'ddoc'])->name('ddoc')->where(['id'=>'[\0-9]+']);
Route::match(['get','post'],'/dpdf/{id}',[Adress\Admin\DiplomlarController::class,'dpdf'])->name('dpdf')->where(['id'=>'[\0-9]+']);


Route::resource('/settings', Adress\Admin\SettingController::class);
Route::get('names', [Adress\Admin\SettingController::class,'names'])->name('setNames');

Route::match(['get','post'],'namesup',[Adress\Admin\SettingController::class,'namesup'])->name('setNamesup');
Route::get('address', [Adress\Admin\SettingController::class,'address'])->name('setAddress');
Route::match(['get','post'],'addressup',[Adress\Admin\SettingController::class,'addressup'])->name('setAddressup');
Route::get('sotnetwork', [Adress\Admin\SettingController::class,'sotnetwork'])->name('setSotNetwork');
Route::match(['get','post'],'sotnetworkup',[Adress\Admin\SettingController::class,'sotnetworkup'])->name('setSotNetworkup');
Route::get('files', [Adress\Admin\SettingController::class,'files'])->name('setFiles');
Route::match(['get','post'],'filesup', [Adress\Admin\SettingController::class,'filesup'])->name('setFilesUp');
Route::get('rating', [Adress\Admin\SettingController::class,'rating'])->name('setRating');
Route::match(['get','post'],'ratingup',[Adress\Admin\SettingController::class,'ratingup'])->name('setRatingUp');
Route::get('fon', [Adress\Admin\SettingController::class,'fon'])->name('setFon');
Route::match(['get','post'],'fonup', [Adress\Admin\SettingController::class,'fonup'])->name('setFonUp');

Route::resource('/rasm',Adress\Admin\FilesController::class);
Route::post('/rasms',[Adress\Admin\FilesController::class,'store']);
Route::resource('/poll',Adress\Admin\PollController::class);


});
*/