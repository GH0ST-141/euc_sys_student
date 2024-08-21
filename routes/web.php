<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admission_new', function () {
//     return view('admission.admission_new');
// })->middleware(['auth', 'verified'])->name('admission_new');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admission_new', function () {
        return view('admission.admission_new');
    })->name('admission_new');

    Route::post('/admission_new', function () {
        return view('admission.admission_new'); // TODO: Change this function to post func
    })->name('admission_new');
});

// REVIEW: For address selector, route to json file to access it
Route::middleware('auth')->group(function () {
    Route::get('/ph-json/region.json', function () {
        return response()->file('build/assets/ph-json/region.json');
    });
    Route::get('/ph-json/province.json', function () {
        return response()->file('build/assets/ph-json/province.json');
    });
    Route::get('/ph-json/city.json', function () {
        return response()->file('build/assets/ph-json/city.json');
    });
    Route::get('/ph-json/barangay.json', function () {
        return response()->file('build/assets/ph-json/barangay.json');
    });
});


// TODO: create routing for admission transferee

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
