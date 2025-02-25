<?php

use App\Livewire\Area;
use App\Livewire\Classroom;
use App\Livewire\Dashboard;
use App\Livewire\Isrule;
use App\Livewire\Login;
use App\Livewire\Reports;
use App\Livewire\Rule;
use App\Livewire\SettingActivity;
use App\Livewire\Student;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', Login::class)->name('login');

Route::middleware(['authentication'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/activity', SettingActivity::class)->name('activity');
    Route::get('/student', Student::class)->name('student');
    Route::get('/is-rule', Isrule::class)->name('isrule');
    Route::get('/rule', Rule::class)->name('rule');
    Route::get('/area', Area::class)->name('area');
    Route::get('/class', Classroom::class)->name('classroom');
    Route::get('/report', Reports::class)->name('report');

    Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});
