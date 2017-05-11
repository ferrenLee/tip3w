<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/10
 * Time: 18:49
 */

Route::group(['namespace'=>'Admin'], function (){
    Route::get('/', 'IndexController@index')->name('website.admin.index');
});