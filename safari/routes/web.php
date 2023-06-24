<?php

use Illuminate\Support\Facades\Route;
use App\Models\job_posting;
use App\Http\Controllers\jobPostingController;
use App\Http\Controllers\languageController;
use Illuminate\Support\Facades\App;

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

Route::middleware('auth')->group(function () {
});

Route::get('/',function(){
    return redirect(route('setLanguageFirst',['lang' => 'es']));
})->name('index');

Route::view('job_postings','job_postings', [ 'postings' => job_posting::All() ])->name('job_postings');


// Route::view('/index','index')->name('index');


Route::get('job_postings/detail/{id}/{status?}', [jobPostingController::class, 'posting_detail'])->middleware(['auth'])->name('job_posting.detail');

Route::get('job_postings/posting/{id}', [jobPostingController::class, 'posting_landing'])->name('job_posting.landing');

Route::post('job_postings/apply', [jobPostingController::class, 'posting_apply'])->name('job_posting.apply');

Route::post('job_postings/search', [jobPostingController::class, 'posting_search'])->name('job_postings.search');

Route::post('dashboard/search', [jobPostingController::class, 'dashboard_search'])->name('job_postings.dashboard_search');

Route::post('job_postings/create', [jobPostingController::class, 'create_posting'])->middleware(['auth'])->name('job_posting.create');

Route::view('job_postings/create','create-posting')->name('job_posting.create')->middleware(['auth']);

Route::post('job_postings/edit',[jobPostingController::class, 'edit_posting'] )->middleware(['auth'])->name('job_posting.edit');

Route::post('job_postings/edit_user_status',[jobPostingController::class, 'edit_user_status'] )->middleware(['auth'])->name('job_posting.edit_user_status');

Route::post('job_postings/delete',[jobPostingController::class, 'delete_posting'] )->middleware(['auth'])->name('job_posting.delete');

Route::post('job_postings/delete_applicant',[jobPostingController::class, 'delete_applicant'] )->middleware(['auth'])->name('job_posting.delete_applicant');

Route::post('job_postings/posting_change',[jobPostingController::class, 'posting_change'] )->middleware(['auth'])->name('job_posting.posting_change');



// Route::get('/', function () {
//     return view('welcome');
// });

// });

Route::get('/dashboard', function () {
    return view('dashboard', ['postings' => job_posting::All()]);
})->middleware(['auth'])->name('dashboard');

Route::post('/dashboard/status_search', [jobPostingController::class, 'status_search'])->name('dashboard.status_search');

// Route::post('/dashboard/status_search_2', [jobPostingController::class, 'status_search_2'])->name('dashboard.status_search_2');

require __DIR__.'/auth.php';

// Route::get('/{setLang}', [languageController::class,'setLanguage'])->name('setLanguage');
Route::get('/changeLang/{lang}', [languageController::class,'setLanguage'])->name('setLanguage');
Route::get('/{lang}', [languageController::class,'setLanguageFirst'])->name('setLanguageFirst');


//->middleware(['auth'])