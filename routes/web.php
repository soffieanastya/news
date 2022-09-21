<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
//use App\Models\Post; //deklarasi model di sini, ikut sertakan dia

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

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
    return view('home', [
        "title" => "Home",
        "status" => "Active"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "status" => "Active",
        "name" => "Soffie Anastya",
        "prodi" => "Pendidikan Ilmu Komputer",
        "email" => "soffieanastyaa@gmail.com"
    ]);
});

Route::get('/blog', [PostController::class, 'index']); //ada di controller, namanya postcontroller, index tu nama method/function
Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts->load('user', 'category'),
        'category' => $category->name
    ]);
});

Route::get('/authors/{user:username}', function(User $user){
    return view('blog', [
        'title' => 'User post',
        'posts' => $user->post->load('category', 'user')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
