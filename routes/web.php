<?php

use App\Http\Controllers\deletePost;
use App\Http\Controllers\DeletePostController;
use App\Http\Controllers\postController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'pageTitle' => 'home',
        'metaTitle' => 'home nel metatitle'
    ]);
});

Route::get('/about', function () {
    return view('about',
    [
        'pageTitle' => 'about',
        'metaTitle' => 'about nel metatitle'
    ]);
});
//direttive con blade, compact crea un array associativo che prende le nostre direttive e associa il valore
Route::get('/esempio', function () {
    $items = ['item1', 'item2', 'item3'];
    $title = 'esempio con blade';
    $numbers = [1,2,3,4,5];
    $emptyArray = [];
    $someValue = 'qualcosa';
    return view('esempio', compact('items', 'title', 'numbers', 'emptyArray', 'someValue'));
});

Route::get('/prova',[ProfileController::class, 'provaController']);
//route con controller avente classe con metodo privato che viene richiamato da metodo pubblico
Route::get('/data',[ProfileController::class, 'provaData']);

Route::get('/posts', function(){
    $posts = Post::all();
    return view('posts.index', ['posts' => $posts]);
})->name('posts.index');

Route::get('/posts/create', function(){
    //crea un nuovo post con dati fittizzi
    //$post = Post::create([
    //    'created_at' => now(),
    //    'updated_at' => now(),
    //]);
    //$post = Post::factory()->count(20)->create();
    //return view('posts.create', compact('post'));
    //return $post;
})->name('post.index');

Route::get('/posts/delete/{id}', [DeletePostController::class, 'deletePost']);

//route dinamiche

Route::get('/post/{post}', [postController::class, 'getSinglePost'])->name('posts.show');

//modificare un post con una put

Route::put('/post/{id}', [postController::class, 'putSinglePost'])->name('post.update');

    //eliminare un post

Route::delete('post/delete', [postController::class, 'deleteSinglePost']);