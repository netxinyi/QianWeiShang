<?php



Route::get('/',array('as'=>'showIndex','uses'=>'indexController@showIndex'));
Route::get('/product/add',array('as'=>'productAdd','uses'=>'productController@showAdd'));
