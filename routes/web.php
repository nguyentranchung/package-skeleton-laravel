<?php

Route::group([
    'prefix' => 'xxx',
    'as' => 'xxx.',
    'middleware' => ['web'],
], function () {
    Route::get('/', 'IndexController@index');
});
