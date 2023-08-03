<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\TeacherController;

use App\Http\Controllers\StudentController;

use Illuminate\Support\Facades\Auth;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});








// ROUTES FOR FRONTEND PAGESROUTES FOR FRONTEND PAGES
// ROUTES FOR FRONTEND PAGESROUTES FOR FRONTEND PAGES

require __DIR__ . '/pages.php';

// ROUTES FOR FRONTEND PAGESROUTES FOR FRONTEND PAGES
// ROUTES FOR FRONTEND PAGESROUTES FOR FRONTEND PAGES
// ROUTES FOR FRONTEND PAGESROUTES FOR FRONTEND PAGES





route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

route::get('/', [HomeController::class, 'index']);

route::post('/submit_visitors_feedback', [HomeController::class, 'submit_visitors_feedback']);

route::post("/users_send_email", [HomeController::class, "users_send_email"])->name('contact.send');

route::get('certificate', [HomeController::class, 'certificate'])->name('certificate');

route::get('application', [HomeController::class, 'application'])->name('application');

route::get('/view_faculties', [AdminController::class, 'view_faculties']);

route::post('/upload_faculties', [AdminController::class, 'upload_faculties']);

Route::get('/edit_faculties/{id}', [AdminController::class, 'edit_faculties']);

Route::get("/delete_faculties/{id}", [AdminController::class, "delete_faculties"]);

Route::post("/update_faculties/{id}", [AdminController::class, "update_faculties"]);




route::get('/view_departments', [AdminController::class, 'view_departments']);

route::post('/upload_departments', [AdminController::class, 'upload_departments']);

Route::get('/edit_departments/{id}', [AdminController::class, 'edit_departments']);

Route::get("/delete_departments/{id}", [AdminController::class, "delete_departments"]);

Route::post("/update_departments/{id}", [AdminController::class, "update_departments"]);





route::get('/view_programmes', [AdminController::class, 'view_programmes']);

route::post('/upload_programmes', [AdminController::class, 'upload_programmes']);

Route::get('/edit_programmes/{id}', [AdminController::class, 'edit_programmes']);

Route::get("/delete_programmes/{id}", [AdminController::class, "delete_programmes"]);

Route::post("/update_programmes/{id}", [AdminController::class, "update_programmes"]);






route::get('/view_courses_statuses', [AdminController::class, 'view_courses_statuses']);

route::post('/upload_courses_statuses', [AdminController::class, 'upload_courses_statuses']);

Route::get('/edit_courses_statuses/{id}', [AdminController::class, 'edit_courses_statuses']);

Route::get("/delete_courses_statuses/{id}", [AdminController::class, "delete_courses_statuses"]);

Route::post("/update_courses_statuses/{id}", [AdminController::class, "update_courses_statuses"]);






route::get('/view_semesters', [AdminController::class, 'view_semesters']);

route::post('/upload_semesters', [AdminController::class, 'upload_semesters']);

Route::get('/edit_semesters/{id}', [AdminController::class, 'edit_semesters']);

Route::get("/delete_semesters/{id}", [AdminController::class, "delete_semesters"]);

Route::post("/update_semesters/{id}", [AdminController::class, "update_semesters"]);




route::get('/site_logo', [AdminController::class, 'site_logo']);

route::post('/upload_site_logo', [AdminController::class, 'upload_site_logo']);

Route::get('/edit_site_logo/{id}', [AdminController::class, 'edit_site_logo']);

Route::post("/update_site_logo/{id}", [AdminController::class, "update_site_logo"]);


route::get('/a_course', [AdminController::class, 'a_course']);
Route::post('/ad-course', [AdminController::class, 'ad_course'])->name('ad_course');

route::get('/add_courses', [AdminController::class, 'add_courses']);

route::get('/upload_course_reg', [AdminController::class, 'upload_course_reg']);

route::post('/upload_courses', [AdminController::class, 'upload_courses']);

route::get('/view_nd1_courses', [AdminController::class, 'view_nd1_courses']);

route::get('/view_nd2_courses', [AdminController::class, 'view_nd2_courses']);

route::get('/view_certificate_courses', [AdminController::class, 'view_certificate_courses']);

Route::get('/edit_courses/{id}', [AdminController::class, 'edit_courses']);

Route::post("/update_courses/{id}", [AdminController::class, "update_courses"]);

Route::get("/delete_courses/{id}", [AdminController::class, "delete_courses"]);

Route::get('/edit_certificate_courses/{id}', [AdminController::class, 'edit_certificate_courses']);

Route::post("/update_certificate_courses/{id}", [AdminController::class, "update_certificate_courses"]);

Route::get("/delete_certificate_courses/{id}", [AdminController::class, "delete_certificate_courses"]);

Route::get('/admin_view_course_profile/{id}', [AdminController::class, 'admin_view_course_profile']);

Route::get('/edit_dept_max_unit/{id}', [AdminController::class, 'edit_dept_max_unit']);

Route::post("/update_dept_max_unit/{id}", [AdminController::class, "update_dept_max_unit"]);




// Route::post('getDepartments', [AdminController::class, 'getDepartments'])->name('getDepartments');

// Route::post('getCourse', [AdminController::class, 'getCourse'])->name('getCourse');

// Route::post('getDepartmentsForProgType', [AdminController::class, 'getDepartmentsForProgType'])->name('getDepartmentsForProgType');




route::get('/course_by_fac_and_dept', [AdminController::class, 'course_by_fac_and_dept']);




route::get('/genders', [AdminController::class, 'genders']);

route::post('/upload_genders', [AdminController::class, 'upload_genders']);

Route::get('/edit_genders/{id}', [AdminController::class, 'edit_genders']);

Route::get("/delete_genders/{id}", [AdminController::class, "delete_genders"]);

Route::post("/update_genders/{id}", [AdminController::class, "update_genders"]);





route::get('/religions', [AdminController::class, 'religions']);

route::post('/upload_religions', [AdminController::class, 'upload_religions']);

Route::get('/edit_religions/{id}', [AdminController::class, 'edit_religions']);

Route::get("/delete_religions/{id}", [AdminController::class, "delete_religions"]);

Route::post("/update_religions/{id}", [AdminController::class, "update_religions"]);







route::get('/staff_categories', [AdminController::class, 'staff_categories']);

route::post('/upload_staff_categories', [AdminController::class, 'upload_staff_categories']);

Route::get('/edit_staff_categories/{id}', [AdminController::class, 'edit_staff_categories']);

Route::get("/delete_staff_categories/{id}", [AdminController::class, "delete_staff_categories"]);

Route::post("/update_staff_categories/{id}", [AdminController::class, "update_staff_categories"]);






route::get('/staff_roles', [AdminController::class, 'staff_roles']);

route::post('/upload_staff_roles', [AdminController::class, 'upload_staff_roles']);

Route::get('/edit_staff_roles/{id}', [AdminController::class, 'edit_staff_roles']);

Route::get("/delete_staff_roles/{id}", [AdminController::class, "delete_staff_roles"]);

Route::post("/update_staff_roles/{id}", [AdminController::class, "update_staff_roles"]);









route::get('/medical_conditions', [AdminController::class, 'medical_conditions']);

route::post('/upload_medical_conditions', [AdminController::class, 'upload_medical_conditions']);





route::get('/should_we_contact_them', [AdminController::class, 'should_we_contact_them']);

route::post('/upload_should_we_contact_them', [AdminController::class, 'upload_should_we_contact_them']);






route::get('/marital_status', [AdminController::class, 'marital_status']);

route::post('/upload_marital_status', [AdminController::class, 'upload_marital_status']);






route::get('/teaching_experience', [AdminController::class, 'teaching_experience']);

route::post('/upload_teaching_experience', [AdminController::class, 'upload_teaching_experience']);





route::get('/computer_experience', [AdminController::class, 'computer_experience']);

route::post('/upload_computer_experience', [AdminController::class, 'upload_computer_experience']);





route::get('/military_force', [AdminController::class, 'military_force']);

route::post('/upload_military_force', [AdminController::class, 'upload_military_force']);






route::get('/government_official', [AdminController::class, 'government_official']);

route::post('/upload_government_official', [AdminController::class, 'upload_government_official']);








route::get('/highest_education', [AdminController::class, 'highest_education']);

route::post('/upload_highest_education', [AdminController::class, 'upload_highest_education']);






Route::post('getStates', [AdminController::class, 'getStates'])->name('getStates');

Route::post('getCities', [AdminController::class, 'getCities'])->name('getCities');

Route::post('getStates', [StudentController::class, 'getStates'])->name('getStates');

Route::post('getCities', [StudentController::class, 'getCities'])->name('getCities');







route::get('/add_staffs', [AdminController::class, 'add_staffs']);

route::post('/upload_staffs', [AdminController::class, 'upload_staffs']);

route::get('/view_all_staffs', [AdminController::class, 'view_all_staffs']);

Route::get('/edit_staffs/{id}', [AdminController::class, 'edit_staffs']);

Route::post("/update_staffs/{id}", [AdminController::class, "update_staffs"]);

Route::get("/delete_staffs/{id}", [AdminController::class, "delete_staffs"]);

route::get('/view_staffs_profile/{id}', [AdminController::class, 'view_staffs_profile']);

route::get('/view_teaching_staffs', [AdminController::class, 'view_teaching_staffs']);

route::get('/view_non_teaching_staffs', [AdminController::class, 'view_non_teaching_staffs']);


route::get('/view_new_users', [AdminController::class, 'view_new_users']);




route::get('/add_students', [AdminController::class, 'add_students']);

route::post('/upload_students', [AdminController::class, 'upload_students']);

route::get('/view_students', [AdminController::class, 'view_students']);

route::get('/view_diploma_students', [AdminController::class, 'view_diploma_students']);

route::get('/view_certificate_students', [AdminController::class, 'view_certificate_students']);

Route::get('/edit_students/{id}', [AdminController::class, 'edit_students']);

Route::post("/update_students/{id}", [AdminController::class, "update_students"]);

Route::get("/delete_students/{id}", [AdminController::class, "delete_students"]);

route::get('/view_students_profile/{id}', [AdminController::class, 'view_students_profile']);

route::get('/display_diploma_students_according_to_departments', [AdminController::class, 'display_diploma_students_according_to_departments']);









route::get('/academic_session', [AdminController::class, 'academic_session']);

route::post('/upload_academic_session', [AdminController::class, 'upload_academic_session']);

Route::get('/edit_academic_session/{id}', [AdminController::class, 'edit_academic_session']);

Route::get("/delete_academic_session/{id}", [AdminController::class, "delete_academic_session"]);

Route::post("/update_academic_session/{id}", [AdminController::class, "update_academic_session"]);

Route::get('/open_academic_session/{id}', [AdminController::class, 'open_academic_session']);

Route::get('/close_academic_session/{id}', [AdminController::class, 'close_academic_session']);




route::get('/level', [AdminController::class, 'level']);

route::post('/upload_level', [AdminController::class, 'upload_level']);

Route::get('/edit_level/{id}', [AdminController::class, 'edit_level']);

Route::get("/delete_level/{id}", [AdminController::class, "delete_level"]);

Route::post("/update_level/{id}", [AdminController::class, "update_level"]);






route::get('/attendance_response', [AdminController::class, 'attendance_response']);

route::post('/upload_attendance_response', [AdminController::class, 'upload_attendance_response']);

Route::get('/edit_attendance_response/{id}', [AdminController::class, 'edit_attendance_response']);

Route::get("/delete_attendance_response/{id}", [AdminController::class, "delete_attendance_response"]);

Route::post("/update_attendance_response/{id}", [AdminController::class, "update_attendance_response"]);




route::get('/update_student_profile', [HomeController::class, 'update_student_profile']);

route::post('/upload_students_profile', [HomeController::class, 'upload_students_profile']);

Route::get("/read/{id}", [HomeController::class, "read"])->name('read');



Route::get('/general_settings', [AdminController::class, 'general_settings']);



route::get('/events', [AdminController::class, 'events']);

route::post('/upload_events', [AdminController::class, 'upload_events']);

Route::get("/delete_events/{id}", [AdminController::class, "delete_events"]);




route::get('/students_circular', [AdminController::class, 'students_circular']);

route::post('/upload_students_circular', [AdminController::class, 'upload_students_circular']);

Route::get("/delete_students_circular/{id}", [AdminController::class, "delete_students_circular"]);





route::get('/staff_circular', [AdminController::class, 'staff_circular']);

route::post('/upload_staff_circular', [AdminController::class, 'upload_staff_circular']);

Route::get("/delete_staff_circular/{id}", [AdminController::class, "delete_staff_circular"]);

route::get('/students_olevel', [AdminController::class, 'students_olevel']);






Route::get("/download_staff_cv/{file}", [AdminController::class, "download_staff_cv"]);

Route::get("/view_staff_cv/{id}", [AdminController::class, "view_staff_cv"]);






route::get('/teachers_to_courses', [AdminController::class, 'teachers_to_courses']);

route::post('/assign_teachers_to_courses', [AdminController::class, 'assign_teachers_to_courses']);






route::get('/manage_teacher_profile', [TeacherController::class, 'manage_teacher_profile']);

Route::get('/edit_staff_profile/{id}', [TeacherController::class, 'edit_staff_profile']);

Route::post("/update_staff_profile/{id}", [TeacherController::class, "update_staff_profile"]);

route::get('/change_teacher_password', [TeacherController::class, 'change_teacher_password']);

Route::post("/update_staff_password", [TeacherController::class, "update_staff_password"]);

route::get('/view_my_diploma_students', [TeacherController::class, 'view_my_diploma_students']);

route::get('/view_my_diploma_students', [TeacherController::class, 'view_my_diploma_students']);

route::get('/view_my_diploma_courses', [TeacherController::class, 'view_my_diploma_courses']);

route::get('/view_my_certificate_students', [TeacherController::class, 'view_my_certificate_students']);

route::get('/view_my_certificate_courses', [TeacherController::class, 'view_my_certificate_courses']);

Route::get('/teacher_view_course_profile/{id}', [TeacherController::class, 'teacher_view_course_profile']);

Route::get("/view_my_cv", [TeacherController::class, "view_my_cv"]);

Route::get("/download_my_cv/{file}", [TeacherController::class, "download_my_cv"]);







route::get('/pay_school_fees', [StudentController::class, 'pay_school_fees']);

route::get('/upload_olevel_and_utme', [StudentController::class, 'upload_olevel_and_utme']);

route::post('/store_olevel_and_utme', [StudentController::class, 'store_olevel_and_utme']);



Route::post('getDepartments', [StudentController::class, 'getDepartments'])->name('getDepartments');

Route::post('getCourse', [StudentController::class, 'getCourse'])->name('getCourse');

Route::post('getDepartmentsForProgType', [StudentController::class, 'getDepartmentsForProgType'])->name('getDepartmentsForProgType');



route::get('/manage_student_profile', [StudentController::class, 'manage_student_profile']);

Route::get('/edit_student_profile/{id}', [StudentController::class, 'edit_student_profile']);

Route::post("/update_student_profile/{id}", [StudentController::class, "update_student_profile"]);

route::get('/change_student_password', [StudentController::class, 'change_student_password']);

Route::post("/update_student_password", [StudentController::class, "update_student_password"]);

Route::get("/view_my_waec", [StudentController::class, "view_my_waec"]);

Route::get("/download_waco1/{waco1}", [StudentController::class, "download_waco1"]);

Route::get("/download_waco2/{waco2}", [StudentController::class, "download_waco2"]);

Route::get("/download_utme/{utme}", [StudentController::class, "download_utme"]);

Route::get("/student_admission_status", [StudentController::class, "student_admission_status"]);

route::get('/students_course_reg', [StudentController::class, 'students_course_reg']);

route::post('/students_to_course_reg', [StudentController::class, 'students_to_course_reg']);

route::get('/services_and_links', [StudentController::class, 'services_and_links']);

route::get('/forms', [StudentController::class, 'forms']);

route::get('/tuition_and_fees', [StudentController::class, 'tuition_and_fees']);

route::get('/course_feedback', [StudentController::class, 'course_feedback']);

route::get('/view_grades', [StudentController::class, 'view_grades']);

route::get('/generate_transcript', [StudentController::class, 'generate_transcript']);



Route::post("/submit_course_feedback", [StudentController::class, "submit_course_feedback"]);








Route::get("/admin_approve_students_olevel/{id}", [AdminController::class, "admin_approve_students_olevel"]);

Route::get("/admin_disapprove_students_olevel/{id}", [AdminController::class, "admin_disapprove_students_olevel"]);


route::post('/upload_reason', [AdminController::class, 'upload_reason']);


Route::get("/admin_view_student_utme/{id}", [AdminController::class, "admin_view_student_utme"]);

Route::get("/admin_view_student_waco1/{id}", [AdminController::class, "admin_view_student_waco1"]);

Route::get("/admin_view_student_waco2/{id}", [AdminController::class, "admin_view_student_waco2"]);

Route::get("/admin_view_student_original_cert/{id}", [AdminController::class, "admin_view_student_original_cert"]);

Route::get("/admin_view_student_birth_cert/{id}", [AdminController::class, "admin_view_student_birth_cert"]);

Route::get("/admin_view_student_valid_id/{id}", [AdminController::class, "admin_view_student_valid_id"]);

Route::get("/admin_view_student_sponsorship_letter/{id}", [AdminController::class, "admin_view_student_sponsorship_letter"]);

Route::get("/admin_view_student_passport/{id}", [AdminController::class, "admin_view_student_passport"]);



Route::get("/admin_download_student_utme/{id}", [AdminController::class, "admin_download_student_utme"]);

Route::get("/admin_download_student_waco1/{id}", [AdminController::class, "admin_download_student_waco1"]);

Route::get("/admin_download_student_waco2/{id}", [AdminController::class, "admin_download_student_waco2"]);

Route::get("/admin_download_student_original_cert/{id}", [AdminController::class, "admin_download_student_original_cert"]);

Route::get("/admin_download_student_birth_cert/{id}", [AdminController::class, "admin_download_student_birth_cert"]);

Route::get("/admin_download_student_valid_id/{id}", [AdminController::class, "admin_download_student_valid_id"]);

Route::get("/admin_download_student_sponsorship_letter/{id}", [AdminController::class, "admin_download_student_sponsorship_letter"]);

Route::get("/admin_download_student_passport/{id}", [AdminController::class, "admin_download_student_passport"]);



route::get('/course_reg_according_to_departments', [AdminController::class, 'course_reg_according_to_departments']);

route::post('/upload_courses_to_departments', [AdminController::class, 'upload_courses_to_departments']);

route::get('/set_dept_max_unit', [AdminController::class, 'set_dept_max_unit']);

route::post('/upload_max_unit', [AdminController::class, 'upload_max_unit']);

Route::get("/view_course_reg", [AdminController::class, "view_course_reg"]);






route::get('users_begin_application', [HomeController::class, 'users_begin_application']);

route::post('/submit_employee_application', [HomeController::class, 'submit_employee_application']);



route::get('application_forms', [AdminController::class, 'application_forms']);




Route::get("/view_job_applicants", [AdminController::class, "view_job_applicants"]);

route::post('/upload_application_form_pdf', [AdminController::class, 'upload_application_form_pdf']);

Route::get("/students_course_feedback", [AdminController::class, "students_course_feedback"]);



route::post('/add_non_degree_course_reg', [StudentController::class, 'non_degree_course_reg']);
