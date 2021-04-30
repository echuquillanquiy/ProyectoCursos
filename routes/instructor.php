<?php

use App\Http\Livewire\Instructor\CoursesCurriculum;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;

Route::redirect('', 'instructor/courses');

Route::resource('courses', CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum', CoursesCurriculum::class)->name('courses.curriculum');
