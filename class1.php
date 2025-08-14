<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('welcome');
});


Route::get('/home', function () {
    return ('welcome to home');
});

Route::get('/home2', function () {
    return " 
        <h2>Users Table</h2>
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>john@example.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Doe</td>
                <td>jane@example.com</td>
            </tr>
        </table> ";
});


Route::get('/pera/{data}' ,function($data){
    return $data;
});
 
Route::get('/compact' , function(){
    $name='saifus'
});


Route::get('/with', function(){
    $x = 70;
    $y = 20;
    retrun view('user')->with("x" , $x ->  with ("y" , $y));
})


Route::get('/withname', function(){
    $x = 70;
    $y = 20;
    retrun view('user')->withX("x" , $x ->  with ("y" , $y));
})
Route::get('set', function(){
    retrun response("cookie set")->
    ->header()
});


<h1>This is about </h1>

<a href="{{ routw("about") }}">About</a>
<a href="{{ routw("user") }}">User</a>
