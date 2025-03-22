<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;


// function getUsers(){
//     return [
//         1 => ['name'=>'Rajat Sharma', 'phone'=>'9517674502', 'email'=>'vs6326776@gmail.com'],
//         2 => ['name'=>'Shailendra Kumar Sharma', 'phone'=>'9212131580', 'email'=>'shialendrakrsharma@gmail.com'],
//         3 => ['name'=>'Nilendra Sharma', 'phone'=>'8796272273', 'email'=>'sharmanilendra@gmail.com'],
//         4 => ['name'=>'Shailesh Kumar Sharma', 'phone'=>'9762816456', 'email'=>'shaileshkrsharma@gmail.com'],
//         5 => ['name'=>'Vikas Sharma', 'phone'=>'7387657085', 'email'=>'vikassharma@gmail.com'],
//         6 => ['name'=>'Lagawan', 'phone'=>'9565924408', 'email'=>'sharmavishal01071997@gmail.com']
//     ];
// }

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/greet', function(){
//     return view('greet');
// });


// It overrides the route of the same name in the UserController
// Route::get('/', [UserController::class, 'greet']);

// Creating temporary views with passing data on Routes

// Route::get('/u/{username?}', function (string $username = null) {
//     if($username){
//         return "<h1>Hello ".$username." </h1>";
//     }else{
//         return "<h1>No Username found</h1>";
//     }
// });


// Route::get('/first', function(){
//     return view('first');
// });

// Route::view('/first', 'first');


// Route::get('/u/{username?}', function ($username = null) {
//     if($username){
//         return "<h1>Welcome " . $username . "</h1>";
//     }else{
//         return "<h1>No Username provided...</h1>";
//     }
// })->whereAlpha('username');


Route::fallback(function () {
    return 
        "<h1>Page Does Not Exit</h1><br><hr><hr><br>
        <h2>Forbidden Page ...404</h2>";
});





// another lesson starts here


// Route::get('blade', function(){
//     return view('blade');
// });


// Data passing to view with Route

// Route::get('/profile', function(){
//     $name = "Rajat";
//     $profile = "Developer";

//     //************ */ Method one /***************** */

    // return view('profile', [
    //     'name' => $name,
    //     'profile' => $profile
    // ]);

    //************ */ Method two /***************** */

    // return view('profile')
    // ->with('name', $name)
    // ->with('profile', $profile);

    //************ */ Method three /***************** */

//     return view('profile')
//     ->withName($name)
//     ->withProfile($profile);
// });


// Route::get('/users', function(){
//     // $users = [
//     //     1 => ['name'=>'Rajat Sharma', 'phone'=>'9517674502', 'email'=>'vs6326776@gmail.com'],
    //     2 => ['name'=>'Shailendra Kumar Sharma', 'phone'=>'9212131580', 'email'=>'shialendrakrsharma@gmail.com'],
    //     3 => ['name'=>'Nilendra Sharma', 'phone'=>'8796272273', 'email'=>'sharmanilendra@gmail.com'],
    //     4 => ['name'=>'Shailesh Kumar Sharma', 'phone'=>'9762816456', 'email'=>'shaileshkrsharma@gmail.com'],
    //     5 => ['name'=>'Vikas Sharma', 'phone'=>'7387657085', 'email'=>'vikassharma@gmail.com'],
    //     6 => ['name'=>'Vishal Sharma', 'phone'=>'9565924408', 'email'=>'sharmavishal01071997@gmail.com']
    // ];

//     $users = getUsers();

//     return view('users')->with('user', $users);
// });



// Route::controller(UserController::class)->group(function(){
//     Route::get('/', 'home')->name('home');
//     // Route::get('/greet', 'greet');
//     Route::get('/blog', 'blog')->name('blog');
//     Route::get('/about', 'about')->name('about');
// });



// ************* LARAVEL PROJECT *******************

// Route::get('/', function (){
//     return view('project.home');
// });


Route::get('/', [ProductController::class, 'index'])->name('project.home');
Route::get('create', [ProductController::class, 'create'])->name('project.create');
Route::post('store', [ProductController::class, 'store'])->name('project.store');
Route::get('edit/{id}', [ProductController::class, 'edit'])->name('project.edit');