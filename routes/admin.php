<?php

Route::name('blogs.')->prefix('blogs')->group(function (){
  Route::name('index')->get('/', 'BlogController@index');
});
