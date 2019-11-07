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
    return view('welcome');
});

//List all users
Route::get('/users', function () {

  $arr = array(
    array(
        "title" => "Mr",
        "firstName" => "Gerron",
        "lastName" => "Tinoy",
        "userName" => "blueshark123",
        "photo" => "test1"
    ),
    array(
      "title" => "Mrs",
      "firstName" => "Olivia",
      "lastName" => "Smith",
      "userName" => "pinkflamingo456",
      "photo" => "test2"
    ),
    array(
      "title" => "Miss",
      "firstName" => "Jane",
      "lastName" => "Anderson",
      "userName" => "orangetiger678",
      "photo" => "test3"
    ),
    array(
      "title" => "Mr",
      "firstName" => "Jonathan",
      "lastName" => "Allen",
      "userName" => "yellowkangaroo902",
      "photo" => "test4"
    ),
    array(
      "title" => "Mr",
      "firstName" => "Philip",
      "lastName" => "Jameson",
      "userName" => "whitefish793",
      "photo" => "test5"
    ),
    array(
      "title" => "Ms",
      "firstName" => "Miranda",
      "lastName" => "Jackson",
      "userName" => "blackbird098",
      "photo" => "test6"
    )
);

return response()->json([
    'results' => $arr
])->header('Access-Control-Allow-Origin', 'http://localhost:8080');

});
