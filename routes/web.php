<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::get('dashboard','DashboardController@index');

    //kandidat
    Route::get('candidat','KandidatController@index');
    Route::post('candidat/tambah','KandidatController@store');
    Route::get('candidat/detail/{id}','KandidatController@detail');
    Route::put('candidat/edit/{id}','KandidatController@update');
    Route::delete('candidat/hapus/{id}','KandidatController@delete');
    
    //Voter
    Route::get('voter','VoterController@index');
    Route::post('voter/tambah','VoterController@store');
    Route::post('voter/hapus','VoterController@delete');
    Route::get('voter/export','VoterController@export');

});

    //Voting
    Route::get('user','UserController@index');
    Route::get('user/voting_login','UserController@voting_login');
    Route::post('cektoken','UserController@cektoken');

    //Voting kandidat
    Route::get('voting','VotingController@index');
    Route::get('voting/detail/{id}','VotingController@voting_detail');
    Route::get('simpan_suara/{id}','VotingController@simpan_suara');
    Route::get('user/logout_voting','UserController@logout_voting');

    //quic count
    Route::get('hitung_cepat','HitungCepatController@index');


Route::get('/home', function () {
    return redirect('dashboard');
});

Route::get('/keluar', function () {
    Auth::logout();
    return redirect('login');
});