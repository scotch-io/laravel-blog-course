<?php

// home page
Route::get('/', 'SiteController@showHome');

// single post page
Route::get('{slug}', 'SiteController@showPost');

// show and process the contact page
Route::get('contact', 'SiteController@showContact');
Route::post('contact', 'SiteController@processContact');