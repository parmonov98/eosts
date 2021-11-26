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

   $validator = Validator::make($request->except('_token'), [
                'package' => 'required',
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|min:9|max:17',
                'message' => 'required',
    ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
            // return redirect()->back()->with(['errors'=>$validator->errors()->all()]);
        }else{
Notification::route('message', env('TELEGRAM_USER_ID'))->notify(new ExampleNotification(json_encode($d)));

$item = new Requ; $item->name = $d['name']; $item->name = $d['name'];$item->phone = $d['phone'];$item->email = $d['email'];
$item->package = $d['package'];$item->message = $d['message'];$item->save();

            return response()->json(['success'=>'Ваша сообщения отправлено']); }
    })->name('message');

}


// Route::post('application',[Adress\TelegramController::class,'application'])->name('application');

Route::get('/pronas',[Adress\ObunaController::class,'pronas'])->name('pronas');


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


Auth::routes();
Route::match(['get','post'],'prof/update', [Adress\RegisterController::class, 'update'])->name('regPrUp');
Route::get('/profile',[Adress\RegisterController::class, 'edit'])->name('regProf')->where(['page'=>'[\0-9]+']);
Route::match(['get','post'],'/repeatpass', [Adress\RegisterController::class, 'repeatpass'])->name('regRepeatPass');

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

Route::get('question', [Adress\Admin\SettingController::class, 'question'])->name('setQuestion');
Route::match(['get','post'],'questionup', [Adress\Admin\SettingController::class, 'questionup'])->name('setQuestionUp');

Route::get('select', [Adress\Admin\SettingController::class, 'select'])->name('setSelect');
Route::match(['get','post'],'selectup', [Adress\Admin\SettingController::class, 'selectup'])->name('setSelectUp');

Route::get('onas', [Adress\Admin\SettingController::class, 'onas'])->name('setOnas');
Route::match(['get','post'],'onasup', [Adress\Admin\SettingController::class, 'onasup'])->name('setOnasUp');

Route::get('vebor', [Adress\Admin\SettingController::class, 'vebor'])->name('setVeboros');
Route::match(['get','post'],'veborup', [Adress\Admin\SettingController::class, 'veborup'])->name('setVeborUp');

Route::get('cachistva', [Adress\Admin\SettingController::class, 'cachistva'])->name('setCachistva');
Route::match(['get','post'],'cachistvaup', [Adress\Admin\SettingController::class, 'cachistvaup'])->name('setCachistvaUp');

Route::get('osobiy', [Adress\Admin\SettingController::class, 'osobiy'])->name('setOsobiy');
Route::match(['get','post'],'osobiyup', [Adress\Admin\SettingController::class, 'osobiyup'])->name('setOsobiyUp');

Route::get('competent', [Adress\Admin\SettingController::class, 'competent'])->name('setCompetent');
Route::match(['get','post'],'competentup', [Adress\Admin\SettingController::class, 'competentup'])->name('setCompetentUp');

Route::get('nakil', [Adress\Admin\SettingController::class, 'nakil'])->name('setNakils');
Route::delete('nakildel', [Adress\Admin\SettingController::class, 'nakildel'])->name('setNakildel');
Route::match(['get','post'],'nakilsav', [Adress\Admin\SettingController::class, 'nakilsav'])->name('setNakilSav');


Route::get('vopraos', [Adress\Admin\SettingController::class, 'vopraos'])->name('setVopraos');
Route::delete('vopdel', [Adress\Admin\SettingController::class, 'vopdel'])->name('setVopdelUp');
Route::match(['get','post'],'vopraosup', [Adress\Admin\SettingController::class, 'vopraosup'])->name('setVopraosUp');

Route::resource('otziv', Adress\Admin\OtziviController::class);

Route::resource('requ', Adress\Admin\RequController::class);

Route::resource('/employee',Adress\Admin\EmployeeController::class);


Route::resource('/uslug',Adress\Admin\UslugController::class);

Route::resource('/slider',Adress\Admin\SliderController::class);

Route::resource('/gallery',Adress\Admin\GalleryController::class);
Route::resource('/contact',Adress\Admin\ContactController::class);
// Route::resource('/izox',Adress\Admin\CommentController::class);
// Route::resource('/article',Adress\Admin\ArticleController::class);
// Route::match(['get','post'],'/articleaaaa', [Adress\Admin\ArticleController::class, 'store']);
Route::resource('/users',Adress\Admin\UsersController::class);
Route::resource('/menus',Adress\Admin\MenusController::class);
Route::resource('/permissions',Adress\Admin\PermissionsController::class);
Route::resource('/roles',Adress\Admin\RoleController::class);


});


