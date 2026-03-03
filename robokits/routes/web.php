<?php

use Illuminate\Support\Facades\Route;
use App\Models\Group;
use App\Models\Course;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

    $group = Group::first();
    $course = Course::first();
    $student = User::where('role', 'student')->first();

    return [
        'Grupo y sus cursos' => $group->courses,
        'Curso y sus grupos' => $course->groups,
        'Estudiante y su grupo' => $student->group,
        'Curso y su kit' => $course->roboticsKit,
    ];
});