<?php 
use Carbon\Carbon;

Route::group(['namespace'=>'Softnweb\ComingSoon\Http\Controllers'], function(){
    
    $value = config('comingsoon.snw_test_mode');
    
    if($value){
        Route::get('contact','ComingSoonController@index')->name('contact');

        Route::post('/','ComingSoonController@send'); 

        Route::any('{query}', function() {
            $value = config('comingsoon');
            $dt = Carbon::create($value['snw_year'], $value['snw_month'], $value['snw_day'], $value['snw_hours'] , $value['snw_minutes'],$value['snw_seconds']);
            return view('comingsoon::comingsoon',compact('value','dt'));
        })->where('query', '.*');

        Route::get('/',function(){
            $value = config('comingsoon');
            $dt = Carbon::create($value['snw_year'], $value['snw_month'], $value['snw_day'], $value['snw_hours'] , $value['snw_minutes'],$value['snw_seconds']);
            return view('comingsoon::comingsoon',compact('value','dt'));
        }); 
    }
});
