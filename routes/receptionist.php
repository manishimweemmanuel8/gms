<?php

Route::group(['namespace' => 'Receptionist'], function() {
    Route::get('/', 'HomeController@index')->name('receptionist.dashboard');


       //customer information
    Route::get('/client', 'CommittedCustomerController@index')->name('client.index');
    Route::get('/client/{id}/edit','CommittedCustomerController@edit')->name('client.edit');
    Route::get('/client/{id}/delete','CommittedCustomerController@destroy')->name('client.destroy');
    Route::get('/client/create','CommittedCustomerController@create')->name('client.create');
    Route::post('/client/create','CommittedCustomerController@store')->name('client.store');
    Route::post('/client/update','CommittedCustomerController@update')->name('client.update');

    //payment information
    Route::get('/payment', 'PaymentController@index')->name('payments.index');
    Route::get('/payment/{id}/edit','PaymentController@edit')->name('payments.edit');
    Route::get('/payment/{id}/delete','PaymentController@destroy')->name('payments.destroy');
    Route::get('/payment/create','PaymentController@create')->name('payments.create');
    Route::post('/payment/create','PaymentController@store')->name('payments.store');
    Route::post('/payment/update','PaymentController@update')->name('payments.update');

     //individual attendance information
    Route::get('/individual', 'AttendanceController@index')->name('individual.index');
    Route::get('/individual/{id}/delete','AttendanceController@destroy')->name('individual.destroy');

     //company attendance information
    Route::get('/company', 'CorporateAttendanceController@index')->name('company.index');
    Route::get('/company/{id}/delete','CorporateAttendanceController@destroy')->name('company.destroy');

    //session

    // Route::get('/session/create','session@create')->name('session.create');
    // Route::post('/session/create','SessionController@store')->name('session.store');

    Route::get('/session', 'SessionController@index')->name('session.index');
    Route::get('/session/{id}/edit','SessionController@edit')->name('session.edit');
    Route::get('/session/{id}/delete','SessionController@destroy')->name('session.destroy');
    Route::get('/session/create','SessionController@create')->name('session.create');
    Route::post('/session/create','SessionController@store')->name('session.store');
    Route::post('/session/update','SessionController@update')->name('session.update');

    // report
    Route::get('/report/daily', 'HandoverController@dailySalesReport')->name('report.daily');
    Route::get('/report/summary', 'HandoverController@summarySalesReport')->name('report.summary');




    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('receptionist.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('receptionist.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('receptionist.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('receptionist.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('receptionist.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('receptionist.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('receptionist.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('receptionist.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('receptionist.verification.verify');

});