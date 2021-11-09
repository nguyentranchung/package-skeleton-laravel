<?php

use VendorName\Skeleton\Http\Controllers\IndexController;

Route::group([
    'prefix' => 'xxx',
    'as' => 'xxx.',
    'middleware' => ['web'],
], function () {
    Route::get('/', [IndexController::class, 'index']);
});
