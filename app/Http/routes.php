<?php

Route::group(['middleware' => 'web'], function () {
    require('Routes/home.php');
});
