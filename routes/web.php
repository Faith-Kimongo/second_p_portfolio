<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Company\JobController as CompanyJobController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MyhustleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavedJobController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TalentController;
use App\Http\Livewire\Company\Documents;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Company\Register as CompanyRegister;
use App\Models\Category;
use App\Models\Job;
use App\Models\Myhustle;

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
    return view('welcome',[
        'jobs'=>Job::latest()->take(4)->get(),
        'categories'=>Category::all()
    ]);
})->name('home');

// Test
Route::get('/layout', function(){
    return  view('test');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard',[


            // Get the user skills categories
            $user_categories=Auth::user()->skills->pluck('category_id')->unique(),

            // Get the jobs that match their skills categories

            //send jobs that are tailored to their skills
            'jobs'=>Job::whereIn('category_id',$user_categories)->paginate(10),
            'total'=>Job::whereIn('category_id',$user_categories)->get()->count(),
            'pinned_job'=>Job::whereIn('category_id',$user_categories)->first(),
            'savedjobs'=>Auth::user()->savedjobs->pluck('id')->toArray(),
            'categories'=>Category::all()

        ]);
    })->name('dashboard');
});

/* 
User Profile
-> Bio
-> Education Background
-> Work Experience
-> Skillset
-> Resume'
*/


// Search

Route::get('/search',[JobController::class,'search'])->name('search');

// userprofile//////////
// education
Route::get('/user-profile',[ProfileController::class,'index'])->name('user-profile');
Route::post('/user-profile/uploadcv',[ProfileController::class,'uploadcv'])->name('user-profile.uploadcv');
Route::get('/user-profile/downloadcv',[ProfileController::class,'downloadcv'])->name('user-profile.downloadcv');

Route::get('/user-profile/education-background/edit',[ProfileController::class,'educationCreate'])->name('profile.education.create');
Route::post('/user-profile/education-background/edit',[ProfileController::class,'educationStore'])->name('education.store');
Route::get('/my-jobs',[ProfileController::class,'myjobs'])->name('myjobs');
Route::get('/my-hustles',[ProfileController::class,'myhustles'])->name('myhustles');
// workexperience
Route::get('/user-profile/work-experience/edit',[ProfileController::class,'workexperienceCreate'])->name('profile.workexp.create');
Route::post('/user-profile/work-experience/edit',[ProfileController::class,'workexperienceStore'])->name('workexp.store');


// Experience
Route::resource('experience',ExperienceController::class);
Route::resource('skills', SkillController::class);
Route::post('skills/save',[ProfileController::class,'skills'])->name('profile.skills.save');
Route::get('job/{job}/applications',[JobController::class,'jobapplications'])->name('jobapplications');

Route::get('job/applications',[JobController::class,'applications'])->name('job.applications');
Route::get('job/applications/{application}',[ApplicationController::class,'show'])->name('job.application.show');

Route::resource('job',JobController::class);
Route::get('job/apply/{job}',[JobController::class,'apply'])->name('job.apply');
Route::post('job/apply/{job}',[JobController::class,'applyStore'])->name('job.apply.store');


// Talent
Route::get('/talents',[TalentController::class,'index'])->name('talents');
Route::get('/talent/{talent}/profile',[TalentController::class,'show'])->name('talents.show');
// Myhustle
Route::resource('myhustle',MyhustleController::class);
Route::post('/myhustle/comments/{myhustle}', [CommentController::class,'store'])->name('comments.store');
Route::post('/myhustle/{myhustle}/like',[MyhustleController::class,'like'])->name('myhustle.like');
// Route::get('/myhustle/category/{category}',[MyhustleController::class,'categoryhustles'])->name('hustle.category');
// company///////////
// company routes
Route::resource('companies',CompanyController::class);
Route::get('company/register',CompanyRegister::class);
Route::get('company/documents',Documents::class);
Route::resource('company_jobs',CompanyJobController::class);
Route::get('/company/jobs/{job}',[CompanyJobController::class,'applicants']);
Route::post('/company/jobs',[CompanyJobController::class,'shortlist'])->name('shortlist');
Route::post('/company/jobs/reject',[CompanyJobController::class,'reject'])->name('reject');
Route::resource('saved-jobs',SavedJobController::class);
