<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Adress;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ExampleNotification;
use Illuminate\Http\Request;
use App\Models\Requ;

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


Route::get('/uslug/',[Adress\ObunaController::class,'uslug'])->name('uslug');
Route::get('/uslugi/{id}',[Adress\ObunaController::class,'show'])->name('ushow');


// Route::get('/{cat}/blog/{blog}', [Adress\ArticleController::class, 'index'])->name('blCat')->where(['cat'=>'ru|en|tu','blog'=>'[\w-]+']);

// Route::get('/{cat}/blog/{blog}/{id}', [Adress\ArticleController::class, 'show'])->name('bCatf')->where(['cat'=>'ru|en|tu','blog'=>'[\w-]+','id'=>'[\0-9]+']);

if(Auth::check()){
Route::post('/message',[Adress\TelegramController::class,'message'])->name('message');
}else{
Route::post('/message', function (Request $request) {$d = $request->except('_token');

   
if($d['name']==null || $d['number']==null || $d['email']==null || $d['package']==null || $d['text']==null ){
    return redirect()->back()->with('error', 'Вы не заполнили всех полей'); 
}else{
Notification::route('message', env('TELEGRAM_USER_ID'))->notify(new ExampleNotification(json_encode($d)));

$item = new Requ; $item->name = $d['name']; $item->name = $d['name'];$item->number = $d['number'];$item->email = $d['email'];
$item->package = $d['package'];$item->text = $d['text'];$item->save();

            return redirect()->back()->with('success', 'Ваша сообщения отправлено'); }
    })->name('message');

}




Route::get('/pronas',[Adress\ObunaController::class,'pronas'])->name('pronas');

Route::get('/pdf/{id?}',[Adress\IndexController::class, 'generate_pdf'])->name('pdf')->where(['id'=>'[\0-9]+']);


Route::match(['get','post'],'/search/search/', [Adress\SearchController::class, 'store'])->name('obSearch');


Route::resource('/contacts/contacts/',Adress\ContactController::class);
Route::get('export-excel-csv-file/{slug}', [Adress\Admin\RequController::class, 'exportExcelCSV']);

// Route::get('/all/{lang?}', [Adress\ArticleController::class, 'all_articles'])->name('allCat');

Route::match(['get','post'],'/comments',[Adress\CommentController::class, 'store'])->name('comments');
Route::match(['get','post'],'/contacts',[Adress\ContactController::class, 'store'])->name('conts');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

Route::match(['get','post'],'/obuna/obuna',[Adress\ObunaController::class, 'store'])->name('obunaCat');


// Route::group(['middleware' => ['web', 'auth']], function () {
//     Route::get('/laravel-filemanager', [\UniSharp\LaravelFilemanager\Controllers\LfmController::class, 'show']);
//     Route::post('/laravel-filemanager/upload', [\UniSharp\LaravelFilemanager\Controllers\UploadController::class, 'upload']);
//     // list all lfm routes here...
// });

Route::get('mpdf/{id}', [Adress\IndexController::class, 'pdf'])->name('mpdf')->where(['id'=>'[\0-9]+']);


Auth::routes();
Route::match(['get','post'],'prof/update', [Adress\RegisterController::class, 'update'])->name('regPrUp');
Route::get('/profile',[Adress\RegisterController::class, 'edit'])->name('regProf')->where(['page'=>'[\0-9]+']);

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

Route::get('onas', [Adress\Admin\SettingController::class, 'onas'])->name('setOnas');
Route::match(['get','post'],'onasup', [Adress\Admin\SettingController::class, 'onasup'])->name('setOnasUp');

Route::get('vebor', [Adress\Admin\SettingController::class, 'vebor'])->name('setVeboros');
Route::match(['get','post'],'veborup', [Adress\Admin\SettingController::class, 'voborup'])->name('setVeborUp');

Route::get('vopraos', [Adress\Admin\SettingController::class, 'vopraos'])->name('setVopraos');
Route::match(['get','post'],'vopraosup', [Adress\Admin\SettingController::class, 'vopraosup'])->name('setVopraosUp');



Route::resource('requ', Adress\Admin\RequController::class);

Route::resource('/employee',Adress\Admin\EmployeeController::class);


Route::resource('/uslug',Adress\Admin\UslugController::class);

Route::resource('/slider',Adress\Admin\SliderController::class);

Route::resource('/gallery',Adress\Admin\GalleryController::class);
Route::resource('/contact',Adress\Admin\ContactController::class);
Route::resource('/izox',Adress\Admin\CommentController::class);
// Route::resource('/article',Adress\Admin\ArticleController::class);
// Route::match(['get','post'],'/articleaaaa', [Adress\Admin\ArticleController::class, 'store']);
Route::resource('/users',Adress\Admin\UsersController::class);
Route::resource('/menus',Adress\Admin\MenusController::class);
Route::resource('/permissions',Adress\Admin\PermissionsController::class);
Route::resource('/roles',Adress\Admin\RoleController::class);


});


