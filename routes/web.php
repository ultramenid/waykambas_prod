<?php

use App\Http\Controllers\AdddiaryController;
use App\Http\Controllers\AZrestorationController;
use App\Http\Controllers\CmsAzController;
use App\Http\Controllers\CmsDiaryController;
use App\Http\Controllers\CmsStoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageRawakadutController;
use App\Http\Controllers\PageSilvikulturController;
use App\Http\Controllers\PageSiteplanController;
use App\Http\Controllers\PageWaykambasController;
use App\Http\Controllers\PageWhoweareController;
use App\Http\Controllers\RawakadutController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SilvikulturController;
use App\Http\Controllers\SiteplanController;
use App\Http\Controllers\StoryIlalangController;
use App\Http\Controllers\WaykambasController;
use App\Http\Controllers\WhowheareController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
// //https force https

// URL::forceScheme('https');

Route::redirect('/', '/id');

// frontend
Route::group(['prefix' => '{lang}'], function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('/whowheare', [WhowheareController::class, 'index'])->name('whoweare');
    Route::get('/waykambas', [WaykambasController::class, 'index'])->name('waykambas');
    Route::get('/rawakadut', [RawakadutController::class, 'index'])->name('rawakadut');
    Route::get('/azrestoration', [AZrestorationController::class, 'index'])->name('azrestoration');
    Route::get('/diary', [DiaryController::class, 'index'])->name('diary');

    // Route::get('/siteplan', [SiteplanController::class, 'index'])->name('siteplan');
    // Route::get('/silvikultur', [SilvikulturController::class, 'index'])->name('silvikultur');



    // story
    Route::get('/Waykambas_tenggelam_dalam_balutan_ilalang', [StoryIlalangController::class, 'index'])->name('Waykambas_tenggelam_dalam_balutan_ilalang');


});


//backend
//if has session redirect to dashboard
Route::group(['middleware' => 'checkSession'], function () {
    Route::get('/cms/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/cms/settings', [SettingsController::class, 'index'])->name('settings');
    Route::get('/cms/pagewhoweare', [PageWhoweareController::class, 'index']);
    Route::get('/cms/pagewaykambas', [PageWaykambasController::class, 'index']);
    Route::get('/cms/pagerawakadut', [PageRawakadutController::class, 'index']);
    Route::get('/cms/pagesiteplan', [PageSiteplanController::class, 'index']);
    Route::get('/cms/pagesilvikultur', [PageSilvikulturController::class, 'index']);
    Route::get('/cms/cmsdiary', [CmsDiaryController::class, 'index']);
    Route::get('/cms/adddiary', [CmsDiaryController::class, 'addDiary']);
    Route::get('/cms/cmsaz', [CmsAzController::class, 'index']);
    Route::get('/cms/addaz', [CmsAzController::class, 'addAz']);
    Route::get('/cms/cmsaz/{id}', [CmsAzController::class, 'editAz']);
    Route::get('/cms/diary/{id}', [CmsDiaryController::class, 'editDiary']);
    Route::get('/cms/cmsstory', [CmsStoryController::class, 'index']);
    Route::get('/cms/addstory', [CmsStoryController::class, 'addStory']);
    Route::get('/cms/story/{id}', [CmsStoryController::class, 'editStory']);
    Route::group(['prefix' => '/cms/laravel-filemanager', 'middleware' => 'checkSession'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

});

//if there is no session , redirect to login page
Route::group(['middleware' => 'hashsession'], function () {
    Route::get('cms/login', [LoginController::class, 'index'])->name('login');
});
//route logout
Route::get('/cms/page/logout', function () {
    session()->flush();
    return redirect('/cms/login');
});

Route::any('{query}', function() { return redirect('/'); })->where('query', '.*');


// Route::get('/', function () {
//     return view('welcome');
// });
