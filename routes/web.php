<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

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
    return view('welcome_humanr');
});

// The route we have created to show all jobs in database
Route::get('/job', [\App\Http\Controllers\JobController::class, 'index']);

Route::get('/job/{job}', 
    [\App\Http\Controllers\JobController::class, 'show']);
    
Route::get('/job/create/job', 
    [\App\Http\Controllers\JobController::class, 'create']); //shows create job form
Route::post('/job/create/job',
    [\App\Http\Controllers\JobController::class, 'store']); //saves the created job to the databse
Route::get('/job/{job}/edit', 
    [\App\Http\Controllers\JobController::class, 'edit']); //shows edit job form
Route::put('/job/{job}/edit', 
    [\App\Http\Controllers\JobController::class, 'update']); //commits edited job to the database 
Route::delete('/job/{job}', 
    [\App\Http\Controllers\JobController::class, 'destroy']); //deletes job from the database

// requesting a new page
Route::get('/hello', function () {
    echo "<html>"  .
"<head><title>Laravel</title>                job
    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
                            font-weight: 100;
                font-size: 20px;
                font-family: 'Lato';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .content {
                text-align: center;
                display: inline-block;
            }
            .title {
                font-size: 110px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='content'>
                <div class='title'>Hello, Dear Reader</div>
                <div class='container'>
                    <div class='content'>How are you? I hope you would
                    love this book!
                    </div>
                </div>
            </div>
        </div>
    </body>" .
"</html>"; 
});

Route::get('hello/{name}', function ($name) {
    echo "Hello " . $name;
});

// Latest syntax in laravel 8. Use this for entire app
Route::get('about', [MyController::class, 'about']);




//Route::get('/', 'App\Http\Controllers\TasksController@index');
Route::get('tasks/create', 'App\Http\Controllers\TasksController@create');
Route::post('tasks', 'App\Http\Controllers\TasksController@store');

