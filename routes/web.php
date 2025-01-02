<?php

use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return redirect('/students');  // Chuyển hướng từ trang chủ đến /students
});

Route::get('/students', [StudentController::class, 'index']);
