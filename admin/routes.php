<?php



Route::get('/',array('as'=>'showIndex','uses'=>'indexController@showIndex'));
Route::get('/yingwu/add',array('as'=>'yingwuAdd','uses'=>'indexController@showIndex'));
