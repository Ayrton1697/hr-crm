<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobPosting;
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

Route::get('/new',function(){
    return view('new-index');
})->name('new-index');

Route::view('JobPostings','JobPostings', ['JobPostings' => JobPosting::All() ])->name('JobPostings');

// Route::view('/index','index')->name('index');


Route::get('JobPostings/detail/{id}/{status?}', [jobPostingController::class, 'posting_detail'])->middleware(['auth'])->name('JobPosting.detail');

Route::get('JobPostings/posting/{id}', [jobPostingController::class, 'posting_landing'])->name('JobPosting.landing');

Route::post('JobPostings/apply', [jobPostingController::class, 'posting_apply'])->name('JobPosting.apply');

Route::post('JobPostings/search', [jobPostingController::class, 'posting_search'])->name('JobPostings.search');

Route::post('dashboard/search', [jobPostingController::class, 'dashboard_search'])->name('JobPostings.dashboard_search');

Route::post('JobPostings/create', [jobPostingController::class, 'create_posting'])->middleware(['auth'])->name('JobPosting.create');

Route::view('JobPostings/create','create-posting')->name('JobPosting.create')->middleware(['auth']);

Route::post('JobPostings/edit',[jobPostingController::class, 'edit_posting'] )->middleware(['auth'])->name('JobPosting.edit');

Route::post('JobPostings/edit_user_status',[jobPostingController::class, 'edit_user_status'] )->middleware(['auth'])->name('JobPosting.edit_user_status');

Route::post('JobPostings/delete',[jobPostingController::class, 'delete_posting'] )->middleware(['auth'])->name('JobPosting.delete');

Route::post('JobPostings/delete_applicant',[jobPostingController::class, 'delete_applicant'] )->middleware(['auth'])->name('JobPosting.delete_applicant');

Route::post('JobPostings/posting_change',[jobPostingController::class, 'posting_change'] )->middleware(['auth'])->name('JobPosting.posting_change');



// Route::get('/', function () {
//     return view('welcome');
// });

// });
Route::get('/appointment', [jobPostingController::class, 'getAppointments'])->name('appointment');

Route::get('/dashboard', function () {
    return view('dashboard', ['postings' => JobPosting::All()]);
})->middleware(['auth'])->name('dashboard');

Route::post('/dashboard/status_search', [jobPostingController::class, 'status_search'])->name('dashboard.status_search');

// Route::post('/dashboard/status_search_2', [jobPostingController::class, 'status_search_2'])->name('dashboard.status_search_2');

require __DIR__.'/auth.php';

// Route::get('/{setLang}', [languageController::class,'setLanguage'])->name('setLanguage');
Route::get('/changeLang/{lang}', [languageController::class,'setLanguage'])->name('setLanguage');

Route::get('/{lang}', [languageController::class,'setLanguageFirst'])->name('setLanguageFirst');

//->middleware(['auth'])