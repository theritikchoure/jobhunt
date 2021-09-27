<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmpFPController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Models\Internship;
use App\Models\Student;
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

// Route::get('test/email', function(){
  
//     $send_mail = 'iasritikchourasiya@gmail.com';
  
//     dispatch(new App\Jobs\SendEmailJob($send_mail))->delay(now());
  
//     dd('send mail successfully !!');
// });

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');


// Route::get('/test', function () {


//     $int = Internship::where('employer_id', '=', session('LoggedEmp'))->get();

//     return view('test', compact('int'));
// // })->name('test');

// Route::get('/toastr', function () {
//     return view('toastr')->with('success', 'hello world');
// });

Route::get('sendbasicemail',[MailController::class, 'basic_email']);
Route::get('sendhtmlemail',[MailController::class, 'html_email']);
Route::get('sendattachmentemail',[MailController::class, 'attachment_email']);



// ***************  Website Basic Page Routes (start)  *********************************//
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('about-us', [PageController::class, 'about'])->name('about');
Route::get('contact-us', [PageController::class, 'contact'])->name('contact');
Route::get('faq', [PageController::class, 'faq'])->name('faq');
Route::get('how-it-work', [PageController::class, 'how_it_work'])->name('how_it_work');
Route::get('terms-and-conditions', [PageController::class, 'termcon'])->name('termcon');

// ***************  Website Basic Page Routes (End)  *********************************//

// ***************  Internships Related Routes (start)  *********************************//

Route::get('internships', [InternshipController::class, 'internships'])->name('internship');
Route::get('internships/details/{id}', [InternshipController::class, 'internshipDetails'])->name('internshipDetails');


// ***************  Internships Related Routes (End)  *********************************//

// ***************  Employer/Company Routes (start)  *********************************//
    Route::middleware(['employercheck'])->group(function () {

        Route::get('register/employer', [EmployerController::class, 'index'])->name('employer.register');
        Route::post('register/employer', [EmployerController::class, 'register'])->name('employer.registers');

        Route::get('login/employer', [EmployerController::class, 'login'])->name('employer.login');
        Route::post('login/employer', [EmployerController::class, 'login_check'])->name('employer.login_check');

        Route::get('employer/dashboard', [EmployerController::class, 'dashboard'])->name('employer.dashboard');

        Route::get('employer/profile', [EmployerController::class, 'showProfile'])->name('employer.profile.get');
        Route::put('employer/profile', [EmployerController::class, 'updateProfile'])->name('employer.profile.put');

        Route::get('employer/post-internship', [InternshipController::class, 'showInternshipForm'])->name('employer.postinternshipform.get');
        Route::post('employer/post-internship', [InternshipController::class, 'submitInternshipForm'])->name('employer.postinternshipform.post');

        Route::get('employer/applications', [EmployerController::class, 'allApplications'])->name('employer.allApplication');

        Route::get('employer/applications/view/{id}', [EmployerController::class, 'viewStuApplications'])->name('employer.viewStuApplications');
        Route::get('employer/applications/view/{intid}/{stuid}/{status}', [EmployerController::class, 'shortlistorreject'])->name('employer.shortlistorreject');

        Route::get('employer/applications/view/profile/{id}', [EmployerController::class, 'viewStuProfile'])->name('employer.viewStuProfile');

        Route::get('employer/all-posted-internships', [EmployerController::class, 'all_posted_internships'])->name('employer.all_posted_internships');
        Route::get('employer/manage-internships', [EmployerController::class, 'manage_internships'])->name('employer.manage_internships');

        Route::get('employer/internships/delete/{id}', [EmployerController::class, 'deleteInternship'])->name('employer.deleteInternship');

        Route::get('employer/internships/edit/{id}', [InternshipController::class, 'editInternship'])->name('employer.editInternship');
        Route::put('employer/internships/edit/{id}', [InternshipController::class, 'updateInternship'])->name('employer.updateInternship');

        Route::get('employer/change-password', [EmployerController::class, 'showChangePassword'])->name('employer.changePassword.get');
        Route::put('employer/change-password', [EmployerController::class, 'updateChangePassword'])->name('employer.changePassword.put');

        Route::get('employer/logout', [EmployerController::class, 'logout'])->name('employer.logout');
    
    });

    // *************** Employer Forget Password Routes (Start)  *********************************//

    Route::get('employer/forget-password', [EmpFPController::class, 'showForgetPasswordForm'])->name('employer.forget.password.get');
    Route::post('employer/forget-password', [EmpFPController::class, 'submitForgetPasswordForm'])->name('employer.forget.password.post'); 
    Route::get('employer/reset-password/{token}', [EmpFPController::class, 'showResetPasswordForm'])->name('employer.reset.password.get');
    Route::post('employer/reset-password', [EmpFPController::class, 'submitResetPasswordForm'])->name('employer.reset.password.post');

    // *************** Employer Forget Password Routes (End)  *********************************//

// ***************  Employe/Company Routes (End)  *********************************//

// ***************  Student Routes (start)  *********************************//

    Route::middleware(['studentcheck'])->group(function () {

        Route::get('register/student', [StudentController::class, 'index'])->name('student.register');
        Route::post('register/student', [StudentController::class, 'register'])->name('student.registers');

        Route::get('login/student', [StudentController::class, 'login'])->name('student.login');
        Route::post('login/student', [StudentController::class, 'login_check'])->name('student.login_check');

        Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');

        Route::get('student/profile', [StudentController::class, 'showProfile'])->name('student.profile.get');
        Route::put('student/profile', [StudentController::class, 'updateProfile'])->name('student.profile.put');

        Route::get('student/applied-internships', [StudentController::class, 'appliedInternships'])->name('student.appliedInternships');

        Route::get('student/shorlisted-internships', [StudentController::class, 'shortlistedInternships'])->name('student.shortlistedInternships');

        Route::get('student/change-password', [StudentController::class, 'showChangePassword'])->name('student.changePassword.get');
        Route::put('student/change-password', [StudentController::class, 'updateChangePassword'])->name('student.changePassword.put');

        Route::get('internships/apply/{id}', [InternshipController::class, 'internshipsApply'])->name('internshipApply');

        Route::get('student/logout', [StudentController::class, 'logout'])->name('student.logout');

    });
    // *************** Student Forget Password Routes (Start)  *********************************//

    Route::get('student/forget-password', [StuFPController::class, 'showForgetPasswordForm'])->name('student.forget.password.get');
    Route::post('student/forget-password', [StuFPController::class, 'submitForgetPasswordForm'])->name('student.forget.password.post'); 
    Route::get('student/reset-password/{token}', [StuFPController::class, 'showResetPasswordForm'])->name('student.reset.password.get');
    Route::post('student/reset-password', [StuFPController::class, 'submitResetPasswordForm'])->name('student.reset.password.post');

    // *************** Student Forget Password Routes (End)  *********************************//

// ***************  Student Routes (End)  *********************************//


// ***************  Admin Routes (start)  *********************************//

Route::get('admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('admin/register', [AdminController::class, 'registration'])->name('admin.registration');

Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login_check'])->name('admin.login_check');

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('admin/categories', [CategoryController::class, 'category'])->name('admin.category');
Route::get('/admin/category/add', [CategoryController::class, 'category_add'])->name('admin.category.add');
Route::post('/admin/category/add', [CategoryController::class, 'category_save'])->name('admin.category.save');

Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/edit/{id}', [CategoryController::class, 'update'])->name('admin.category.update');

Route::get('/admin/category/status/{id}/{value}', [CategoryController::class, 'status'])->name('admin.category.status');

// ***************  Admin Routes (End)  *********************************//