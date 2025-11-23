
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController as Menu;

Route::prefix('menu')->group(function () {
    Route::post('/', [Menu::class, 'store']);
    Route::get('/', [Menu::class, 'index']);           // list + filter
    Route::get('/search', [Menu::class, 'search']);    // search
    Route::get('/group-by-category', [Menu::class, 'groupByCategory']);
    Route::get('/{id}', [Menu::class, 'show']);
    Route::put('/{id}', [Menu::class, 'update']);
    Route::delete('/{id}', [Menu::class, 'destroy']);
    Route::post('/ai-suggest', [Menu::class, 'aiSuggest']);

});

Route::get('/stats', [Menu::class, 'stats']);