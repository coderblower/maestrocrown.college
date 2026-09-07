<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [PageController::class, 'home'])->name('home');

// About Us
Route::get('/about-us', [PageController::class, 'about'])->name('about');

// Administration
Route::get('/administration', [PageController::class, 'governingBody'])->name('administration');
Route::get('/governing-body', [PageController::class, 'governingBody'])->name('governing-body');
Route::get('/chairmans-profile', [PageController::class, 'chairmansProfile'])->name('chairmans-profile');
Route::get('/message-of-chairman', [PageController::class, 'messageOfChairman'])->name('message-of-chairman');
Route::get('/message-of-principal', [PageController::class, 'messageOfPrincipal'])->name('message-of-principal');
Route::get('/teacher-information', [PageController::class, 'teachers'])->name('teachers');
Route::get('/staff-information', [PageController::class, 'staff'])->name('staff');

// Academic
Route::get('/academic', [PageController::class, 'programs'])->name('academic');
Route::get('/academic-calender', [PageController::class, 'academicCalendar'])->name('academic-calendar');
Route::get('/college', [PageController::class, 'programs'])->name('programs');
Route::get('/programs', [PageController::class, 'programs'])->name('programs.alt');

// Notice Board
Route::get('/notice', [NoticeController::class, 'index'])->name('notice.index');
Route::get('/notice/{slug}', [NoticeController::class, 'show'])->name('notice.show');

// Research & Development
Route::get('/research-development', [PageController::class, 'research'])->name('research');

// Admission
Route::get('/admission', [PageController::class, 'admission'])->name('admission');
Route::post('/admission/apply', [InquiryController::class, 'storeAdmission'])->name('admission.store');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [InquiryController::class, 'storeContact'])->name('contact.store');

// Gallery
Route::get('/gellery', [PageController::class, 'gallery'])->name('gallery.old');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
