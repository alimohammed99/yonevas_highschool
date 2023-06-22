<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// ROUTES FOR FRONTEND PAGESROUTES FOR FRONTEND PAGES
route::get('programs', [HomeController::class, 'programs'])->name('programs');

route::get('about', [HomeController::class, 'about'])->name('about');

route::get('contactUs', [HomeController::class, 'contactUs'])->name('contactUs');

route::get('academics', [HomeController::class, 'academics'])->name('academics');

route::get('course_profile', [HomeController::class, 'course_profile']);

route::get('admission', [HomeController::class, 'admission'])->name('admission');

route::get('cost', [HomeController::class, 'cost'])->name('cost');

route::get('donate', [HomeController::class, 'donate'])->name('donate');

route::get('employment', [HomeController::class, 'employment']);

route::get('partnership', [HomeController::class, 'partnership'])->name('partnership');

route::get('registrar', [HomeController::class, 'registrar'])->name('registrar');

route::get('resource', [HomeController::class, 'resource'])->name('resources');

route::get('scholarship', [HomeController::class, 'scholarship']);

route::get('student', [HomeController::class, 'student'])->name('student');

route::get('resource', [HomeController::class, 'resource']);

route::get('wellness', [HomeController::class, 'wellness'])->name('wellness');

route::get('contact-us', [HomeController::class, 'contactUs'])->name('contactUs');

route::get('lyzo-fi', [HomeController::class, 'lyzofi'])->name('lyzofi');

route::get('zlasic', [HomeController::class, 'zlasic'])->name('zlasic');

route::get('explore', [HomeController::class, 'explore'])->name('explore');

route::get('undergraduate', [HomeController::class, 'undergraduate'])->name('undergraduate');

route::get('diploma', [HomeController::class, 'diploma'])->name('diploma');

route::get('social-science', [HomeController::class, 'socialScience'])->name('social-science');

route::get('business-management', [HomeController::class, 'businessManagement'])->name('business-management');

route::get('art-media-design', [HomeController::class, 'artMediaDesign'])->name('art-media-design');

route::get('school-of-law', [HomeController::class, 'schoolLaw'])->name('school-of-law');

route::get('school-of-computer-studies', [HomeController::class, 'schoolcomputer'])->name('school-of-computer');

route::get('school-of-communication', [HomeController::class, 'schoolCommunication'])->name('school-of-communication');

route::get('faculty-of-education', [HomeController::class, 'facultyEducation'])->name('faculty-of-education');

route::get('foundation', [HomeController::class, 'foundation'])->name('foundation');

route::get('faq', [HomeController::class, 'faq'])->name('faq');

route::get('academic-calender', [HomeController::class, 'academic_calendar'])->name('academic-calendar');

route::get('website_feedback', [HomeController::class, 'website_feedback']);


// Courses
Route::get('accounting', function () {
    return view("USER.accounting");
})->name("accounting");
Route::get('demograhpyandsocialstatistics', function () {
    return view("USER.demograhpyandsocialstatistics");
})->name("demograhpyandsocialstatistics");
Route::get('business-manage', function () {
    return view("USER.business-manage");
})->name("business-manage");
Route::get('business-administration', function () {
    return view("USER.business-administration");
})->name("business-admin");
Route::get('computer-info-tech', function () {
    return view("USER.computer-info-tech");
})->name("computer-info-tech");
Route::get('computer-science', function () {
    return view("USER.computer-science");
})->name("computer-science");
Route::get('economics', function () {
    return view("USER.economics");
})->name("economics");
Route::get('entreprenurship', function () {
    return view("USER.entreprenurship");
})->name("entreprenurship");
Route::get('environmental-studies', function () {
    return view("USER.environmental-studies");
})->name("environmental-studies");
Route::get('events-meeting-management', function () {
    return view("USER.events-meeting-management");
})->name("events-meeting-management");
Route::get('forensic-accounting', function () {
    return view("USER.forensic-accounting");
})->name("forensic-accounting");
Route::get('graphics-design-media-arts', function () {
    return view("USER.graphics-design-media-arts");
})->name("graphics-design-media-arts");
Route::get('human-resources-management', function () {
    return view("USER.human-resources-management");
})->name("human-resources-management");
Route::get('mass-communication', function () {
    return view("USER.mass-communication");
})->name("mass-communication");
Route::get('public-relations', function () {
    return view("USER.public-relations");
})->name("public-relations");
Route::get('info-media', function () {
    return view("USER.info-media");
})->name("info-media");
Route::get('journalism-media', function () {
    return view("USER.journalism-media");
})->name("journalism-media");
Route::get('philosophy', function () {
    return view("USER.philosophy");
})->name("philosophy");
route::get('explore', [HomeController::class, 'explore'])->name('explore');

route::get('board-members', [HomeController::class, 'board'])->name('board');

// Staff

Route::get('founder', function () {
    return view("USER.founder");
})->name("founder");
Route::get('student-adviser', function () {
    return view("USER.student-adviser");
})->name("student-adviser");
Route::get('co-founder', function () {
    return view("USER.co-founder");
})->name("co-founder");
Route::get('director', function () {
    return view("USER.director");
})->name("director");
Route::get('secretary', function () {
    return view("USER.secretary");
})->name("secretary");

Route::get('software-engineer', function () {
    return view("USER.software-engineer");
})->name("software-engineer");
Route::get('tech-assistant', function () {
    return view("USER.tech-assistant");
})->name("tech-assistant");
Route::get('enrollment-officer', function () {
    return view("USER.enrollment");
})->name("enrollment");
Route::get('virtual-support-officer', function () {
    return view("USER.virtual-support-officer");
})->name("virtual-support");
Route::get('head-addmission', function () {
    return view("USER.head-addmission");
})->name("head-addmission");
Route::get('marketer', function () {
    return view("USER.marketer");
})->name("marketer");




// Privacy, Terms and Conditions and non-disclous permissions
Route::get('privacy-policy', function () {
    return view("USER.privacy");
})->name("privacy");
Route::get('terms-and-condition', function () {
    return view("USER.terms");
})->name("terms");
Route::get('disclosure-statement', function () {
    return view("USER.disclosure");
})->name("disclosure");


route::get('scholarship', [HomeController::class, 'scholarship'])->name('scholarship');


route::get('financial-aid', [HomeController::class, 'financial_aid'])->name('financial-aid');

Route::get('media-strategist', function () {
    return view("user.media-strategist");
})->name("media-strategist");


route::get('certificate', [HomeController::class, 'certificate'])->name('certificate');

Route::get('hospitality', function () {
    return view("USER.hospitality");
})->name("hospitality");

Route::get('banking-finance', function () {
    return view("USER.banking-finance");
})->name("banking-finance");

Route::get('pub-admin', function () {
    return view("USER.pub-admin");
})->name("pub-admin");

Route::get('marketing', function () {
    return view("USER.marketing");
})->name("marketing");

Route::get('developementStudies', function () {
    return view("USER.developementStudies");
})->name("developementStudies");


Route::get('communication-studies', function () {
    return view("USER.communicationstudies");
})->name("communication-studies");

Route::get('politicalScience', function () {
    return view("USER.politicalScience");
})->name("politicalScience");

Route::get('psychology', function () {
    return view("USER.psychology");
})->name("psychology");

Route::get('sociology', function () {
    return view("USER.sociology");
})->name("sociology");

Route::get('statistics', function () {
    return view("USER.statistics");
})->name("statistics");

Route::get('internationalRelation', function () {
    return view("USER.internationalRelation");
})->name("internationalRelation");

Route::get('socialWork', function () {
    return view("USER.socialWork");
})->name("socialWork");
Route::get('jurisprudence_international', function () {
    return view("USER.jurisprudence_international");
})->name("jurisprudence_international");

Route::get('private_property', function () {
    return view("USER.private_property");
})->name("private_property");

Route::get('commercial_industrial', function () {
    return view("USER.commercial_industrial");
})->name("commercial_industrial");

Route::get('public_law', function () {
    return view("USER.public_law");
})->name("public_law");

Route::get('business_education_ed', function () {
    return view("USER.business_education_ed");
})->name("business_education_ed");

Route::get('computer_science_ed', function () {
    return view("USER.computer_science_ed");
})->name("computer_science_ed");

Route::get('edu_management_ed', function () {
    return view("USER.edu_management_ed");
})->name("edu_management_ed");

Route::get('guidance_and_counselling_ed', function () {
    return view("USER.guidance_and_counselling_ed");
})->name("guidance_and_counselling_ed");

Route::get('health_education_ed', function () {
    return view("USER.health_education_ed");
})->name("health_education_ed");

Route::get('human_kinetics_ed', function () {
    return view("USER.human_kinetics_ed");
})->name("human_kinetics_ed");

Route::get('cyberSecurity', function () {
    return view("USER.cyberSecurity");
})->name("cyberSecurity");

Route::get('dataScience', function () {
    return view("USER.dataScience");
})->name("dataScience");

Route::get('info-tech', function () {
    return view("USER.info-tech");
})->name("info-tech");

Route::get('soft-engr', function () {
    return view("USER.soft-engr");
})->name("soft-engr");
