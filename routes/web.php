<?php

// routes/web.php

use App\Http\Controllers\CatalogController;

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
