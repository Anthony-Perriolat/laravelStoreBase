<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AnnouncementSaveController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryAnnouncementController;
use App\Http\Controllers\CategoryArticlesController;
use App\Http\Controllers\CommentaryArticleController;
use App\Http\Controllers\CommentaryProviderController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ServiceProviderController;
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

Route::get('/', [Controller::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('customer', CustomerController::class);
Route::resource('serviceProvider', ServiceProviderController::class);
Route::resource('categoryArticles', CategoryArticlesController::class);
Route::resource('article', ArticleController::class);
Route::resource('commentArticle', CommentaryArticleController::class);
Route::resource('categoryAnnouncement', CategoryAnnouncementController::class);
Route::resource('announcement', AnnouncementController::class);
//Route::resource('announcement.announcementSave', AnnouncementSaveController::class)->shallow(); prochainement
Route::resource('experience', ExperienceController::class);
Route::resource('serviceProvider.commentaryProvider', CommentaryProviderController::class)->shallow();

require __DIR__.'/auth.php';

