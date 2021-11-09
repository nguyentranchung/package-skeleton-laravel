<?php

use VendorName\Skeleton\Http\Controllers\IndexController;

Route::group([
    'prefix' => ':package_slug',
    'as' => ':package_slug.',
    'middleware' => ['web'],
], function () {
    Route::get('/', [IndexController::class, 'index']);
});
