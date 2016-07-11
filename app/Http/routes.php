<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function(){

    // Вызов страницы регистрации пользователя
    Route::get('register','AuthController@register');
// Пользователь заполнил форму регистрации и отправил
    Route::post('register','AuthController@registerProcess');
// Пользователь получил письмо для активации аккаунта со ссылкой сюда
    Route::get('activate/{id}/{code}', 'AuthController@activate');

// Вызов страницы аутентификации
    Route::get('login', 'AuthController@login');
// Пользователь заполнил форму аутентификации и отправил
    Route::post('login', 'AuthController@loginProcess');

// Пользователь забыл пароль и запросил сброс пароля

// Страница с запросом e-mail пользователя
    Route::get('reset', 'AuthController@resetOrder');
// Пользователь заполнил и отправил форму с e-mail в запросе на сброс пароля
    Route::get('reset', 'AuthController@resetIOrderProcess');
// Пользователю пришло письмо со ссылкой на эту страницу для ввода нового пароля
    Route::get('reset/{id}/{code}', 'AuthController@resetComplete');
// Пользователь ввёл новый пароль и отправил
    Route::post('reset/{id}/{code}', 'AuthController@resetCompleteProcess');
// сервисная страница сообщающая что письмо отправлено и надо заглянуть в почтовый ящик
    Route::get('wait', 'AuthController@wait');

});

/*Route::group(['middleware' => 'auth'], function () {
    Route::any('/po', 'POList@Index');

});*/

Route::any('/admin', 'AuthTest@index');