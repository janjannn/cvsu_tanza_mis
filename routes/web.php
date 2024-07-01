<?php
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserScheduleController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DTRFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeController;  // Add this line to import TimeController

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kiosk', function () {
    return view('kiosk');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/organization', function () {
    return view('organization');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/facultymembers', function () {
    return view('facultymembers');
});
Route::get('/map', function () {
    return view('map');
});
Route::get('/org', function () {
    return view('org');
});
Route::get('/academic', function () {
    return view('academic');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/seminars', function () {
    return view('seminars');
});
Route::get('/class', function () {
    return view('class');
});
Route::get('/usersched', function () {
    return view('usersched');
});
Route::get('/email', function () {
    return view('email');
});
//dtr
Route::get('/dtr', function () {
    return view('dtr');
});
// faq routes
Route::get('/faqs', function () {
    return view('faqs');
});



Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');

Route::delete('/reports/{id}', [ReportController::class, 'delete'])->name('reports.delete');


// TimeController routes
Route::get('/timein/{id}', [TimeController::class, 'timeIn']);
Route::get('/timeout/{id}', [TimeController::class, 'timeOut']);
Route::get('/print-dtr/{id}', [TimeController::class, 'printDTR']);

// Dashboard stats route
Route::get('/dashboard/stats', function() {
    // Fetch the required statistics from the database
    $totalFaculties = \App\Models\Faculty::count();
    $totalDesignations = \App\Models\Designation::count();
    $totalReports = \App\Models\Report::count();
    $totalForms = \App\Models\Form::count();

    return response()->json([
        'totalFaculties' => $totalFaculties,
        'totalDesignations' => $totalDesignations,
        'totalReports' => $totalReports,
        'totalForms' => $totalForms,
    ]);
})->name('dashboard.stats');

// Authentication routes
Auth::routes(['verify' => true]);

// Home routes with middleware
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('is_user', 'verified');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
// print route
Route::get('/print_report', [ReportController::class, 'printReport'])->name('print.report')->middleware('is_admin');

//usersched
Route::get('/usersched', [UserScheduleController::class, 'index'])->name('usersched')->middleware('is_admin');

//dtr
Route::get('/dtrform', [DTRFormController::class, 'index'])->name('dtrform')->middleware('is_admin');

// Faculty routes with middleware
Route::get('/faculties', [App\Http\Controllers\ReportController::class, 'viewFaculty'])->name('faculties')->middleware('is_admin');
Route::get('/faculties/delete/{id}', [App\Http\Controllers\ReportController::class, 'deleteFaculty'])->name('delete.faculty')->middleware('is_admin');
Route::post('/faculties/update', [App\Http\Controllers\ReportController::class, 'updateFaculty'])->name('update.faculty')->middleware('is_admin');

// Year routes with middleware
Route::get('/years', [App\Http\Controllers\ReportController::class, 'viewYears'])->name('years')->middleware('is_admin');
Route::get('/years/add', [App\Http\Controllers\ReportController::class, 'addYear'])->name('add.year')->middleware('is_admin');
Route::post('/years/add/save', [App\Http\Controllers\ReportController::class, 'saveYear'])->name('save.year')->middleware('is_admin');
Route::post('/years/update', [App\Http\Controllers\ReportController::class, 'updateYear'])->name('update.year')->middleware('is_admin');

// Designation routes with middleware
Route::get('/designations', [App\Http\Controllers\ReportController::class, 'viewDesignations'])->name('designations')->middleware('is_admin');

// User profile and report routes with middleware
Route::get('/profile', [App\Http\Controllers\ReportController::class, 'viewProfile'])->name('profile')->middleware('is_user', 'verified');
Route::get('/report/view', [App\Http\Controllers\ReportController::class, 'viewSubmittedReport'])->name('report.view')->middleware('is_admin', 'verified');
Route::get('/report/form', [App\Http\Controllers\ReportController::class, 'viewReportForm'])->name('report.form')->middleware('is_user','verified');
Route::post('/report/save', [App\Http\Controllers\ReportController::class, 'saveReport'])->name('report.save')->middleware('is_user', 'verified');
Route::get('/report/view/{id}', [App\Http\Controllers\ReportController::class, 'viewSpecificReport'])->name('report.id')->middleware('is_admin', 'verified');

// ->name('home')->middleware('is_user', 'verified');
// ->name('year')->middleware('is_admin');


