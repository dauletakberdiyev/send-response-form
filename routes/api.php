<?php

use App\Domain\Form\Presentation\Controllers\CreateController as ResponseFormCreateController;
use Illuminate\Support\Facades\Route;

Route::prefix('response-form')->name('response-form-')->group(function () {
    Route::post('{type}', [ResponseFormCreateController::class, 'create'])->name('create');
});


