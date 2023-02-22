<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\GaugeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\PobreakdownController;
use App\Http\Controllers\StyleDetailsController;
use App\Http\Controllers\TypeaheadController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [BackendController::class, 'index'])->name('frontend.index');
    Route::get('/style-autocomplete', [TypeaheadController::class, 'styleautocompleteSearch']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/buyer', BuyerController::class);
    Route::resource('/agent', AgentController::class);
    Route::resource('/supplier', SupplierController::class);
    Route::resource('/gauge', GaugeController::class);
    Route::get('/gauge/{gauge}', [GaugeController::class, 'show'])->name('gauge.show');
    Route::get('/journal', [JournalController::class, 'index'])->name('journal.index');
    Route::get('/journal/create', [JournalController::class, 'create'])->name('journal.create');
    Route::get('/journal/view', [JournalController::class, 'show'])->name('journal.view');

    Route::get('/style-add', [StyleDetailsController::class, 'create'])->name('style-add');
    Route::post('/style-add', [StyleDetailsController::class, 'store'])->name('style-store');


    Route::get('/po-add', [PobreakdownController::class, 'create'])->name('po-add');

    Route::get('/labdip-add', [JournalController::class, 'labdipAdd'])->name('lab-dip-add');
    Route::get('/protosample-add', [JournalController::class, 'protoSampleAdd'])->name('proto-sample-add');
    Route::get('/ppsample-add', [JournalController::class, 'ppSampleAdd'])->name('pp-sample-add');

    Route::get('/print-add', [JournalController::class, 'printAdd'])->name('print-add');
    Route::get('/embroidery-add', [JournalController::class, 'embroideryAdd'])->name('embroidery-add');
    Route::get('/hand-embroidery-add', [JournalController::class, 'handEmbroideryAdd'])->name('hand-embroidery-add');
    Route::get('/others-add', [JournalController::class, 'otherEmbellishmentAdd'])->name('other-embellishment-add');

    Route::get('/accessories', [JournalController::class, 'accessoriesIndex'])->name('accessories-approval-index');
    Route::get('/accessories-add', [JournalController::class, 'accessoriesAdd'])->name('accessories-approval-add');
    // 01 Style Details route
    Route::prefix('/journal')->group(function () {
        Route::post('/create', [StyleDetailsController::class, 'store'])->name('style.store');
        Route::post('/po', [PobreakdownController::class, 'store'])->name('pobreakdown.store');
    });
});


require __DIR__ . '/auth.php';
