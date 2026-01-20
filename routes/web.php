<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
});

// Student List
Route::get('/students', function () {
    return view('students.index');
});

// Add Student Page
// CRITICAL: This MUST come before the '/students/{id}' route.
// Otherwise, Laravel will think "create" is an ID!
Route::get('/students/create', function () {
    return view('students.create');
});

// View Student Page
Route::get('/students/{id}', function ($id) {
    // We pass the $id variable to the view so we can display it
    return view('students.show', ['id' => $id]);
});

// Edit Student Page
Route::get('/students/{id}/edit', function ($id) {
    return view('students.edit', ['id' => $id]);
});
